<?php

namespace App\Http\Controllers;

use App\Models\Section3;
use Illuminate\Http\Request;

class Section3Controller extends Controller
{
    // Display all Section3 records
    public function index()
    {
        $section3s = Section3::all();
        return view('section3s.index', compact('section3s'));
    }

    // Show the form to create a new Section3 record
    public function create()
    {
        return view('section3s.create');
    }

    // Store a new Section3 record
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image_link' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'demo' => 'string',
        ]);

        // Create the Section3 record
        Section3::create($request->all());

        // Redirect back with a success message
        return redirect()->route('section3s.index')->with('success', 'Section3 created successfully.');
    }

    // Show the form to edit an existing Section3 record
    public function edit($id)
    {
        $section3 = Section3::findOrFail($id);
        return view('section3s.edit', compact('section3'));
    }

    // Update an existing Section3 record
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'image_link' => 'required|url',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'demo' => 'string',
        ]);

        // Find the Section3 record and update it
        $section3 = Section3::findOrFail($id);
        $section3->update($request->all());

        // Redirect back with a success message
        return redirect()->route('section3s.index')->with('success', 'Section3 updated successfully.');
    }

    // Show the details of a Section3 record
    public function show($id)
    {
        $section3 = Section3::findOrFail($id);
        return view('section3s.view', compact('section3'));
    }

    // Delete a Section3 record
    public function destroy($id)
    {
        $section3 = Section3::findOrFail($id);
        $section3->delete();

        // Redirect back with a success message
        return redirect()->route('section3s.index')->with('success', 'Section3 deleted successfully.');
    }
}
