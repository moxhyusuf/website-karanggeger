<?php

namespace App\Http\Controllers;

use App\Models\KepalaDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KepalaDesa::all();
        return view('admin.kepala_desa.index', compact('data'));
    }

    public function frontend()
    {
        $kades = KepalaDesa::where('status_jabatan', 'aktif')->first();

        return view('pages.tentang_desa.kepdes', compact('kades'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.kepala_desa.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|max:150',
        'nik' => 'nullable|max:30',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'periode_mulai' => 'nullable|date',
        'periode_selesai' => 'nullable|date',
        'alamat' => 'nullable',
        'visi' => 'nullable',
        'misi' => 'nullable',
        'sambutan' => 'nullable',
        'status_jabatan' => 'required|in:aktif,nonaktif',
    ]);

    // upload foto
    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('kepala_desa', 'public');
    }

    KepalaDesa::create([
        'nama' => $request->nama,
        'nik' => $request->nik,
        'foto' => $fotoPath,
        'periode_mulai' => $request->periode_mulai,
        'periode_selesai' => $request->periode_selesai,
        'alamat' => $request->alamat,
        'visi' => $request->visi,
        'misi' => $request->misi,
        'sambutan' => $request->sambutan,
        'status_jabatan' => $request->status_jabatan,
    ]);

    return redirect()->route('admin.kepala_desa.index')->with('success', 'Kepala Desa berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $data = KepalaDesa::findOrFail($id);
    return view('admin.kepala_desa.edit', compact('data'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|max:150',
        'nik' => 'nullable|max:30',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'periode_mulai' => 'nullable|date',
        'periode_selesai' => 'nullable|date',
        'alamat' => 'nullable',
        'visi' => 'nullable',
        'misi' => 'nullable',
        'sambutan' => 'nullable',
        'status_jabatan' => 'required|in:aktif,nonaktif',
    ]);

    $data = KepalaDesa::findOrFail($id);

    // cek upload foto baru
    if ($request->hasFile('foto')) {
        // hapus foto lama jika ada
        if ($data->foto && Storage::disk('public')->exists($data->foto)) {
            Storage::disk('public')->delete($data->foto);
        }

        $fotoPath = $request->file('foto')->store('kepala_desa', 'public');
    } else {
        $fotoPath = $data->foto; // tetap pakai yang lama
    }

    $data->update([
        'nama' => $request->nama,
        'nik' => $request->nik,
        'foto' => $fotoPath,
        'periode_mulai' => $request->periode_mulai,
        'periode_selesai' => $request->periode_selesai,
        'alamat' => $request->alamat,
        'visi' => $request->visi,
        'misi' => $request->misi,
        'sambutan' => $request->sambutan,
        'status_jabatan' => $request->status_jabatan,
    ]);

    return redirect()->route('admin.kepala_desa.index')
                     ->with('success', 'Data Kepala Desa berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $data = KepalaDesa::findOrFail($id);

    // Hapus foto jika ada
    if ($data->foto && file_exists(public_path('uploads/kepala_desa/' . $data->foto))) {
        unlink(public_path('uploads/kepala_desa/' . $data->foto));
    }

    $data->delete();

    return redirect()->route('admin.kepala_desa.index')->with('success', 'Data Kepala Desa berhasil dihapus!');
}

}
