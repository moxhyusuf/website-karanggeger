<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroes = HeroSection::orderBy('urutan')->get();
        return view('admin.hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_1' => 'required|string|max:255',
            'gambar'  => 'required|image|max:2048',
            'urutan'  => 'nullable|integer|unique:hero_sections,urutan',
        ]);

        $gambar = $request->file('gambar')->store('hero', 'public');

        HeroSection::create([
            'judul_1' => $request->judul_1,
            'judul_2' => $request->judul_2,
            'subtitle'=> $request->subtitle,
            'gambar'  => $gambar,
            'urutan'  => $request->urutan ?? 0,
            'aktif'   => $request->aktif ?? 1,
        ]);

        // ⛔ penting: redirect (anti resubmit)
        return redirect()
            ->route('admin.hero.index')
            ->with('success', 'Hero berhasil ditambahkan');
    }

    public function destroy(HeroSection $hero)
    {
        if ($hero->gambar) {
            Storage::disk('public')->delete($hero->gambar);
        }

        $hero->delete();

        return redirect()
            ->route('admin.hero.index')
            ->with('success', 'Hero berhasil dihapus');
    }

        public function edit(HeroSection $hero)
    {
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request, HeroSection $hero)
    {
        $request->validate([
            'judul_1' => 'required|string|max:255',
            'gambar'  => 'nullable|image|max:2048',
            'urutan'  => 'nullable|integer|unique:hero_sections,urutan,' . $hero->id,
        ]);

        $data = [
            'judul_1' => $request->judul_1,
            'judul_2' => $request->judul_2,
            'subtitle'=> $request->subtitle,
            'urutan'  => $request->urutan ?? 0,
            'aktif'   => $request->aktif ?? 1,
        ];

        // jika ganti gambar
        if ($request->hasFile('gambar')) {
            if ($hero->gambar) {
                Storage::disk('public')->delete($hero->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('hero', 'public');
        }

        $hero->update($data);

        return redirect()
            ->route('admin.hero.index')
            ->with('success', 'Hero berhasil diperbarui');
    }
}
