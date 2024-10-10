<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $aboutus = AboutUs::first() ?? new AboutUs();
        return view('admin.aboutus.create', compact('aboutus', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'title' => 'nullable|string|max:255',
            'overview' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'title_include' => 'nullable|string',
            'include' => 'nullable|string',
            'title_include2' => 'nullable|string',
            'include2' => 'nullable|string',
            'title_include3' => 'nullable|string',
            'include3' => 'nullable|string',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $aboutus = AboutUs::first() ?? new AboutUs();

        if ($request->hasFile('path')) {
            // Delete old logo if exists
            if ($aboutus->path) {
                // Delete the old logo from the public directory
                if (file_exists(('aboutus/' . $aboutus->path))) {
                    unlink(('aboutus/' . $aboutus->path));
                }
            }
            // Move the new file to the public/aboutus directory
            $aboutusName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('aboutus'), $aboutusName);
            $aboutus->path = 'aboutus/' . $aboutusName; // Update the path
        }

        // Update atau simpan data
        $aboutus->nav = $request->nav;
        $aboutus->title = $request->title;
        $aboutus->overview = $request->overview;
        $aboutus->description = $request->description;
        $aboutus->title_include = $request->title_include;
        $aboutus->include = $request->include;
        $aboutus->title_include2 = $request->title_include2;
        $aboutus->include2 = $request->include2;
        $aboutus->title_include3 = $request->title_include3;
        $aboutus->include3 = $request->include3;


        $aboutus->save();

        return redirect()->route('aboutus.index')->with('success', 'Data berhasil disimpan!');
    }
}
