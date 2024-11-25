<?php


namespace App\Http\Controllers;

use App\Models\Section5;
use Illuminate\Http\Request;

class Section5Controller extends Controller
{
    public function index()
    {
        $section5s = Section5::all();
        return view('section5.index', compact('section5s'));
    }

    public function create()
    {
        return view('section5.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'content' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'facebook_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        Section5::create($validated);

        return redirect()->route('section5.index')->with('success', 'Record created successfully.');
    }

    public function show(Section5 $section5)
    {
        return view('section5.show', compact('section5'));
    }

    public function edit(Section5 $section5)
    {
        return view('section5.edit', compact('section5'));
    }

    public function update(Request $request, Section5 $section5)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'content' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'facebook_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        $section5->update($validated);

        return redirect()->route('section5.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(Section5 $section5)
    {
        $section5->delete();
        return redirect()->route('section5.index')->with('success', 'Record deleted successfully.');
    }
}
