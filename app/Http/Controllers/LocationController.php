<?php

namespace App\Http\Controllers;

use App\Models\Bin;
use App\Models\Location;
use App\Models\Rack;
use App\Models\Row;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::with('row', 'rack', 'bin')->get();
        return view('settings.location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rows = Row::all();
        $racks = Rack::all();
        $bins = Bin::all();
        return view('settings.location.create', compact('rows', 'racks', 'bins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'row_id' => 'nullable|exists:rows,id',
            'rack_id' => 'nullable|exists:racks,id',
            'bin_id' => 'nullable|exists:bins,id',
        ]);

        Location::create($request->all());
        return redirect()->route('locations.index')->with('success', 'Location created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('settings.location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        $rows = Row::all();
        $racks = Rack::all();
        $bins = Bin::all();
        return view('settings.location.edit', compact('location', 'rows', 'racks', 'bins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'row_id' => 'nullable|exists:rows,id',
            'rack_id' => 'nullable|exists:racks,id',
            'bin_id' => 'nullable|exists:bins,id',
        ]);

        $location->update($request->all());
        return redirect()->route('locations.index')->with('success', 'Location updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index')->with('success', 'Location deleted successfully.');
    }
}
