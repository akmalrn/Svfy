<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfigurasiController extends Controller
{
    public function index($id = null)
    {
        $user = Auth::user();
        $konfigurasi = Konfigurasi::first() ?? new Konfigurasi();
        return view('admin/konfigurasi/create', compact('konfigurasi', 'user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'logo_title' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'path_aside' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'nama_website' => 'nullable|string|max:255',
            'nama_title' => 'nullable|string|max:255',
            'aside' => 'nullable|string|max:255',
            'aside2' => 'nullable|string|max:255',
            'nama_instagram' => 'nullable|string|max:255',
            'link_instagram' => 'nullable|string|max:255',
            'nama_facebook' => 'nullable|string|max:255',
            'link_facebook' => 'nullable|string|max:255',
            'nama_twitter' => 'nullable|string|max:255',
            'link_twitter' => 'nullable|string|max:255',
            'nama_linkedin' => 'nullable|string|max:255',
            'link_linkedin' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'description_footer' => 'nullable|string|max:255',
            'footer' => 'nullable|string|max:255',
            'timetable' => 'nullable|string|max:255',
        ]);

        $konfigurasi = Konfigurasi::first() ?? new Konfigurasi();

        if ($request->hasFile('logo')) {
            if ($konfigurasi->logo) {
                if (file_exists(('logos/' . $konfigurasi->logo))) {
                    unlink(('logos/' . $konfigurasi->logo));
                }
            }
            $logoName = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(('logos'), $logoName);
            $konfigurasi->logo = 'logos/' . $logoName;
        }

        if ($request->hasFile('logo_title')) {
            if ($konfigurasi->logo_title) {
                if (file_exists(('title_images/' . $konfigurasi->logo_title))) {
                    unlink(('title_images/' . $konfigurasi->logo_title));
                }
            }
            $titleImageName = $request->file('logo_title')->getClientOriginalName();
            $request->file('logo_title')->move(('title_images'), $titleImageName);
            $konfigurasi->logo_title = 'title_images/' . $titleImageName; 
        }

        if ($request->hasFile('path_aside')) {
            if ($konfigurasi->path_aside) {
                if (file_exists(('asides/' . $konfigurasi->path_aside))) {
                    unlink(('asides/' . $konfigurasi->path_aside));
                }
            }
            $logoName = $request->file('path_aside')->getClientOriginalName();
            $request->file('path_aside')->move(('asides'), $logoName);
            $konfigurasi->path_aside = 'asides/' . $logoName;
        }

        $konfigurasi->nama_website = $request->nama_website;
        $konfigurasi->nama_title = $request->nama_title;
        $konfigurasi->aside = $request->aside;
        $konfigurasi->aside2 = $request->aside2;
        $konfigurasi->nama_instagram = $request->nama_instagram;
        $konfigurasi->link_instagram = $request->link_instagram;
        $konfigurasi->nama_facebook = $request->nama_facebook;
        $konfigurasi->link_facebook = $request->link_facebook;
        $konfigurasi->nama_twitter = $request->nama_twitter;
        $konfigurasi->link_twitter = $request->link_twitter;
        $konfigurasi->nama_linkedin = $request->nama_linkedin;
        $konfigurasi->link_linkedin = $request->link_linkedin;
        $konfigurasi->alamat = $request->alamat;
        $konfigurasi->description_footer = $request->description_footer;
        $konfigurasi->footer = $request->footer;
        $konfigurasi->timetable = $request->timetable;

        $konfigurasi->save();

        return redirect()->route('konfigurasi.index')->with('success', 'Data berhasil disimpan!');
    }
}
