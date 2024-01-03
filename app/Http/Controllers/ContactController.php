<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts_show', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:3|max:30',
            'phone' => 'required|min:10|max:20',
            'address' => 'required|min:10|max:1000',
            'message' => 'required|string|min:6|max:3000'
        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,

        ]);
        return redirect()->route('HPage')->with('message', 'your message submitted successfully');
    }

    public function edit(Contact $contact, $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts_edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:3|max:30',
            'phone' => 'required|min:10|max:20',
            'address' => 'required|min:10|max:1000',
            'message' => 'required|string|min:6|max:3000'
        ]);

        $id = $request->id;
        Contact::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
        ]);
        return redirect()->route('contacts.show')->with('message', 'Contact Message updated successfully');
    }


    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contacts.show')->with('message', 'Contact Message deleted successfully');
    }
}
