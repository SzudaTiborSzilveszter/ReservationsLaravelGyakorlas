<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Http\Requests\StoreTravelRequest;
use App\Http\Requests\UpdateTravelRequest;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Travel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTravelRequest $request)
    {
        $record = new Travel();
        $record->fill($request->All())->save();
        Travel::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        return Travel::find($travel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTravelRequest $request, Travel $travel)
    {
        $record = Travel::find($travel);
        $record->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        Travel::find($travel)->delete();
    }
}
