<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Models\KepalaDesa;
use App\Models\Berita;

class BerandaController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::latest()->first();
        $kepdes  = KepalaDesa::latest()->first();
        $berita = Berita::orderBy('tgl_berita', 'desc')
                ->take(6)
                ->get();

        return view('pages.profil', compact(
            'sejarah',
            'kepdes',
            'berita'
        ));
    }
}
