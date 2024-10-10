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

class ServifyController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
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
        return view('servify.index', compact('blog', 'konfigurasiblog', 'faq', 'konfigurasifaq', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function about()
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
        return view('servify.about', compact('konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function service_details()
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
        return view('servify.service-details', compact('konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function contact()
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
        return view('servify.contact', compact('konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function service()
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
        return view('servify.service', compact('konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function gallery()
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
        return view('servify.gallery', compact('konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function faq()
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
        return view('servify.faq', compact('konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }

    public function blog()
    {
        $blog = Blog::paginate(5);
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
        return view('servify.blog', compact('blog', 'konfigurasiblog', 'konfigurasioffer', 'pricingplan', 'konfigurasipricing', 'konfigurasigallery', 'gallery', 'konfigurasiteam', 'team', 'superioritywhyus', 'whyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus', 'kategoriservice'));
    }


    public function captcha()
    {
        return view('servify.captcha');
    }
}
