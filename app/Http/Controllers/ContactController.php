<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $contact = Contact::first() ?? new Contact();
        return view('admin.contact.create', compact('contact', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'email_address' => 'nullable|string|max:255',
            'map' => 'nullable',
            'link_youtube' => 'nullable',
        ]);
        $contact = Contact::first() ?? new Contact();

        $contact->nav = $request->nav;
        $contact->title = $request->title;
        $contact->address = $request->address;
        $contact->telephone = $request->telephone;
        $contact->email_address = $request->email_address;
        $contact->map = $request->map;
        $contact->link_youtube = $request->link_youtube;

        $contact->save();

        return redirect()->route('contact.index')->with('success', 'Data berhasil disimpan!');
    }
}
