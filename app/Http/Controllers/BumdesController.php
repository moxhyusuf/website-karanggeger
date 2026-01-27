<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BumdesController extends Controller
{

       public function frontend()
    {
        $bumdes = Bumdes::latest()->get();

        return view('pages.promo_desa.bumdes', compact('bumdes'));
    }


        public function index()
        {
            $data = Bumdes::latest()->get();
            return view('admin.bumdes.index', compact('data'));
        }

            public function edit($id)
        {
            $item = Bumdes::findOrFail($id);
            return view('admin.bumdes.edit', compact('item'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'nama' => 'required',
                'keterangan' => 'nullable',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg',
            ]);

            $item = Bumdes::findOrFail($id);

        if ($request->hasFile('foto')) {

            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }

                $foto = $request->file('foto')->store('bumdes', 'public');

            } else {
                $foto = $item->foto;
            }

            $item->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'foto' => $foto,
            ]);

            return redirect()->route('admin.bumdes.index')->with('success', 'Data berhasil diperbarui');
        }

        public function create()
        {
            return view('admin.bumdes.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required',
                'keterangan' => 'nullable',
                'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);

            // default null
            $foto = null;

            // upload jika ada
            if($request->hasFile('foto')) {
                // simpan ke storage/app/public/bumdes
                $foto = $request->file('foto')->store('bumdes', 'public');
            }

            Bumdes::create([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'foto' => $foto,
            ]);

            return redirect()->route('admin.bumdes.index')
                ->with('success', 'Data Bumdes berhasil ditambahkan');
        }

        public function destroy($id)
        {
            $item = Bumdes::findOrFail($id);

            // hapus foto dari storage
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }

            $item->delete();

            return redirect()
                ->route('admin.bumdes.index')
                ->with('success', 'Data berhasil dihapus');
        }


}
