<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $racks = Rack::all();
        return view('settings.rack.index', compact('racks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.rack.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        Rack::create($request->all());
        return redirect()->route('racks.index')->with('success', 'Rack created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rack $rack)
    {
        return view('settings.rack.show', compact('rack'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rack $rack)
    {
        return view('settings.rack.edit', compact('rack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rack $rack)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $rack->update($request->all());
        return redirect()->route('racks.index')->with('success', 'Rack updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rack $rack)
    {
        $rack->delete();
        return redirect()->route('racks.index')->with('success', 'Rack deleted successfully.');
    }
}
