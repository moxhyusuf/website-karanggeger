<?php

namespace App\Http\Controllers;
use App\Models\KesanPesan;
use Illuminate\Http\Request;

class KesanPesanController extends Controller
{
    public function index(Request $request)
    {
        $query = KesanPesan::query();

        // filter search berdasarkan kolom tertentu
        if ($request->search) {
            $query->where('status_pelapor', 'like', '%'.$request->search.'%')
                  ->orWhere('nama_lengkap', 'like', '%'.$request->search.'%')
                  ->orWhere('nomor_hp', 'like', '%'.$request->search.'%')
                  ->orWhere('alamat', 'like', '%'.$request->search.'%')
                  ->orWhere('isi_pengaduan', 'like', '%'.$request->search.'%');
        }

        // urut paling baru
        $data = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.ruang_curhat.index', compact('data'));
    }

    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'status_pelapor' => 'required',
            'nama_lengkap' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'isi_pengaduan' => 'required',
        ]);

        // upload foto
        $fileName = null;
        if ($request->hasFile('foto_pendukung')) {
            $fileName = time().'_'.$request->foto_pendukung->getClientOriginalName();
            $request->foto_pendukung->move(public_path('uploads/kesan_pesan'), $fileName);
        }

        // insert database
        KesanPesan::create([
            'status_pelapor' => $request->status_pelapor,
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'isi_pengaduan' => $request->isi_pengaduan,
            'foto_pendukung' => $fileName,
        ]);

        return redirect()
            ->route('ruang_curhat.pengaduan')
            ->with('success', 'Pengaduan berhasil dikirim!');
    }

    
public function show($id)
{
    $data = KesanPesan::findOrFail($id);

    return view('admin.ruang_curhat.show', compact('data'));
}

    


}
