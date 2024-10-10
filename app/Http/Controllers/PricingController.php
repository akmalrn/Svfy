<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pricings = Pricing::all();
        return view('admin.pricing.index', compact('pricings', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.pricing.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|int',
            'superiority' => 'required',
        ]);

        Pricing::create($request->all());
        return redirect()->route('pricing.index')->with('success', 'Pricing berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pricing = Pricing::findOrFail($id);
        return view('pricing.show', compact('pricing'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $pricing = Pricing::findOrFail($id);
        return view('admin.pricing.edit', compact('pricing', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|int',
            'superiority' => 'required',
        ]);

        $pricing = Pricing::findOrFail($id);
        $pricing->update($request->all());

        return redirect()->route('pricing.index')->with('success', 'Pricing berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->delete();

        return redirect()->route('pricing.index')->with('success', 'Pricing berhasil dihapus.');
    }
}
