<?php
namespace App\Http\Controllers;
use App\Models\Section2;
use Illuminate\Http\Request;


class Section2Controller extends Controller
{
    public function index()
    {
        $section2s = Section2::all();
        return view('section2s.index', compact('section2s'));
    }

    public function create()
    {
        return view('section2s.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon_name' => 'required|string|max:50',
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);

        Section2::create($validated);

        return redirect()->route('section2s.index')->with('success', 'Section2 created successfully!');
    }

    public function show($id)
    {

        $section2 = Section2::findOrFail($id);


        return view('section2s.view', compact('section2'));
    }
    public function edit(Section2 $section2)
    {
        return view('section2s.edit', compact('section2'));
    }

    public function update(Request $request, Section2 $section2)
    {
        $validated = $request->validate([
            'icon_name' => 'required|string|max:50',
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);

        $section2->update($validated);

        return redirect()->route('section2s.index')->with('success', 'Section2 updated successfully!');
    }

    public function destroy(Section2 $section2)
    {
        $section2->delete();

        return redirect()->route('section2s.index')->with('success', 'Section2 deleted successfully!');
    }
}
