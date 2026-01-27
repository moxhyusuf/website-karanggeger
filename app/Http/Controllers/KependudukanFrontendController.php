<?php
namespace App\Http\Controllers;

use App\Models\KependudukanRekap;

class KependudukanFrontendController extends Controller
{
    public function index()
{
    $rows = \App\Models\KependudukanRekap::all();

    $data = $rows
        ->groupBy('kelompok')
        ->map(function ($items) {
            return $items->map(function ($i) {
                return [
                    'label'  => $i->label,
                    'jumlah' => (int) $i->jumlah,
                ];
            })->values();
        });

    return view('pages.tentang_desa.kependudukan', [
        'data' => $data
    ]);
}



}
