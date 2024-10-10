<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiServiceController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasiservice = KonfigurasiService::first() ?? new KonfigurasiService();
        return view('admin.layanan.konfigurasi.create', compact('konfigurasiservice', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $konfigurasiservice = KonfigurasiService::first() ?? new KonfigurasiService();

    

        // Update atau simpan data
        $konfigurasiservice->nav = $request->nav;
        $konfigurasiservice->title = $request->title;
        $konfigurasiservice->description = $request->description;


        $konfigurasiservice->save();

        return redirect()->route('konfigurasiservice.index')->with('success', 'Data berhasil disimpan!');
    }
}
