<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiBlogController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasiblog = KonfigurasiBlog::first() ?? new KonfigurasiBlog();
        return view('admin.blog.konfigurasi.create', compact('konfigurasiblog', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $konfigurasiblog = KonfigurasiBlog::first() ?? new KonfigurasiBlog();



        // Update atau simpan data
        $konfigurasiblog->nav = $request->nav;
        $konfigurasiblog->title = $request->title;


        $konfigurasiblog->save();

        return redirect()->route('konfigurasiblog.index')->with('success', 'Data berhasil disimpan!');
    }
}
