<?php

namespace App\Http\Controllers;

use App\Models\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhyUsController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $whyus = WhyUs::first() ?? new WhyUs();
        return view('admin.whyus.create', compact('whyus', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'overview' => 'nullable|string|max:255',
            'link_youtube' => 'nullable',
        ]);
        $whyus = WhyUs::first() ?? new WhyUs();

        if ($request->hasFile('path')) {
            if ($whyus->path) {
                if (file_exists(('whyuss/' . $whyus->path))) {
                    unlink(('whyuss/' . $whyus->path));
                }
            }
            $whyusName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('whyuss'), $whyusName);
            $whyus->path = 'whyuss/' . $whyusName;
        }

        $whyus->nav = $request->nav;
        $whyus->title = $request->title;
        $whyus->overview = $request->overview;
        $whyus->link_youtube = $request->link_youtube;

        $whyus->save();

        return redirect()->route('whyus.index')->with('success', 'Data berhasil disimpan!');
    }
}
