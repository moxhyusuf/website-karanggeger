<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\VismisController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\KelembagaanController;
use App\Http\Controllers\RuangPemudaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KepalaDesaController;
use App\Http\Controllers\KesanPesanController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\PembangunanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\Admin\KependudukanRekapController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\KependudukanFrontendController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;




// ================== HALAMAN DEPAN (PUBLIK) ================== //
Route::get('/', [ProfilController::class, 'index'])->name('profil');
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/tentang-desa/sejarah', function () {$sejarah = \App\Models\Sejarah::first();return view('pages.tentang_desa.sejarah', compact('sejarah'));})->name('sejarah');


Route::get('/sejarah', [SejarahController::class, 'publicSejarah'])->name('sejarah');
Route::get('/geografis', fn() => view('pages.tentang_desa.geografis'))->name('geografis');
Route::get('/wilayah', fn() => view('pages.tentang_desa.wilayah'))->name('wilayah');
Route::get('/kependudukan', [KependudukanFrontendController::class, 'index'])->name('kependudukan');
Route::get('/kepdes', [KepalaDesaController::class, 'frontend'])->name('kepdes');

Route::get('/struktur', [StrukturController::class, 'frontend'])->name('struktur.frontend');



Route::get('/vismis', [VismisController::class, 'frontend'])->name('vismis.frontend');
Route::get('/program', [ProgramController::class, 'program'])->name('program');
Route::get('/produk-unggulan', [ProdukController::class, 'produkUnggulan'])->name('produk');
Route::get('/umkm', [UmkmController::class, 'frontend'])->name('umkm');
Route::get('/umkm/{id}', [UmkmController::class, 'detail'])->name('umkm.detail');
Route::get('/bumdes', [BumdesController::class, 'frontend'])->name('frontend.bumdes');



Route::get('/prestasi', [PrestasiController::class, 'frontend'])->name('prestasi.index');
Route::get('/prestasi/{prestasi}', [PrestasiController::class, 'show'])->name('prestasi.show');



Route::get('/galeri', [GaleriController::class, 'frontend'])->name('galeri.frontend');





Route::post('/ruang-curhat/store', [KesanPesanController::class, 'store'])->name('ruang_curhat.store');
Route::get('/ruang_curhat', function () {return view('pages.ruang_curhat.pengaduan');})->name('ruang_curhat.pengaduan');


Route::get('/berita', [BeritaController::class, 'frontend'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

// ================== AUTH ================== //
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ================== ADMIN ================== //
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');



    // Petugas
    Route::get('/petugas', [UserController::class, 'index'])->name('petugas.index');
    Route::get('/petugas/create', [UserController::class, 'create'])->name('petugas.create');
    Route::post('/petugas', [UserController::class, 'store'])->name('petugas.store');
    Route::get('/petugas/{petugas}/edit', [UserController::class, 'edit'])->name('petugas.edit');
    Route::put('/petugas/{petugas}', [UserController::class, 'update'])->name('petugas.update');
    Route::delete('/petugas/{petugas}', [UserController::class, 'destroy'])->name('petugas.destroy');

    // Sejarah CRUD
    Route::resource('sejarah', SejarahController::class);

    // Berita CRUD
    Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

    // Struktur CRUD 
    Route::get('struktur', [strukturController::class, 'index'])->name('struktur.index');
    Route::get('struktur/{id}/edit', [StrukturController::class, 'edit'])->name('struktur.edit');
    Route::put('struktur/{id}', [StrukturController::class, 'update'])->name('struktur.update');

    // Kelembagaan CRUD
    

    // Vismis CRUD
    Route::resource('vismis', VismisController::class);
    Route::get('vismis/{id}/edit', [VisMisController::class, 'edit'])->name('vismis.edit');
    Route::put('vismis/{id}', [VisMisController::class, 'update'])->name('vismis.update');

    //Kepala Desa CRUD
    Route::resource('kepala_desa', KepalaDesaController::class);
    Route::get('kepala_desa/create', [KepalaDesaController::class, 'create'])->name('kepala_desa.create');
    Route::post('kepala_desa', [KepalaDesaController::class, 'store'])->name('kepala_desa.store');
    Route::get('kepala-desa/{id}/edit', [KepalaDesaController::class, 'edit'])->name('kepaladesa.edit');
    Route::put('kepala-desa/{id}', [KepalaDesaController::class, 'update'])->name('kepaladesa.update');
    Route::delete('kepala_desa/{id}', [KepalaDesaController::class, 'destroy'])->name('admin.kepala_desa.destroy');


    // Program CRUD
    Route::resource('program', ProgramController::class);

    // Produk CRUD
    Route::resource('produk', ProdukController::class);

    // Ruang Pemuda CRUD
    
    //Ruang Mitra
    

    // UMKM CRUD
    Route::resource('umkm', UmkmController::class);
    Route::get('/umkm/{id}/edit', [UmkmController::class, 'edit'])->name('umkm.edit');
    Route::put('/umkm/{id}', [UmkmController::class, 'update'])->name('umkm.update');
    Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
    Route::post('/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');
    Route::get('/admin/umkm/{id}', [UmkmController::class, 'show'])->name('admin.umkm.show');
    Route::delete('/admin/media/{id}',[MediaController::class, 'destroy'])->name('admin.media.destroy');
    Route::delete('umkm/media/{id}', [UmkmController::class, 'destroyMedia'])
        ->name('umkm.media.destroy');



    // Galeri CRUD
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    // Ruang Curhat CRUD
    Route::get('/ruang_curhat',[KesanPesanController::class, 'index'])->name('ruang_curhat.index');
    Route::get('/ruang_curhat/{id}',[KesanPesanController::class, 'show'])->name('ruang_curhat.show');

    // BUMDES CRUD
    Route::resource('bumdes', BumdesController::class);
    Route::get('bumdes/edit/{id}', [BumdesController::class, 'edit'])->name('admin.bumdes.edit');
    Route::put('bumdes/update/{id}', [BumdesController::class, 'update'])->name('bumdes.update');
    Route::get('/admin/bumdes/create', [BumdesController::class, 'create'])->name('admin.bumdes.create');
    Route::post('/admin/bumdes/store', [BumdesController::class, 'store'])->name('admin.bumdes.store');
    Route::delete('/admin/bumdes/{id}', [BumdesController::class, 'destroy'])->name('admin.bumdes.destroy');

    //PEMBANGUNAN CRUD
    


    // PRESTASI CRUD
    Route::resource('prestasi', PrestasiController::class);
    Route::get('/prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('prestasi.edit');
    Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');
    Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create');
    Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store');

    //KEPENDUDUKAN CRUD
    Route::resource('kependudukan', KependudukanRekapController::class);
    Route::get('/kependudukan/create',[KependudukanRekapController::class, 'create'])->name('kependudukan.create');
    Route::post('/kependudukan', [KependudukanRekapController::class, 'store'])->name('kependudukan.store');
    Route::get('/kependudukan/{id}/edit', [KependudukanRekapController::class, 'edit'])->name('kependudukan.edit');
    Route::put('/kependudukan/{id}',[KependudukanRekapController::class, 'update'])->name('kependudukan.update');
    
    Route::delete('/admin/kependudukan/{id}', [KependudukanRekapController::class, 'destroy'])
    ->name('admin.kependudukan.destroy');

    Route::resource('hero', HeroSectionController::class);
    Route::get('/hero/create', [HeroSectionController::class, 'create'])->name('hero.create');
    Route::post('/hero', [HeroSectionController::class, 'store']) ->name('hero.store');
    Route::get('/hero/{hero}/edit', [HeroSectionController::class, 'edit'])->name('hero.edit');
    Route::put('/hero/{hero}', [HeroSectionController::class, 'update'])->name('hero.update');
});
