<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sliders = Slider::all(); // Fetch all sliders
        return view('admin.slider.index', compact('sliders', 'user')); // Return view with sliders
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.slider.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif.webp|max:8192',
            'title' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'title3' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('path')) {
            $filePath = $request->file('path')->move(('sliders'), $request->file('path')->getClientOriginalName());
        }

        Slider::create([
            'path' => 'sliders/' . $request->file('path')->getClientOriginalName(), // Simpan path relatif
            'title' => $request->title,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'description' => $request->description,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider Berhasil Dibuat.');
    }


    public function edit($id)
    {
        $user = Auth::user();
        $slider = Slider::findOrFail($id); // Fetch the slider by ID
        return view('admin.slider.edit', compact('slider', 'user')); // Return edit view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'image|mimes:jpeg,png,jpg,gif.webp|max:8192',
            'title' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'title3' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $slider = Slider::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($slider->path) {
                if (file_exists($slider->path)) {
                    unlink($slider->path);
                }
            }
            $slider->path = 'sliders/' . $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('sliders'), $slider->path);
        }

        $slider->title = $request->title;
        $slider->title2 = $request->title2;
        $slider->title3 = $request->title3;
        $slider->description = $request->description;
        $slider->save(); // Save updated data

        return redirect()->route('slider.index')->with('success', 'Slider Berhasil Diperbarui.');
    }


    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        // Delete image from public directory
        if ($slider->path) {
            $imagePath = ($slider->path);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Menghapus gambar dari direktori public
            }
        }
        $slider->delete(); // Delete the slider

        return redirect()->route('slider.index')->with('success', 'Slider Berhasil Dihapus.');
    }
}
