<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FaqController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $faq = Faq::all();
        return view('admin.faq.index', compact('faq', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.faq.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'number' => 'required|string',
        ]);

        Faq::create($request->all());
        return redirect()->route('faqss.index')->with('success', 'FAQ created successfully.');
    }

    public function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'number' => 'required|string|max:255',
        ]);

        $keunggulan = Faq::findOrFail($id);
        $keunggulan->title = $request->input('title');
        $keunggulan->number = $request->input('number');
        $keunggulan->description = $request->input('description');
        $keunggulan->save(); 

        return redirect()->route('faqss.index')->with('success', 'Keunggulan Berhasil Diperbarui.');
    }
    

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('faqss.index')->with('success', 'FAQ deleted successfully.');
    }
    
}
