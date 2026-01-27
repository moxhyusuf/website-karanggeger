<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;

class ProfilController extends Controller
{
    public function sejarah()
    {
        $sejarah = Sejarah::latest()->first();

        return view('frontend.profil.sejarah', compact('sejarah'));
    }
}
