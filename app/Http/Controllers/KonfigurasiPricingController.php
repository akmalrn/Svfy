<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiPricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiPricingController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasipricing = KonfigurasiPricing::first() ?? new KonfigurasiPricing();
        return view('admin.pricing.konfigurasi.create', compact('konfigurasipricing', 'user'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'overview' => 'nullable|string|max:255',
        ]);

        $konfigurasipricing = KonfigurasiPricing::first() ?? new KonfigurasiPricing();

    

        // Update atau simpan data
        $konfigurasipricing->nav = $request->nav;
        $konfigurasipricing->title = $request->title;
        $konfigurasipricing->overview = $request->overview;

        $konfigurasipricing->save();

        return redirect()->route('konfigurasipricing.index')->with('success', 'Data berhasil disimpan!');
    }
}
