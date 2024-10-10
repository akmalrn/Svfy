<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiGalery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiGaleryController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasigallery = KonfigurasiGalery::first() ?? new KonfigurasiGalery();
        return view('admin.galery.konfigurasi.create', compact('konfigurasigallery', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $konfigurasigallery = KonfigurasiGalery::first() ?? new KonfigurasiGalery();

    

        // Update atau simpan data
        $konfigurasigallery->nav = $request->nav;
        $konfigurasigallery->title = $request->title;

        $konfigurasigallery->save();

        return redirect()->route('konfigurasigallery.index')->with('success', 'Data berhasil disimpan!');
    }
}
