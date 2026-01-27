<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller

{
    public function produkUnggulan()
    {
        $item = Produk::orderByDesc('id_produk')->get();
        return view('pages.promo_desa.produk', compact('item'));
    }

    public function index()
    {
        $produks = Produk::orderByDesc('id_produk')->get();
        return view('admin.produk.index', compact('produks'));
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.show', compact('produk'));
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->image && Storage::disk('public')->exists($produk->image)) {
            Storage::disk('public')->delete($produk->image);
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

        $produk->nama_produk = $request->nama_produk;

        // Jika upload gambar baru
        if ($request->hasFile('image')) {

            if ($produk->image && Storage::disk('public')->exists($produk->image)) {
                Storage::disk('public')->delete($produk->image);
            }

            $produk->image = $request->file('image')->store('produk', 'public');
        }

        $produk->save();

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'image' => 'required|image|max:2048'
        ]);

        $path = $request->file('image')->store('produk', 'public');

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'image' => $path,
        ]);

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }
}
