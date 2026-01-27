<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktur;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{

    public function frontend()
    {
        $struktur = Struktur::all();
        return view('pages.tentang_desa.struktur', compact('struktur'));
    }

    public function index()
    {
        $struktur = Struktur::all();
        return view('admin.struktur.index', compact('struktur'));
    }

    public function edit($id)
{
    $struktur = Struktur::findOrFail($id);
    return view('admin.struktur.edit', compact('struktur'));
}

public function update(Request $request, $id)
{
    $struktur = Struktur::findOrFail($id);

    $request->validate([
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('gambar')) {

        // Hapus gambar lama
        if ($struktur->gambar && Storage::exists('public/' . $struktur->gambar)) {
            Storage::delete('public/' . $struktur->gambar);
        }

        // Upload gambar baru
        $path = $request->file('gambar')->store('struktur', 'public');
        $struktur->gambar = $path;
    }

    $struktur->save();

    return redirect()->route('admin.struktur.index')
                     ->with('success', 'Struktur berhasil diperbarui.');
}


}
