<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        Experience::create($request->all());
        return redirect()->route('experiences.index')->with('success', 'Experience created successfully.');
    }

    public function edit(Experience $experience)
    {
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        $experience->update($request->all());
        return redirect()->route('experiences.index')->with('success', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experiences.index')->with('success', 'Experience deleted successfully.');
    }

    public function show($id)
    {
        
        $experience = Experience::findOrFail($id);

        return view('experiences.show', compact('experience'));
    }
}
