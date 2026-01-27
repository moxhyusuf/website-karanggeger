<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KependudukanRekap;
use Illuminate\Http\Request;

class KependudukanRekapController extends Controller
{
    public function index()
    {
        $data = KependudukanRekap::orderBy('kelompok')->get();
        return view('admin.kependudukan.index', compact('data'));
    }

    
        public function create()
        {
            return view('admin.kependudukan.create');
        }

        public function store(Request $request)
{
    $request->validate([
        'kelompok' => 'required',
        'label' => 'required',
        'jumlah' => 'required|integer|min:0'
    ]);

    // Total existing per kelompok
    $totalExisting = KependudukanRekap::where('kelompok', $request->kelompok)
        ->sum('jumlah');

    $totalBaru = $totalExisting + $request->jumlah;

    // Validasi total
    if ($totalBaru <= 0) {
        return back()->withErrors('Total tidak valid');
    }

    // Hitung persentase
    $persentase = ($request->jumlah / $totalBaru) * 100;

    KependudukanRekap::create([
        'kelompok' => $request->kelompok,
        'label' => $request->label,
        'jumlah' => $request->jumlah,
        'persentase' => round($persentase, 2),
    ]);

    // Update ulang persentase SEMUA dalam kelompok
    $dataKelompok = KependudukanRekap::where('kelompok', $request->kelompok)->get();
    $totalFix = $dataKelompok->sum('jumlah');

    foreach ($dataKelompok as $item) {
        $item->update([
            'persentase' => round(($item->jumlah / $totalFix) * 100, 2)
        ]);
    }

    return redirect()
        ->route('admin.kependudukan.index')
        ->with('success', 'Data berhasil ditambahkan & persentase diperbarui');
}

    public function edit($id)
    {
        $data = KependudukanRekap::findOrFail($id);
        return view('admin.kependudukan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'kelompok' => 'required',
        'label' => 'required',
        'jumlah' => 'required|integer|min:0',
    ]);

    $data = KependudukanRekap::findOrFail($id);

    // Update data utama
    $data->update([
        'kelompok' => $request->kelompok,
        'label' => $request->label,
        'jumlah' => $request->jumlah,
    ]);

    // HITUNG ULANG PERSENTASE SEMUA DALAM KELOMPOK
    $groupData = KependudukanRekap::where('kelompok', $request->kelompok)->get();
    $total = $groupData->sum('jumlah');

    foreach ($groupData as $item) {
        $item->update([
            'persentase' => $total > 0
                ? round(($item->jumlah / $total) * 100, 2)
                : 0
        ]);
    }

    return redirect()
        ->route('admin.kependudukan.index')
        ->with('success', 'Data berhasil diperbarui & persentase dihitung ulang');
}

public function destroy($id)
{
    $data = KependudukanRekap::findOrFail($id);
    $kelompok = $data->kelompok;

    // Hapus data
    $data->delete();

    // Hitung ulang persentase sisa data dalam kelompok
    $groupData = KependudukanRekap::where('kelompok', $kelompok)->get();
    $total = $groupData->sum('jumlah');

    foreach ($groupData as $item) {
        $item->update([
            'persentase' => $total > 0
                ? round(($item->jumlah / $total) * 100, 2)
                : 0
        ]);
    }

    return redirect()
        ->route('admin.kependudukan.index')
        ->with('success', 'Data berhasil dihapus & persentase diperbarui');
}

}
