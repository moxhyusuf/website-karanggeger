<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    public function frontend()
    {
        $umkm = \App\Models\Umkm::orderBy('id', 'DESC')->get();
        return view('pages.promo_desa.umkm', compact('umkm'));
    }


    public function index()
    {
        $umkms = Umkm::with('media')->orderBy('id', 'DESC')->get();
        return view('admin.umkm.umkm', compact('umkms'));
    }


    public function edit($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'alamat' => 'nullable|max:255',
            'wa' => 'required|max:20',
            'media.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $umkm = Umkm::findOrFail($id);

        // update data utama
        $umkm->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'wa' => $request->wa,
        ]);

        // simpan foto baru (jika ada)
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {

                $path = $file->store('umkm', 'public');

                Media::create([
                    'parent_id'   => $umkm->id,
                    'parent_type' => 'umkm',
                    'file_path'   => $path,
                ]);
            }
        }

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'Data UMKM berhasil diperbarui');
    }

    public function create()
    {
        return view('admin.umkm.create'); // Sesuai lokasi Blade create.blade.php
    }

    // Menyimpan data UMKM baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'alamat' => 'nullable|string',
            'wa' => 'required|string|max:20',
            'media.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // simpan data UMKM dulu
        $umkm = Umkm::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'wa' => $request->wa,
        ]);

        // simpan banyak foto ke tabel media
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {

                $path = $file->store('umkm', 'public');

                Media::create([
                    'parent_id'   => $umkm->id,
                    'parent_type' => 'umkm',
                    'file_path'   => $path,
                ]);
            }
        }

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil ditambahkan dengan banyak foto');
    }

    public function show($id)
    {
        $umkm = Umkm::with('media')->findOrFail($id);

        return view('admin.umkm.show', compact('umkm'));
    }


    public function destroy($id)
    {
        $umkm = Umkm::with('media')->findOrFail($id);

        // hapus semua file foto dari storage
        foreach ($umkm->media as $img) {
            if (Storage::disk('public')->exists($img->file_path)) {
                Storage::disk('public')->delete($img->file_path);
            }
        }

        // hapus data media di database
        Media::where('parent_id', $umkm->id)
            ->where('parent_type', 'umkm')
            ->delete();

        // hapus data UMKM
        $umkm->delete();

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'Data UMKM dan seluruh fotonya berhasil dihapus');
    }

    public function detail($id)
    {
        $umkm = Umkm::with('media')->findOrFail($id);

        return view('pages.promo_desa.detailumkm', compact('umkm'));
    }



    public function destroyMedia($id)
    {
        $media = Media::findOrFail($id);

        // Kalau ada file_path dan file nya ada → hapus
        if ($media->file_path && Storage::disk('public')->exists($media->file_path)) {
            Storage::disk('public')->delete($media->file_path);
        }

        // Hapus data di database
        $media->delete();

        return response()->json([
            'success' => true
        ]);
    }
}