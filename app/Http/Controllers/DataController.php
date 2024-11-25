<?php
namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Experience;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4_1;
use App\Models\Section5;
use App\Models\Skill;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function getAllData()
    {

        $contactForms = ContactForm::all();
        $experiences = Experience::all();
        $section1s = Section1::first();
        $section2s = Section2::all();
        $section3s = Section3::all();
        $section4s = Section4_1::all();
        $section5 = Section5::first();
        $skills = Skill::all();


        return view('welcome', compact(
            'contactForms',
            'experiences',
            'section1s',
            'section2s',
            'section3s',
            'section4s',
            'section5',
            'skills'
        ));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        ContactForm::create($validated);


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
