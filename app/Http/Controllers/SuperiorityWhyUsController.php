<?php

namespace App\Http\Controllers;

use App\Models\SuperiorityWhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperiorityWhyUsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $superiority = SuperiorityWhyUs::all();
        return view('admin.whyus.keunggulan.index', compact('superiority', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.whyus.keunggulan.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'superiority' => 'required|string|max:255',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif.svg.webp|max:2048',
        ]);

        $superiority = new SuperiorityWhyUs();

        if ($request->hasFile('path')) {
            if (isset($superiority->path) && file_exists(($superiority->path))) {
                unlink(($superiority->path));
            }

            $superiorityName = time() . '_' . $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('whyusss'), $superiorityName);
            $superiority->path = 'whyusss/' . $superiorityName;
        }

        $superiority->superiority = $request->superiority;
        $superiority->save();

        return redirect()->route('superioritywhyus.index')->with('success', 'Keunggulan Berhasil Dibuat.');
    }

    public function show($id)
    {
        $superiority = SuperiorityWhyUs::findOrFail($id);
        return view('superioritywhyus.show', compact('superiority'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $superiority = SuperiorityWhyUs::findOrFail($id);
        return view('admin.whyus.keunggulan.edit', compact('superiority', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'superiority' => 'required|string|max:255',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Temukan entri berdasarkan ID
        $superiority = SuperiorityWhyUs::findOrFail($id);

        // Cek apakah ada file baru yang diunggah
        if ($request->hasFile('path')) {
            if ($superiority->path) {
                if (file_exists($superiority->path)) {
                    unlink($superiority->path);
                }
            }
            $superiority->path = 'whyusss/' . $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('whyusss'), $superiority->path);
        }

        // Update fields
        $superiority->superiority = $request->superiority;
        $superiority->save();

        return redirect()->route('superioritywhyus.index')->with('success', 'Keunggulan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $superiority = SuperiorityWhyUs::findOrFail($id);

        if (file_exists(($superiority->path))) {
            unlink(($superiority->path));
        }

        $superiority->delete();

        return redirect()->route('superioritywhyus.index')->with('success', 'Keunggulan Berhasil Dihapus.');
    }
}
