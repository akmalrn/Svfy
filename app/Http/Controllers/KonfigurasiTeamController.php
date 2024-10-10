<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiTeamController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasiteam = KonfigurasiTeam::first() ?? new KonfigurasiTeam();
        return view('admin.team.konfigurasi.create', compact('konfigurasiteam', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nav' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'overview' => 'nullable|string|max:255',
        ]);

            $konfigurasiteam = KonfigurasiTeam::first() ?? new KonfigurasiTeam();

            $konfigurasiteam->nav = $request->nav;
            $konfigurasiteam->title = $request->title;
            $konfigurasiteam->overview = $request->overview;
    
            $konfigurasiteam->save();
    
            return redirect()->route('teamkonfigurasi.index')->with('success', 'Data berhasil disimpan!');
        }
}   
