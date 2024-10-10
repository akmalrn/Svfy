<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiOfferController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasioffer = KonfigurasiOffer::first() ?? new KonfigurasiOffer();
        return view('admin.offer.konfigurasi.create', compact('konfigurasioffer', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'title_include' => 'nullable|string|max:255',
            'include' => 'nullable|string|max:255',
            'title_include2' => 'nullable|string|max:255',
            'include2' => 'nullable|string|max:255',
            'title_include3' => 'nullable|string|max:255',
            'include3' => 'nullable|string|max:255',
            'title_include4' => 'nullable|string|max:255',
            'include4' => 'nullable|string|max:255',
        ]);

        $konfigurasioffer = KonfigurasiOffer::first() ?? new KonfigurasiOffer();

        if ($request->hasFile('path')) {
            if ($konfigurasioffer->path) {
                if (file_exists(('konfigurasioffers/' . $konfigurasioffer->path))) {
                    unlink(('konfigurasioffers/' . $konfigurasioffer->path)); 
                }
            }
            $logoName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('konfigurasioffers'), $logoName);
            $konfigurasioffer->path = 'konfigurasioffers/' . $logoName;
        }

        $konfigurasioffer->nav = $request->nav;
        $konfigurasioffer->title = $request->title;
        $konfigurasioffer->title_include = $request->title_include;
        $konfigurasioffer->include = $request->include;
        $konfigurasioffer->title_include2 = $request->title_include2;
        $konfigurasioffer->include2 = $request->include2;
        $konfigurasioffer->title_include3 = $request->title_include3;
        $konfigurasioffer->include3 = $request->include3;
        $konfigurasioffer->title_include4 = $request->title_include4;
        $konfigurasioffer->include4 = $request->include4;

        $konfigurasioffer->save();

        return redirect()->route('konfigurasioffer.index')->with('success', 'Data berhasil disimpan!');
    }
}
