<?php

namespace App\Http\Controllers;

use App\Models\Section1;
use Illuminate\Http\Request;

class Section1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Public_index()
    {
        $section1s = Section1::all();
        return view('welcome', compact('section1s'));
    }
    public function index()
    {
        $section1s = Section1::orderBy("id" , "asc") -> paginate();
        return view('section1s.index', compact('section1s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('section1s.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook_link' => 'nullable|url',
            'instgram_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'image1' => 'nullable|string|max:1000',
            'image2' => 'nullable|string|max:1000',
            'image3' => 'nullable|string|max:1000',
        ]);

        Section1::create($validated);

        return redirect()->route('section1s.index')->with('success', 'Section1 created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section1 $section1){

        return view('section1s.view', compact('section1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section1 $section1)
    {
        return view('section1s.edit', compact('section1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section1 $section1)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook_link' => 'nullable|url',
            'instgram_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'image1' => 'nullable|string|max:1000',
            'image2' => 'nullable|string|max:1000',
            'image3' => 'nullable|string|max:1000',
        ]);

        $section1->update($validated);

        return redirect()->route('section1s.index')->with('success', 'Section1 updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section1 $section1)
    {
        $section1->delete();

        return redirect()->route('section1s.index')->with('success', 'Section1 deleted successfully!');
    }
}
