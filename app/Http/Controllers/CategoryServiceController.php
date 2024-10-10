<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryServiceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categoryservice = CategoryService::all();
        return view('admin.layanan.kategori.index', compact('categoryservice', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.layanan.kategori.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        CategoryService::create([
            'category' => $request->category,
        ]);

        return redirect()->route('categoryservice.index')->with('success', 'Kategori Berhasi Dibuat');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $categoryservice = CategoryService::findOrFail($id);
        return view('admin.layanan.kategori.edit', compact('categoryservice', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $categoryservice = CategoryService::findOrFail($id);
        $categoryservice->category = $request->category;
        $categoryservice->save();

        return redirect()->route('categoryservice.index')->with('success', 'Kategori Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $categoryservice = CategoryService::findOrFail($id);
        $categoryservice->delete();

        return redirect()->route('categoryservice.index')->with('success', 'Kategori Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $categoryId = $request->input('category');

        // Query berdasarkan keyword dan kategori
        $results = CategoryService::when($keyword, function ($query, $keyword) {
            return $query->where('title', 'like', "%$keyword%");
        })
            ->when($categoryId, function ($query, $categoryId) {
                return $query->where('category_service_id', $categoryId);
            })
            ->get();

        return view('search_results', compact('results'));
    }
}
