<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiLayananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiLayananDetailController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasilayanandetail = KonfigurasiLayananDetail::first() ?? new KonfigurasiLayananDetail();
        return view('admin.layanan.layanandetail.create', compact('konfigurasilayanandetail', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title_feature' => 'nullable|string|max:255',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $konfigurasilayanandetail = KonfigurasiLayananDetail::first() ?? new KonfigurasiLayananDetail();

    

        // Update atau simpan data
        $konfigurasilayanandetail->nav = $request->nav;
        $konfigurasilayanandetail->title_feature = $request->title_feature;


        $konfigurasilayanandetail->save();

        return redirect()->route('konfigurasilayanandetail.index')->with('success', 'Data berhasil disimpan!');
    }
}
