<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   

public function frontend(Request $request)
{
    $query = Berita::query();

    if ($request->filled('q')) {
        $search = $request->q;

        $query->where(function ($q) use ($search) {
            $q->where('judul', 'like', "%$search%")
              ->orWhere('narasiberita', 'like', "%$search%")
              ->orWhere('nmpenulis', 'like', "%$search%")
              ->orWhere('tgl_berita', 'like', "%$search%");
        });
    }

    $item = $query->orderBy('tgl_berita', 'desc')->paginate(6);
    $recentPosts = Berita::orderBy('tgl_berita', 'desc')->limit(5)->get();

    return view('pages.update_desa.index', compact('item', 'recentPosts'));
}


  public function show(Request $request, $id)
{
    $berita = Berita::findOrFail($id);

    // Cek apakah route admin
    if ($request->routeIs('admin.*')) {

        return view('admin.berita.show', compact('berita'));
    }

    // PUBLIK
    $beritaTerbaru = Berita::latest()
        ->where('id_berita', '!=', $id)
        ->take(5)
        ->get();

    return view('pages.update_desa.detail', compact('berita', 'beritaTerbaru'));
}

  public function index(Request $request)
{
    $query = Berita::query();

    if ($request->has('search') && $request->search != '') {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('id_berita', 'like', "%{$search}%")
              ->orWhere('judul', 'like', "%{$search}%")
              ->orWhere('tgl_berita', 'like', "%{$search}%")
              ->orWhere('nmpenulis', 'like', "%{$search}%")
              ->orWhere('narasiberita', 'like', "%{$search}%");
        });
    }

    $beritas = $query->orderBy('tgl_berita', 'desc')->paginate(10);

    return view('admin.berita.index', compact('beritas'));
}



     public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tgl_berita' => 'required|date',
            'nmpenulis' => 'required|string|max:100',
            'narasiberita' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('image')) {
        // hapus gambar lama jika ada
        if ($berita->image && Storage::exists('public/' . $berita->image)) {
            Storage::delete('public/' . $berita->image);
        }

        // simpan gambar baru ke public
        $imagePath = $request->file('image')->store('berita', 'public');
        $berita->image = $imagePath;
    }

        $berita->judul = $request->judul;
        $berita->tgl_berita = $request->tgl_berita;
        $berita->nmpenulis = $request->nmpenulis;
        $berita->narasiberita = $request->narasiberita;
        $berita->save();
        

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    } 

        public function create()
    {
        return view('admin.berita.create');
    }

    // =======================
    // STORE
    // =======================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'tgl_berita' => 'required|date',
            'nmpenulis' => 'required|string|max:255',
            'narasiberita' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('berita', 'public');
        }

        Berita::create($validated);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

        public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar jika ada
        if ($berita->image && Storage::disk('public')->exists($berita->image)) {
            Storage::disk('public')->delete($berita->image);
        }

        // Hapus data berita
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }

}
