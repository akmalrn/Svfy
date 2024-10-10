<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $gallery = Galery::all();
        return view('admin.galery.index', compact('gallery', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.galery.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
        ]);

        // Menyimpan gambar
        if ($request->hasFile('path')) {
            $servicesName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('galerys'), $servicesName);
        }

        Galery::create([
            'path' => 'galerys/' . $servicesName,
        ]);

        return redirect()->route('galery.index')->with('success', 'Gambar berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $user = Auth::user();
        $gallery = Galery::findOrFail($id);
        return view('admin.galery.edit', compact('gallery', 'user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
        ]);

        $gallery = Galery::findOrFail($id);
        $currentPath = $gallery->path;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(('galerys'), $fileName);
            $currentPath = 'galerys/' . $fileName;
        }

        $gallery->path = $currentPath;
        $gallery->save();

        return redirect()->route('galery.index')->with('success', 'Gambar berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $gallery = Galery::findOrFail($id);

        // Hapus file gambar dari direktori
        $file_path = ($gallery->path);
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        $gallery->delete();
        return redirect()->route('galery.index')->with('success', 'Gambar berhasil dihapus.');
    }
}
