<?php

namespace App\Http\Controllers\Asesor\Assessment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('asesor.assessment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asesor.assessment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Assessment creation logic here
        return redirect()->route('asesor.assessment.index')->with('success', 'Assessment created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('asesor.assessment.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('asesor.assessment.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Assessment update logic here
        return redirect()->route('asesor.assessment.index')->with('success', 'Assessment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Assessment deletion logic here
        return redirect()->route('asesor.assessment.index')->with('success', 'Assessment deleted successfully');
    }
}