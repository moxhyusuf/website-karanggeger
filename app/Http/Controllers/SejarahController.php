<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Sejarah::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.sejarah.index', compact('items'));
    }

    public function publicSejarah()
    {
        $sejarah = Sejarah::orderBy('created_at', 'desc')->first();
        return view('pages.tentang_desa.sejarah', compact('sejarah'));
    }


    public function edit($id)
    {
        $item = Sejarah::findOrFail($id);
        return view('admin.sejarah.edit', compact('item'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sejarah' => 'required',
            'img' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $item = Sejarah::findOrFail($id);

        // Update teks sejarah
        $data['sejarah'] = $request->sejarah;

        // Jika upload gambar baru
        if ($request->hasFile('img')) {
            // Hapus gambar lama
            if ($item->img && file_exists(storage_path('app/public/' . $item->img))) {
                unlink(storage_path('app/public/' . $item->img));
            }

            $data['img'] = $request->file('img')->store('sejarah', 'public');
        }

        $item->update($data);

        return redirect()->route('admin.sejarah.index')->with('success', 'Data berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
