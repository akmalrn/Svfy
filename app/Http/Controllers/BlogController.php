<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\CategoryService;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Galery;
use App\Models\KeunggulanAboutUs;
use App\Models\Konfigurasi;
use App\Models\KonfigurasiBlog;
use App\Models\KonfigurasiFaq;
use App\Models\KonfigurasiGalery;
use App\Models\KonfigurasiOffer;
use App\Models\KonfigurasiPricing;
use App\Models\KonfigurasiService;
use App\Models\KonfigurasiTeam;
use App\Models\Mitra;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SuperiorityWhyUs;
use App\Models\Team;
use App\Models\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs', 'user'));
    }

    public function create()
    {
        $categories = CategoryService::all();
        $user = Auth::user();
        return view('admin.blog.create', compact('categories', 'user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:category_services,id',
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:255',
            'description' => 'required|string',
            'meta_keywords' => 'nullable|string',
            'meta_descriptions' => 'nullable|string',
            'path' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $blog = Blog::create($validatedData);

        if ($request->hasFile('path')) {
            $servicesName = $request->file('path')->getClientOriginalName();

            $destinationPath = ('blogss');

            $request->file('path')->move($destinationPath, $servicesName);

            $blog->update(['path' => 'blogss/' . $servicesName]);
        }

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dibuat.');
    }


    public function show($id)
    {
        $konfigurasiblog = KonfigurasiBlog::first();
        $faq =  Faq::all();
        $konfigurasifaq = KonfigurasiFaq::where('id', 1)->first();
        $konfigurasifaq = KonfigurasiFaq::find(1);
        $konfigurasioffer = KonfigurasiOffer::find(1);
        $konfigurasioffer = KonfigurasiOffer::where('id', 1)->first();
        $pricingplan = Pricing::all();
        $konfigurasipricing = KonfigurasiPricing::find(1);
        $konfigurasipricing = KonfigurasiPricing::where('id', 1)->first();
        $konfigurasigallery = KonfigurasiGalery::find(1);
        $konfigurasigallery = KonfigurasiGalery::where('id', 1)->first();
        $gallery = Galery::take(12)->get();
        $konfigurasiteam = KonfigurasiTeam::find(1);
        $konfigurasiteam = KonfigurasiTeam::where('id', 1)->first();
        $team = Team::all();
        $superioritywhyus = SuperiorityWhyUs::all();
        $whyus = WhyUs::find(1);
        $whyus = WhyUs::where('id', 1)->first();
        $contact = Contact::find(1);
        $contact = Contact::where('id', 1)->first();
        $mitras = Mitra::all();
        $konfigurasi = Konfigurasi::find(1);
        $konfigurasi = Konfigurasi::where('id', 1)->first();
        $konfigurasiservice = KonfigurasiService::first() ?? new KonfigurasiService();
        $services = Service::all();
        $aboutus = AboutUs::find(1);
        $aboutus = AboutUs::where('id', 1)->first();
        $sliders = Slider::all();
        $keunggulanaboutus = KeunggulanAboutUs::all();
        $kategoriservice = CategoryService::all();
        $user = Auth::user();
        $blog = Blog::findOrFail($id);
        $allblog = Blog::all();
        return view('servify.blog-details',  compact('allblog', 'user', 'blog', 'konfigurasiblog', 'faq', 'konfigurasifaq', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $blog = Blog::findOrFail($id);
        $categories = CategoryService::all();
        return view('admin.blog.edit', compact('blog', 'categories', 'user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'category_id' => 'required|exists:category_services,id',
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:255',
            'description' => 'required|string',
            'meta_keywords' => 'nullable|string',
            'meta_descriptions' => 'nullable|string',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($blog->path && file_exists(public_path($blog->path))) {
                unlink(public_path($blog->path));
            }

            $servicesName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(public_path('blogss'), $servicesName);

            $validatedData['path'] = 'blogss/' . $servicesName;
        }

        $blog->update($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diupdate.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dihapus.');
    }
}
