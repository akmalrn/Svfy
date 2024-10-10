<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KeunggulanAboutUsController;
use App\Http\Controllers\KeunggulanLayananDetailController;
use App\Http\Controllers\KonfigruasiFaqController;
use App\Http\Controllers\KonfigurasiBlogController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\KonfigurasiGaleryController;
use App\Http\Controllers\KonfigurasiLayananDetailController;
use App\Http\Controllers\KonfigurasiOfferController;
use App\Http\Controllers\KonfigurasiPricingController;
use App\Http\Controllers\KonfigurasiServiceController;
use App\Http\Controllers\KonfigurasiTeamController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServifyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SuperiorityWhyUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VerifyCaptchaController;
use App\Http\Controllers\WhyUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('servify.index');
});


Route::get('/welcome', [AdminController::class, 'welcome'])->name('welcome');
Route::post('/welcome', [AdminController::class, 'login'])->name('login');
Route::post('/dashboard', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/konfigurasi', [KonfigurasiController::class, 'index'])->name('konfigurasi.index');
    Route::post('/konfigurasi', [KonfigurasiController::class, 'store'])->name('konfigurasi.store');
    Route::get('/aboutuss', [AboutUsController::class, 'index'])->name('aboutus.index');
    Route::post('/aboutuss', [AboutUsController::class, 'store'])->name('aboutus.store');
    Route::get('/konfigurasilayanan', [KonfigurasiServiceController::class, 'index'])->name('konfigurasiservice.index');
    Route::post('/konfigurasilayanan', [KonfigurasiServiceController::class, 'store'])->name('konfigurasiservice.store');
    Route::get('/konfigurasilayanandetail', [KonfigurasiLayananDetailController::class, 'index'])->name('konfigurasilayanandetail.index');
    Route::post('/konfigurasilayanandetail', [KonfigurasiLayananDetailController::class, 'store'])->name('konfigurasilayanandetail.store');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/whyus', [WhyUsController::class, 'index'])->name('whyus.index');
    Route::post('/whyus', [WhyUsController::class, 'store'])->name('whyus.store');
    Route::get('/teamkonfigurasi', [KonfigurasiTeamController::class, 'index'])->name('teamkonfigurasi.index');
    Route::post('/teamkonfigurasi', [KonfigurasiTeamController::class, 'store'])->name('teamkonfigurasi.store');
    Route::get('/konfigurasigallery', [KonfigurasiGaleryController::class, 'index'])->name('konfigurasigallery.index');
    Route::post('/konfigurasigallery', [KonfigurasiGaleryController::class, 'store'])->name('konfigurasigallery.store');
    Route::get('/konfigurasipricing', [KonfigurasiPricingController::class, 'index'])->name('konfigurasipricing.index');
    Route::post('/konfigurasipricing', [KonfigurasiPricingController::class, 'store'])->name('konfigurasipricing.store');
    Route::get('/konfigurasioffer', [KonfigurasiOfferController::class, 'index'])->name('konfigurasioffer.index');
    Route::post('/konfigurasioffer', [KonfigurasiOfferController::class, 'store'])->name('konfigurasioffer.store');
    Route::get('/konfigurasifaq', [KonfigruasiFaqController::class, 'index'])->name('konfigurasifaq.index');
    Route::post('/konfigurasifaq', [KonfigruasiFaqController::class, 'store'])->name('konfigurasifaq.store');
    Route::get('/konfigurasiblog', [KonfigurasiBlogController::class, 'index'])->name('konfigurasiblog.index');
    Route::post('/konfigurasiblog', [KonfigurasiBlogController::class, 'store'])->name('konfigurasiblog.store');
    Route::resource('/slider', SliderController::class);
    Route::resource('/keunggulanaboutus', KeunggulanAboutUsController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/categoryservice', CategoryServiceController::class);
    Route::resource('/mitra', MitraController::class);
    Route::resource('/keunggulanlayanandetail', KeunggulanLayananDetailController::class);
    Route::resource('/superioritywhyus', SuperiorityWhyUsController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/galery', GaleryController::class);
    Route::resource('/pricing', PricingController::class);
    Route::resource('/faqss', FaqController::class);
    Route::resource('/blogs', BlogController::class);
    Route::get('/offer', [OfferController::class, 'index'])->name('offer.index');
});


//Servify
Route::get('/', [ServifyController::class, 'index'])->name('index');
Route::get('/about', [ServifyController::class, 'about'])->name('about');
Route::get('/service-detail', [ServifyController::class, 'service_details'])->name('service_details');
Route::get('/contacts', [ServifyController::class, 'contact'])->name('contact');
Route::get('/servicess', [ServifyController::class, 'service'])->name('services');
Route::get('/gallery', [ServifyController::class, 'gallery'])->name('gallery');
Route::get('/captcha', [ServifyController::class, 'captcha'])->name('captcha');
Route::get('/faq', [ServifyController::class, 'faq'])->name('faq');
Route::get('/blog', [ServifyController::class, 'blog'])->name('blog');
Route::post('/captcha', [VerifyCaptchaController::class, 'verifyCaptcha'])->name('verify.captcha');


Route::post('/', [OfferController::class, 'submitForm'])->name('submit.form');
Route::post('/contacts', [OfferController::class, 'submitForm'])->name('submit.forms');
