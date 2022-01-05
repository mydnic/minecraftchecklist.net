<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $objectives = Objective::latest()->take(4 * 4)->get();

        if (auth()->check()) {
            $world = auth()->user()->defaultWorld();
            $objectives = $objectives->map(function ($objective) use ($world) {
                $objective->completed = $objective->worlds->contains($world->id);
                $objective->worlds = $objective->worlds->where('user_id', auth()->id());
                return $objective;
            });
        }

        return inertia('Home', compact('objectives'));
    }

    public function about()
    {
        return inertia('About');
    }
}
