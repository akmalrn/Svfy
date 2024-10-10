<?php

namespace App\Http\Controllers;

use App\Models\KeunggulanLayananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeunggulanLayananDetailController extends Controller
{
    public function index() {
        $user = Auth::user();
        $keunggulans = KeunggulanLayananDetail::all();
        return view('admin.layanan.layanandetail.keunggulan.index', compact('keunggulans', 'user'));
    }

    public function show($id) {
        $keunggulan = KeunggulanLayananDetail::findOrFail($id);
        return view('admin.layanan.layanandetail.keunggulan.show', compact('keunggulan'));
    }

    public function create() {
        $user = Auth::user();
        return view('admin.layanan.layanandetail.keunggulan.create', compact('user'));
    }

    public function store(Request $request) {
        $request->validate(['superiority' => 'required']);
        KeunggulanLayananDetail::create($request->all());
        return redirect()->route('keunggulanlayanandetail.index')->with('success', 'Keunggulan Berhasil Dibuat.');
    }

    public function edit($id) {
        $user = Auth::user();
        $keunggulan = KeunggulanLayananDetail::findOrFail($id);
        return view('admin.layanan.layanandetail.keunggulan.edit', compact('keunggulan', 'user'));
    }

    public function update(Request $request, $id) {
        $request->validate(['superiority' => 'required']);
        $keunggulan = KeunggulanLayananDetail::findOrFail($id);
        $keunggulan->update($request->all());
        return redirect()->route('keunggulanlayanandetail.index')->with('success', 'Keunggulan Berhasil Diperbarui.');
    }

    public function destroy($id) {
        $keunggulan = KeunggulanLayananDetail::findOrFail($id);
        $keunggulan->delete();
        return redirect()->route('keunggulanlayanandetail.index')->with('success', 'Keunggulan Berhasil Dihapus.');
    }

}
