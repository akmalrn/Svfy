<?php

namespace App\Http\Controllers;

use App\Models\KeunggulanAboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeunggulanAboutUsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $keunggulan = KeunggulanAboutUs::all();
        return view('admin.aboutus.keunggulan.index', compact('keunggulan', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $keunggulan = KeunggulanAboutUs::all();
        return view('admin.aboutus.keunggulan.create', compact('keunggulan', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'superiority' => 'required|string|max:255',
        ]);

        KeunggulanAboutUs::create([
            'superiority' => $request->input('superiority'),
        ]);

        return redirect()->route('keunggulanaboutus.index')->with('success', 'Keunggulan Berhasil Dibuat.');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $keunggulan = KeunggulanAboutUs::findOrFail($id); 
        return view('admin.aboutus.keunggulan.edit', compact('keunggulan', 'user'));
    }

    public function show($id)
    {
        $keunggulan = KeunggulanAboutUs::findOrFail($id); 
        return view('keunggulanaboutus.show', compact('keunggulan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'superiority' => 'required|string|max:255',
        ]);

        $keunggulan = KeunggulanAboutUs::findOrFail($id);
        $keunggulan->superiority = $request->input('superiority');
        $keunggulan->save(); 

        return redirect()->route('keunggulanaboutus.index')->with('success', 'Keunggulan Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        $keunggulan = KeunggulanAboutUs::findOrFail($id);
        $keunggulan->delete(); 

        return redirect()->route('keunggulanaboutus.index')->with('success', 'Keunggulan Berhasil Dihapus.');
    }
}
