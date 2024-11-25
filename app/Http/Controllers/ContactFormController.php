<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $contactForms = ContactForm::all();
        return view('contact_form.index', compact('contactForms'));
    }

    public function create()
    {
        return view('contact_form.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactForm::create($request->all());

        return redirect()->route('/')->with('success', 'Contact form submitted successfully.');
    }

    public function show(ContactForm $contactForm)
    {
        return view('contact_form.show', compact('contactForm'));
    }

    public function edit(ContactForm $contactForm)
    {
        return view('contact_form.edit', compact('contactForm'));
    }

    public function update(Request $request, ContactForm $contactForm)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contactForm->update($request->all());

        return redirect()->route('contact_form.index')->with('success', 'Contact form updated successfully.');
    }

    public function destroy(ContactForm $contactForm)
    {
        $contactForm->delete();

        return redirect()->route('contact_form.index')->with('success', 'Contact form deleted successfully.');
    }
}
