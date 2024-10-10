<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigruasiFaqController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasifaq = KonfigurasiFaq::first() ?? new KonfigurasiFaq();
        return view('admin.faq.konfigurasi.create', compact('konfigurasifaq', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'overview' => 'nullable|string',
        ]);

        $konfigurasifaq = KonfigurasiFaq::first() ?? new KonfigurasiFaq();


        $konfigurasifaq->nav = $request->nav;
        $konfigurasifaq->title = $request->title;
        $konfigurasifaq->overview = $request->overview;

        $konfigurasifaq->save();

        return redirect()->route('konfigurasifaq.index')->with('success', 'Data berhasil disimpan!');
    }
}
 