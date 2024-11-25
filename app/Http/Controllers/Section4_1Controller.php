<?php

namespace App\Http\Controllers;

use App\Models\Section4_1;
use Illuminate\Http\Request;

class Section4_1Controller extends Controller
{
    // Display all Section4_1 records
    public function index()
    {
        $section4_1s = Section4_1::all();
        return view('section4_1s.index', compact('section4_1s'));
    }

    // Show the form to create a new Section4_1 record
    public function create()
    {
        return view('section4_1s.create');
    }

    // Store a new Section4_1 record
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'education' => 'required|string|max:255',
            'from_where' => 'required|string|max:255',
            'details' => 'required|string',
            'gpa' => 'nullable|min:0|max:255',
        ]);

        // Create the Section4_1 record
        Section4_1::create($request->all());

        // Redirect back with a success message
        return redirect()->route('section4_1s.index')->with('success', 'Section4_1 created successfully.');
    }

    // Show the form to edit an existing Section4_1 record
    public function edit($id)
    {
        $section4_1 = Section4_1::findOrFail($id);
        return view('section4_1s.edit', compact('section4_1'));
    }

    // Update an existing Section4_1 record
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'education' => 'required|string|max:255',
            'from_where' => 'required|string|max:255',
            'details' => 'required|string',
            'gpa' => 'nullable|min:0|max:255',
        ]);

        // Find and update the Section4_1 record
        $section4_1 = Section4_1::findOrFail($id);
        $section4_1->update($request->all());

        // Redirect back with a success message
        return redirect()->route('section4_1s.index')->with('success', 'Section4_1 updated successfully.');
    }

    // Show the details of a Section4_1 record
    public function show($id)
    {
        $section4_1 = Section4_1::findOrFail($id);
        return view('section4_1s.view', compact('section4_1'));
    }

    // Delete a Section4_1 record
    public function destroy($id)
    {
        $section4_1 = Section4_1::findOrFail($id);
        $section4_1->delete();

        // Redirect back with a success message
        return redirect()->route('section4_1s.index')->with('success', 'Section4_1 deleted successfully.');
    }
}
