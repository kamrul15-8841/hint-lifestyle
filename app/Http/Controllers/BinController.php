<?php

namespace App\Http\Controllers;

use App\Models\Bin;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bins = Bin::all();
        return view('settings.bin.index', compact('bins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.bin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
//        dd($request->all());
//        exit();
        Bin::create($request->all());
        return redirect()->route('bins.index')->with('success', 'Bin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bin $bin)
    {
//        dd($bin);
        return view('settings.bin.show', compact('bin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bin $bin)
    {
        return view('settings.bin.edit', compact('bin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bin $bin)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $bin->update($request->all());
        return redirect()->route('bins.index')->with('success', 'Bin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bin $bin)
    {
        $bin->delete();
        return redirect()->route('bins.index')->with('success', 'Bin deleted successfully.');

    }
}
