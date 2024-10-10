<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class VerifyCaptchaController extends Controller
{
    public function verifyCaptcha(Request $request)
    {
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => '6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd', // Ganti dengan secret key dari Google reCAPTCHA
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip()
            ]
        ]);

        $body = json_decode((string)$response->getBody());

        if ($body->success) {
            // CAPTCHA valid, lanjutkan proses
            return back()->with('success', 'Captcha valid');
        } else {
            // CAPTCHA gagal
            return back()->withErrors(['captcha' => 'CAPTCHA tidak valid, silakan coba lagi.']);
        }
    }
}
