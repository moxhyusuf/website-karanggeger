<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BlogController extends Controller
{
    /**
     * Tampilkan daftar berita/blog
     */
    public function index()
    {
        // Ambil berita terbaru dengan pagination (8 per halaman)
        $beritas = Berita::latest()->paginate(8);

        // Recent posts (5 berita terbaru)
        $recentPosts = Berita::latest()->take(5)->get();

        // Categories dengan jumlah masing-masing kategori
        $categories = Berita::select('kategori')
            ->selectRaw('count(*) as count')
            ->groupBy('kategori')
            ->pluck('count', 'kategori');

        return view('pages.blog', compact('beritas', 'recentPosts', 'categories'));
    }

    /**
     * Tampilkan detail berita
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        // Recent posts dan categories untuk sidebar
        $recentPosts = Berita::latest()->take(5)->get();
        $categories = Berita::select('kategori')
            ->selectRaw('count(*) as count')
            ->groupBy('kategori')
            ->pluck('count', 'kategori');

        return view('pages.blog-details', compact('berita', 'recentPosts', 'categories'));
    }

    /**
     * Search berita
     */
    public function search(Request $request)
    {
        $q = $request->input('q');

        $beritas = Berita::where('judul', 'like', "%{$q}%")
                    ->orWhere('narasiberita', 'like', "%{$q}%")
                    ->latest()
                    ->paginate(8);

        $recentPosts = Berita::latest()->take(5)->get();
        $categories = Berita::select('kategori')
            ->selectRaw('count(*) as count')
            ->groupBy('kategori')
            ->pluck('count', 'kategori');

        return view('pages.blog', compact('beritas', 'recentPosts', 'categories'));
    }

    /**
     * Tampilkan daftar berita berdasarkan kategori
     */
    public function category($kategori)
    {
        $beritas = Berita::where('kategori', $kategori)->latest()->paginate(8);
        $recentPosts = Berita::latest()->take(5)->get();
        $categories = Berita::select('kategori')
            ->selectRaw('count(*) as count')
            ->groupBy('kategori')
            ->pluck('count', 'kategori');

        return view('pages.blog', compact('beritas', 'recentPosts', 'categories', 'kategori'));
    }
}
