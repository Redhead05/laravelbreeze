<?php

namespace App\Http\Controllers\Lembaga\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lembaga.institution.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lembaga.institution.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Institution creation logic here
        return redirect()->route('lembaga.institution.index')->with('success', 'Institution created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('lembaga.institution.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('lembaga.institution.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Institution update logic here
        return redirect()->route('lembaga.institution.index')->with('success', 'Institution updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Institution deletion logic here
        return redirect()->route('lembaga.institution.index')->with('success', 'Institution deleted successfully');
    }
}