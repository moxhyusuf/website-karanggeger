<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vismis;
use Illuminate\Http\Request;

class VismisController extends Controller
{

    public function frontend()
{
    $vismis = Vismis::first();

    return view('pages.tentang_desa.vismis', compact('vismis'));
}


    public function index()
    {
        $vismis = Vismis::orderByDesc('id')->get();
        return view('admin.vismis.index', compact('vismis'));
    }

    

    public function show(Vismis $vismis)
    {
        return view('admin.vismis.show', compact('vismis'));
    }

                public function edit($id)
            {
                $vismis = Vismis::findOrFail($id);
                return view('admin.vismis.edit', compact('vismis'));
            }
            public function update(Request $request, $id)
            {
                $request->validate([
                    'visi' => 'required',
                    'misi' => 'required',
                ]);

                $data = Vismis::findOrFail($id);
                $data->update([
                    'visi' => $request->visi,
                    'misi' => $request->misi,
                ]);

                return redirect()->route('admin.vismis.index')
                                ->with('success', 'Visi & Misi berhasil diperbarui!');
            }


}
