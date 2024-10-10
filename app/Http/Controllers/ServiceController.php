<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\CategoryService;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Galery;
use App\Models\KeunggulanAboutUs;
use App\Models\KeunggulanLayananDetail;
use App\Models\Konfigurasi;
use App\Models\KonfigurasiBlog;
use App\Models\KonfigurasiFaq;
use App\Models\KonfigurasiGalery;
use App\Models\KonfigurasiLayananDetail;
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

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->get();
        $user = Auth::user();
        $services = Service::all();
        return view('admin.layanan.index', compact('services', 'user'));
    }

    public function create()
    {
        $categories = CategoryService::all();
        $user = Auth::user();
        return view('admin.layanan.create', compact('user', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:category_services,id',
            'description' => 'required',
            'overview' => 'required',
            'path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:8192',
        ]);

        $servicesName = null;

        if ($request->hasFile('path')) {
            $servicesName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('services'), $servicesName);
        }

        Service::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'overview' => $request->overview,
            'path' => 'services/' . $servicesName,
        ]);

        return redirect()->route('service.index')->with('success', 'Service Berhasil Dibuat');
    }

    public function show($id)
    {
        $konfigurasiblog = KonfigurasiBlog::first();
        $keunggulanlayanandetail = KeunggulanLayananDetail::all();
        $konfigurasilayanandetail = KonfigurasiLayananDetail::first();
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
        $service = Service::findOrFail($id);
        $services = Service::all();
        $aboutus = AboutUs::find(1);
        $aboutus = AboutUs::where('id', 1)->first();
        $sliders = Slider::all();
        $keunggulanaboutus = KeunggulanAboutUs::all();
        $kategoriservice = CategoryService::all();
        $allservice = Service::all();
        return view('servify.service-details',  compact('konfigurasiblog', 'faq', 'allservice', 'konfigurasifaq', 'keunggulanlayanandetail', 'service', 'konfigurasilayanandetail', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $categories = CategoryService::all();
        $service = Service::findOrFail($id);
        return view('admin.layanan.edit', compact('service', 'categories', 'user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:category_services,id',
            'description' => 'required',
            'overview' => 'required',
            'path' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:8192',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($service->path && file_exists(($service->path))) {
                unlink(($service->path));
            }

            $servicesName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('services'), $servicesName);
            $service->path = 'services/' . $servicesName;
        }

        $service->title = $request->title;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->overview = $request->overview;

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service Berhasil Diperbarui');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->path && file_exists(($service->path))) {
            unlink(($service->path));
        }

        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service Berhasil Dihapus');
    }

}
