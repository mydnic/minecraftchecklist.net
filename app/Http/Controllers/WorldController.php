<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorldRequest;
use App\Http\Requests\UpdateWorldRequest;
use App\Models\World;

class WorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function edit(World $world)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorldRequest  $request
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorldRequest $request, World $world)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\World  $world
     * @return \Illuminate\Http\Response
     */
    public function destroy(World $world)
    {
        //
    }
}
