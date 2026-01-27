@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="container-fluid">

    {{-- ================= STATISTIC ================= --}}
    <div class="row">

        <div class="col-lg-3 col-md-6 col-12">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $jumlahBerita }}</h3>
                    <p>Berita</p>
                </div>
                <div class="icon"><i class="fas fa-newspaper"></i></div>
                <a href="{{ route('admin.berita.index') }}" class="small-box-footer">
                    Kelola <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $jumlahUmkm }}</h3>
                    <p>Produk UMKM</p>
                </div>
                <div class="icon"><i class="fas fa-store"></i></div>
                <a href="{{ route('admin.umkm.index') }}" class="small-box-footer">
                    Kelola <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        

        <div class="col-lg-3 col-md-6 col-12">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $jumlahCurhat }}</h3>
                    <p>Pengaduan</p>
                </div>
                <div class="icon"><i class="fas fa-comments"></i></div>
                <a href="{{ route('admin.ruang_curhat.index') }}" class="small-box-footer">
                    Tindak Lanjut <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>

    {{-- ================= MAIN ================= --}}
    <div class="row">

        {{-- INFO --}}
        <div class="col-lg-8 col-12">
            <div class="card card-outline card-primary h-100">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-info-circle mr-1"></i>
                        Ringkasan Sistem
                    </h3>
                </div>

                <div class="card-body">
                    <p>
                        Selamat datang di <strong>Dashboard Admin Desa Laweyan</strong>.
                        Semua data desa dikelola secara terpusat, transparan,
                        dan mudah diakses.
                    </p>

                    <div class="row mt-4">
                        <div class="col-md-4 col-12 mb-2">
                            <a href="{{ route('admin.berita.create') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-plus mr-1"></i> Tambah Berita
                            </a>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                            <a href="{{ route('admin.umkm.create') }}" class="btn btn-success btn-block">
                                <i class="fas fa-plus mr-1"></i> Tambah UMKM
                            </a>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                            <a href="{{ route('admin.ruang_curhat.index') }}" class="btn btn-danger btn-block">
                                <i class="fas fa-comments mr-1"></i> Pengaduan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- UPDATE TERBARU --}}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card card-outline card-info h-100">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bell mr-1"></i>
                        Update Terbaru
                    </h3>
                </div>

                <div class="card-body">

                    <h6 class="text-primary mb-2">
                        <i class="fas fa-newspaper mr-1"></i> Berita
                    </h6>
                    @forelse($beritaTerbaru as $berita)
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-truncate">{{ $berita->judul }}</span>
                            <small class="text-muted">{{ $berita->created_at->diffForHumans() }}</small>
                        </div>
                    @empty
                        <small class="text-muted">Belum ada berita</small>
                    @endforelse

                    <hr>

                    <h6 class="text-danger mb-2">
                        <i class="fas fa-comments mr-1"></i> Pengaduan
                    </h6>
                    @forelse($curhatTerbaru as $curhat)
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-truncate">
                                {{ Str::limit($curhat->pesan, 30) }}
                            </span>
                            <small class="text-muted">{{ $curhat->created_at->diffForHumans() }}</small>
                        </div>
                    @empty
                        <small class="text-muted">Belum ada pengaduan</small>
                    @endforelse

                </div>
            </div>
        </div>

    </div>

</div>
@endsection
