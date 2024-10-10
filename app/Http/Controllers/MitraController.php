<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $mitras = Mitra::all();
        return view('admin.mitra.index', compact('mitras', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.mitra.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'link_mitra' => 'nullable|required|url',
        ]);

        $mitra = new Mitra();

        if ($request->hasFile('path')) {

            if (isset($mitra->path) && file_exists(($mitra->path))) {
                unlink(($mitra->path));
            }

            $mitraName = time() . '_' . $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('mitras'), $mitraName);
            $mitra->path = 'mitras/' . $mitraName;
        }

        // Create a new Mitra record
        $mitra->title = $request->title;
        $mitra->link_mitra = $request->link_mitra;
        $mitra->save();

        return redirect()->route('mitra.index')->with('success', 'Mitra Berhasil Dibuat.');

    }

    // Display the specified resource
    public function show($id)
    {
        $mitra = Mitra::find($id);
        return view('mitra.show', compact('mitra'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $mitra = Mitra::find($id);
        return view('admin.mitra.edit', compact('mitra', 'user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'link_mitra' => 'nullable|required|url',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192', // 'nullable' karena tidak wajib diisi saat update
        ]);

        // Ambil data Mitra yang akan di-update
        $mitra = Mitra::find($id);

        // Cek apakah ada file baru yang di-upload
        if ($request->hasFile('path')) {
            // Hapus gambar lama jika ada
            if ($mitra->path && file_exists(($mitra->path))) {
                unlink(($mitra->path)); // Hapus file lama
            }

            // Upload file gambar baru
            $mitraName = time() . '_' . $request->file('path')->getClientOriginalName(); // Nama file unik
            $request->file('path')->move(('mitras'), $mitraName);

            // Simpan path gambar baru
            $mitra->path = 'mitras/' . $mitraName;
        }

        // Update data lainnya
        $mitra->title = $request->title;
        $mitra->link_mitra = $request->link_mitra;

        // Simpan perubahan ke database
        $mitra->save();

        // Redirect dengan pesan sukses
        return redirect()->route('mitra.index')->with('success', 'Mitra Berhasil Diperbarui.');
    }


    public function destroy($id)
    {
        $mitra = Mitra::find($id);

        if ($mitra->path && file_exists(public_path($mitra->path))) {
            unlink(public_path($mitra->path));
        }

        $mitra->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('mitra.index')->with('success', 'Mitra Berhasil Dihapus.');
    }
}
