<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display all prestasi.
     */
    public function index()
    {
        $prestasi = Prestasi::latest()->paginate(10);
        return view('admin.prestasi.index', compact('prestasi'));
    }

    public function frontend()
    {
        $prestasi = Prestasi::latest()->get();
        return view('pages.update_desa.prestasi', compact('prestasi'));
    }

    

    public function create()
    {
        return view('admin.prestasi.create');
    }

    /**
     * Store data prestasi.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_prestasi'   => 'required|string|max:255',
            'tanggal_prestasi' => 'required|date',
            'deskripsi'        => 'nullable|string',
            'foto_utama'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload foto
        $foto_path = null;
        if ($request->hasFile('foto_utama')) {
            $foto_path = $request->file('foto_utama')->store('prestasi', 'public');
        }

        Prestasi::create([
            'judul_prestasi'   => $request->judul_prestasi,
            'tanggal_prestasi' => $request->tanggal_prestasi,
            'deskripsi'        => $request->deskripsi,
            'foto_utama'       => $foto_path,
        ]);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        return view('pages.update_desa.detail_prestasi', compact('prestasi'));
    }



    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    /**
     * Update prestasi.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_prestasi'   => 'required|string|max:255',
            'tanggal_prestasi' => 'required|date',
            'deskripsi'        => 'nullable|string',
            'foto_utama'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $prestasi = Prestasi::findOrFail($id);

        // Upload foto jika ada
        if ($request->hasFile('foto_utama')) {
            if ($prestasi->foto_utama && file_exists(storage_path('app/public/' . $prestasi->foto_utama))) {
                unlink(storage_path('app/public/' . $prestasi->foto_utama));
            }

            $prestasi->foto_utama = $request->file('foto_utama')->store('prestasi', 'public');
        }

        $prestasi->judul_prestasi   = $request->judul_prestasi;
        $prestasi->tanggal_prestasi = $request->tanggal_prestasi;
        $prestasi->deskripsi        = $request->deskripsi;
        $prestasi->save();

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        // Jika ada foto, hapus dari storage
        if ($prestasi->foto_utama && file_exists(public_path('storage/' . $prestasi->foto_utama))) {
            unlink(public_path('storage/' . $prestasi->foto_utama));
        }

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil dihapus.');
    }



}
