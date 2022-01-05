<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;
use App\Http\Requests\StoreObjectiveRequest;
use App\Http\Requests\UpdateObjectiveRequest;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectives = Objective::withCount('worlds')->with('worlds')->get();

        if (auth()->check() && $world = auth()->user()->defaultWorld()) {
            $objectives = $objectives->map(function ($objective) use ($world) {
                $objective->completed = $objective->worlds->contains($world->id);
                $objective->worlds = $objective->worlds->where('user_id', auth()->id());
                return $objective;
            });
        }

        return inertia('Checklist', compact('objectives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Objective/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObjectiveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObjectiveRequest $request)
    {
        Objective::create($request->validated());

        return redirect()->route('objective.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function show(Objective $objective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function edit(Objective $objective)
    {
        //
    }

    public function toggle(Request $request)
    {
        $objective = Objective::findOrFail($request->objective);

        $world = $request->user()->defaultWorld();

        $world->objectives()->toggle([$objective->id]);

        return redirect()->back();
    }
}
