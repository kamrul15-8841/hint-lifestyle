<?php

namespace App\Http\Controllers;

use App\Models\Row;
use Illuminate\Http\Request;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Row::all();
        return view('settings.row.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.row.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        Row::create($request->all());
        return redirect()->route('rows.index')->with('success', 'Row created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Row $row)
    {
        return view('settings.row.show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Row $row)
    {
        return view('settings.row.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Row $row)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $row->update($request->all());
        return redirect()->route('rows.index')->with('success', 'Row updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Row $row)
    {
        $row->delete();
        return redirect()->route('rows.index')->with('success', 'Row deleted successfully.');
    }
}
