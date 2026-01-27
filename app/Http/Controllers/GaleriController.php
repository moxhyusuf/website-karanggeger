<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function frontend()
{
    $item = Galeri::latest()->get();
    return view('pages.update_desa.galeri', compact('item'));
}
    // ==========================
    // HALAMAN EDIT
    // ==========================
    public function edit($id)
    {
        $item = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('item'));
    }

    // ==========================
    // PROSES UPDATE DATA
    // ==========================
    public function update(Request $request, $id)
    {
        $item = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:150',
            'deskripsi' => 'required',
            'kategori' => 'required|in:all,kegiatan,event,pembangunan,lain-lain',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // update data kecuali gambar
        $item->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
        ]);

        // upload gambar baru jika ada
        if ($request->hasFile('gambar')) {

            // hapus gambar lama jika ada
            if ($item->gambar && Storage::exists('public/'.$item->gambar)) {
                Storage::delete('public/'.$item->gambar);
            }

            // simpan gambar baru
            $path = $request->file('gambar')->store('galeri', 'public');
            $item->update(['gambar' => $path]);
        }

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Data galeri berhasil diperbarui');
    }

            public function create()
        {
            return view('admin.galeri.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'judul' => 'required|max:150',
                'deskripsi' => 'required',
                'kategori' => 'required',
                'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048'
            ]);

            $path = $request->file('gambar')->store('galeri', 'public');

            Galeri::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'gambar' => $path,
            ]);

            return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan');
        }

            public function destroy($id)
    {
        $item = Galeri::findOrFail($id);

        // Hapus gambar fisik jika ada
        if ($item->gambar && file_exists(storage_path('app/public/' . $item->gambar))) {
            unlink(storage_path('app/public/' . $item->gambar));
        }

        // Hapus data dari database
        $item->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }

}
