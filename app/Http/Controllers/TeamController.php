<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Galery;
use App\Models\KeunggulanAboutUs;
use App\Models\Konfigurasi;
use App\Models\KonfigurasiService;
use App\Models\KonfigurasiTeam;
use App\Models\Mitra;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SuperiorityWhyUs;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $teams = Team::all();
        return view('admin.team.index', compact('teams', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.team.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'username' => 'string|max:255',
            'position' => 'string|max:255',
            'phone_number' => 'string|max:15',
            'address' => 'string',
            'email_address' => 'nullable|email|max:255',
            'link_facebook' => 'nullable|max:255',
            'link_twitter' => 'nullable|max:255',
            'link_instagram' => 'nullable|max:255',
            'link_linkedin' => 'nullable|max:255',
            'description' => 'required',
        ]);

        $servicesName = null;

        if ($request->hasFile('path')) {
            $servicesName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('teams'), $servicesName);
        }

        Team::create([
            'path' => 'teams/' . $servicesName,
            'username' => $request->username,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'email_address' => $request->email_address,
            'link_facebook' => $request->link_facebook,
            'link_twitter' => $request->link_twitter,
            'link_instagram' => $request->link_instagram,
            'link_linkedin' => $request->link_linkedin,
            'description' => $request->description,
        ]);

        return redirect()->route('team.index')->with('success', 'Data tim berhasil ditambahkan.');
    }

    public function show($id)
    {
        $gallery = Galery::all();
        $allteam = Team::where('id', '!=', $id)->get();
        $konfigurasiteam = KonfigurasiTeam::find(1);
        $konfigurasiteam = KonfigurasiTeam::where('id', 1)->first();
        $team = Team::findOrFail($id);
        $superioritywhyus = SuperiorityWhyUs::all();
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
        return view('servify.team-details', compact('gallery', 'allteam', 'konfigurasiteam', 'team', 'superioritywhyus', 'contact', 'mitras', 'konfigurasi', 'konfigurasiservice', 'services', 'aboutus', 'sliders', 'keunggulanaboutus'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
            'username' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string',
            'email_address' => 'nullable|required|email|max:255',
            'link_facebook' => 'nullable|required|max:255',
            'link_twitter' => 'nullable|required|max:255',
            'link_instagram' => 'nullable|required|max:255',
            'link_linkedin' => 'nullable|required|max:255',
            'description' => 'required',
        ]);

        $team = Team::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($team->path && file_exists(($team->path))) {
                unlink(($team->path));
            }

            $servicesName = $request->file('path')->getClientOriginalName();
            $request->file('path')->move(('teams'), $servicesName);
            $team->path = 'teams/' . $servicesName;
        }

        $team->update([
            'username' => $request->username,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'email_address' => $request->email_address,
            'link_facebook' => $request->link_facebook,
            'link_twitter' => $request->link_twitter,
            'link_instagram' => $request->link_instagram,
            'link_linkedin' => $request->link_linkedin,
            'description' => $request->description,
        ]);

        return redirect()->route('team.index')->with('success', 'Data tim berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if ($team->path && file_exists(('teams/' . $team->path))) {
            unlink(('teams/' . $team->path));
        }
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Data tim berhasil dihapus.');
    }
}
