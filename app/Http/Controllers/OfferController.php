<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OfferController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $offer = Offer::all();
        return view('admin.offer.index', compact('user', 'offer'));
    }

    public function submitForm(Request $request)
    { 
        $request->validate([
            'username' => 'required|string|max:255',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        if (app()->environment('production')) {
            $request->validate([
                'g-recaptcha-response' => 'required',
            ]);
    
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);
    
            if (!json_decode($response->body())->success) {
                return back()->withErrors(['captcha' => 'Verifikasi CAPTCHA gagal, silakan coba lagi.']);
            }
        }
    
        Offer::create([
            'username' => $request->input('username'),
            'email_address' => $request->input('email_address'),
            'phone_number' => $request->input('phone_number'),
            'subject' => $request->input('subject'),
            'description' => $request->input('description')
        ]);
    
        return back()->with('success', 'Form berhasil disubmit dan data disimpan.');
    }
}
