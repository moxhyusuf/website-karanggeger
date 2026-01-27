@extends('layout.app')

@section('title', 'UMKM Desa')

@section('content')

{{-- ================= PAGE TITLE ================= --}}
<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="current">UMKM Desa</li>
            </ol>
        </nav>
    </div>
</div>

{{-- ================= PAGE TITLE ================= --}}
<div class="page-title-umkm" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="current">UMKM Desa</li>
            </ol>
        </nav>
        <h1>UMKM Desa</h1>
        <p class="subtitle">Produk unggulan pelaku UMKM lokal berkualitas</p>
    </div>
</div>

{{-- ================= UMKM LIST ================= --}}
<section class="section">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2 class="fw-bold">Katalog Produk</h2>
            <p class="text-muted">Jelajahi berbagai produk unggulan dari UMKM lokal</p>
        </div>

        <div class="umkm-grid">
            @forelse ($umkm as $row)
            <div class="umkm-card" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 80 }}">

                {{-- IMAGE --}}
                <div class="umkm-image">
                    <img src="{{ $row->media->count()
                        ? asset('storage/'.$row->media->first()->file_path)
                        : asset('assets/img/no-image.png') }}"
                        alt="{{ $row->nama }}">

                    <div class="image-overlay"></div>
                    
                    <span class="price-badge">
                        <i class="bi bi-tag-fill"></i>
                        Rp{{ number_format($row->harga, 0, ',', '.') }}
                    </span>
                </div>

                {{-- BODY --}}
                <div class="umkm-body">
                    <h3>{{ $row->nama }}</h3>
                    <p class="deskripsi">
                        {{ Str::limit($row->deskripsi, 90) }}
                    </p>
                </div>

                {{-- ACTION --}}
                <div class="umkm-action">
                    <a href="{{ route('umkm.detail', $row->id) }}" class="btn-detail">
                        <i class="bi bi-eye"></i> Detail
                    </a>

                    <a href="https://wa.me/{{ $row->wa }}?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20{{ urlencode($row->nama) }}"
                       target="_blank"
                       class="btn-wa">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>

            </div>
            @empty
                <div class="empty-state">
                    <i class="bi bi-shop"></i>
                    <p>Data UMKM belum tersedia</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

{{-- ================= CSS ================= --}}
<style>
:root {
    --primary-red: #DC2626;
    --secondary-red: #EF4444;
    --light-red: #FEE2E2;
    --dark-red: #991B1B;
    --gradient-red: linear-gradient(135deg, #DC2626 0%, #EF4444 100%);
    --gradient-red-light: linear-gradient(135deg, #FCA5A5 0%, #FEE2E2 100%);
}

/* ================= PAGE TITLE ================= */
.page-title-umkm {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 65px 0 50px;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
}

.page-title-umkm::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.page-title-umkm::after {
    content: '🛍️';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: .08;
}

.page-title-umkm .container {
    position: relative;
    z-index: 1;
}

.page-title-umkm h1 {
    color: #fff;
    font-size: 36px;
    font-weight: 800;
    margin-top: 10px;
    margin-bottom: 8px;
    text-shadow: 0 2px 10px rgba(0,0,0,.2);
}

.page-title-umkm .subtitle {
    color: rgba(255,255,255,.9);
    font-size: 15px;
    margin: 0;
    font-weight: 400;
}

.page-title-umkm .breadcrumbs ol {
    display: flex;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.page-title-umkm .breadcrumbs ol li {
    color: rgba(255,255,255,.9);
    font-size: 13px;
}

.page-title-umkm .breadcrumbs ol li a {
    color: #fff;
    text-decoration: none;
    transition: opacity .2s;
    font-weight: 500;
}

.page-title-umkm .breadcrumbs ol li a:hover {
    opacity: .8;
}

.page-title-umkm .breadcrumbs ol li::after {
    content: '/';
    margin-left: 10px;
    color: rgba(255,255,255,.6);
}

.page-title-umkm .breadcrumbs ol li:last-child::after {
    display: none;
}

@media (max-width: 991px) {
    .page-title-umkm {
        padding: 55px 0 45px;
    }
    
    .page-title-umkm h1 {
        font-size: 30px;
    }
    
    .page-title-umkm::after {
        font-size: 80px;
        right: 5%;
    }
}

@media (max-width: 767px) {
    .page-title-umkm h1 {
        font-size: 26px;
    }
    
    .page-title-umkm {
        padding: 45px 0 35px;
    }
    
    .page-title-umkm .subtitle {
        font-size: 14px;
    }
    
    .page-title-umkm::after {
        display: none;
    }
}

.section {
    background: linear-gradient(180deg, #FFF5F5 0%, #ffffff 100%);
    padding: 60px 0;
}

.section-title h2 {
    background: var(--gradient-red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-size: 2.5rem;
    margin-bottom: 8px;
}

.umkm-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 28px;
    margin-top: 40px;
}

.umkm-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(220, 38, 38, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    border: 2px solid transparent;
    position: relative;
}

.umkm-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-red);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.umkm-card:hover::before {
    transform: scaleX(1);
}

.umkm-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 48px rgba(220, 38, 38, 0.2);
    border-color: var(--light-red);
}

.umkm-image {
    position: relative;
    overflow: hidden;
    height: 240px;
}

.umkm-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.umkm-card:hover .umkm-image img {
    transform: scale(1.15);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg, transparent 0%, rgba(220, 38, 38, 0.15) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.umkm-card:hover .image-overlay {
    opacity: 1;
}

.price-badge {
    position: absolute;
    bottom: 16px;
    left: 16px;
    background: var(--gradient-red);
    color: #fff;
    font-weight: 700;
    padding: 10px 16px;
    border-radius: 12px;
    font-size: 15px;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.4);
    display: flex;
    align-items: center;
    gap: 6px;
    backdrop-filter: blur(8px);
    z-index: 2;
}

.price-badge i {
    font-size: 14px;
}

.umkm-body {
    padding: 20px;
    flex-grow: 1;
    background: linear-gradient(180deg, #ffffff 0%, #FFFBFB 100%);
}

.umkm-body h3 {
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--dark-red);
    line-height: 1.4;
}

.deskripsi {
    font-size: 14px;
    color: #6B7280;
    line-height: 1.7;
    margin: 0;
}

.umkm-action {
    display: flex;
    gap: 12px;
    padding: 16px 20px;
    background: #FEF2F2;
    border-top: 1px solid var(--light-red);
}

.btn-detail {
    flex: 1;
    background: var(--gradient-red);
    color: #fff;
    padding: 12px 16px;
    text-align: center;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
}

.btn-detail:hover {
    background: linear-gradient(135deg, #991B1B 0%, #DC2626 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
    color: #fff;
}

.btn-wa {
    width: 52px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    font-size: 22px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.25);
}

.btn-wa:hover {
    background: linear-gradient(135deg, #128C7E 0%, #075E54 100%);
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.35);
    color: #fff;
}

.empty-state {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    color: var(--primary-red);
}

.empty-state i {
    font-size: 64px;
    margin-bottom: 16px;
    opacity: 0.5;
}

.empty-state p {
    font-size: 18px;
    color: #9CA3AF;
    margin: 0;
}

.breadcrumbs a {
    color: var(--primary-red);
    transition: color 0.3s ease;
}

.breadcrumbs a:hover {
    color: var(--dark-red);
}

@media (max-width: 768px) {
    .umkm-grid {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 20px;
    }
    
    .section-title h2 {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .umkm-grid {
        grid-template-columns: 1fr;
    }
    
    .umkm-image {
        height: 220px;
    }
    
    .section-title h2 {
        font-size: 1.75rem;
    }
}
</style>

@endsection