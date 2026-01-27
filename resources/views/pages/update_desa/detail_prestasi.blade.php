@extends('layout.app')

@section('title', $prestasi->judul)

@section('content')

<style>
:root {
    --primary-color: #dc2626;
    --primary-dark: #b91c1c;
    --primary-light: #ef4444;
    --accent-color: #f87171;
    --text-dark: #7f1d1d;
    --text-gray: #991b1b;
    --text-light: #b91c1c;
    --bg-light: #fef2f2;
    --bg-white: #ffffff;
    --border-color: #fecaca;
}

/* ================= PAGE TITLE ================= */
.page-title {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 50px 0 35px;
    margin-bottom: 0;
    position: relative;
    overflow: hidden;
}

.page-title::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background: radial-gradient(circle at top right, rgba(239,68,68,.15) 0%, transparent 70%);
}

.page-title::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.page-title .container {
    position: relative;
    z-index: 1;
}

.page-title .breadcrumbs ol {
    display: flex;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
    flex-wrap: wrap;
}

.page-title .breadcrumbs ol li {
    color: rgba(255,255,255,.9);
    font-size: 13px;
    max-width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.page-title .breadcrumbs ol li a {
    color: #fff;
    text-decoration: none;
    transition: opacity .2s;
    font-weight: 500;
}

.page-title .breadcrumbs ol li a:hover {
    opacity: .8;
}

.page-title .breadcrumbs ol li::after {
    content: '/';
    margin-left: 10px;
    color: rgba(255,255,255,.6);
}

.page-title .breadcrumbs ol li:last-child::after {
    display: none;
}

/* ================= DETAIL SECTION ================= */
.detail-section {
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
    padding: 50px 0 70px;
}

.detail-card {
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    box-shadow: 0 4px 20px rgba(220, 38, 38, .1);
    border-radius: 16px;
    padding: 35px;
    transition: all .3s ease;
}

.detail-card:hover {
    box-shadow: 0 8px 30px rgba(220, 38, 38, .15);
}

/* ================= IMAGE WRAPPER ================= */
.detail-img-wrapper {
    width: 100%;
    height: 100%;
    min-height: 320px;
    overflow: hidden;
    border-radius: 14px;
    border: 3px solid var(--primary-color);
    box-shadow: 0 8px 24px rgba(220, 38, 38, .2);
    position: relative;
    background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
}

.detail-img-wrapper::after {
    content: '🏆';
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 32px;
    background: rgba(255,255,255,.95);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(220, 38, 38, .3);
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

.detail-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .5s ease;
}

.detail-img-wrapper:hover img {
    transform: scale(1.08);
}

/* ================= CONTENT ================= */
.detail-title {
    font-size: 28px;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 18px;
    line-height: 1.3;
    text-shadow: 0 1px 2px rgba(0,0,0,.02);
}

.detail-meta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff5f5 100%);
    border-radius: 10px;
    font-size: 13px;
    color: var(--text-gray);
    font-weight: 600;
    margin-bottom: 24px;
    border: 1px solid var(--border-color);
}

.detail-meta i {
    color: var(--primary-color);
    font-size: 15px;
}

.prestasi-content {
    font-size: 15.5px;
    line-height: 1.85;
    color: #374151;
    text-align: justify;
    margin-bottom: 28px;
}

.prestasi-content p {
    margin-bottom: 16px;
}

/* ================= BUTTON ================= */
.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 26px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all .3s ease;
    box-shadow: 0 3px 10px rgba(220, 38, 38, .3);
}

.btn-back:hover {
    background: linear-gradient(135deg, var(--primary-dark) 0%, #991b1b 100%);
    color: #fff;
    transform: translateX(-5px);
    box-shadow: 0 5px 15px rgba(220, 38, 38, .4);
}

.btn-back i {
    font-size: 15px;
    transition: transform .3s ease;
}

.btn-back:hover i {
    transform: translateX(-5px);
}

/* ================= DIVIDER ================= */
.content-divider {
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--border-color), transparent);
    margin: 30px 0;
}

/* ================= BADGE ================= */
.achievement-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 20px;
    box-shadow: 0 3px 10px rgba(220, 38, 38, .3);
}

.achievement-badge i {
    font-size: 16px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    .page-title {
        padding: 45px 0 32px;
    }
    
    .detail-section {
        padding: 40px 0 60px;
    }
    
    .detail-card {
        padding: 28px;
    }
    
    .detail-title {
        font-size: 24px;
    }
    
    .detail-img-wrapper {
        min-height: 280px;
        margin-bottom: 25px;
    }
}

@media (max-width: 767px) {
    .page-title {
        padding: 35px 0 28px;
    }
    
    .detail-section {
        padding: 30px 0 50px;
    }
    
    .detail-card {
        padding: 22px;
        border-radius: 14px;
    }
    
    .detail-title {
        font-size: 20px;
        margin-bottom: 16px;
    }
    
    .detail-img-wrapper {
        min-height: 240px;
        margin-bottom: 20px;
    }
    
    .detail-img-wrapper::after {
        width: 45px;
        height: 45px;
        font-size: 28px;
        top: 12px;
        right: 12px;
    }
    
    .prestasi-content {
        font-size: 14.5px;
        line-height: 1.75;
    }
    
    .detail-meta {
        font-size: 12px;
        padding: 8px 16px;
    }
}

@media (max-width: 576px) {
    .detail-title {
        font-size: 18px;
    }
    
    .detail-img-wrapper {
        min-height: 200px;
    }
    
    .btn-back {
        width: 100%;
        justify-content: center;
    }
    
    .page-title .breadcrumbs ol li {
        font-size: 12px;
        max-width: 150px;
    }
}

/* ================= ANIMATION ================= */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.detail-card {
    animation: fadeIn .6s ease-out;
}

.detail-img-wrapper {
    animation: slideInRight .7s ease-out;
}

/* ================= INFO BOXES (Optional Enhancement) ================= */
.info-box {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 18px;
    background: var(--bg-light);
    border-left: 4px solid var(--primary-color);
    border-radius: 10px;
    margin-bottom: 16px;
}

.info-box i {
    font-size: 24px;
    color: var(--primary-color);
}

.info-box .info-text {
    flex: 1;
}

.info-box .info-label {
    font-size: 11px;
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 4px;
}

.info-box .info-value {
    font-size: 14px;
    color: var(--text-dark);
    font-weight: 700;
}
</style>

<main class="main">

    {{-- HEADER --}}
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ route('prestasi.index') }}">Prestasi Desa</a></li>
                    <li class="current">{{ Str::limit($prestasi->judul, 40) }}</li>
                </ol>
            </nav>
        </div>
    </div>

</main>

{{-- ================= DETAIL PRESTASI ================= --}}
<section class="detail-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="detail-card" data-aos="fade-up">

                    <div class="row g-4 align-items-start">

                        {{-- FOTO --}}
                        <div class="col-md-5">
                            <div class="detail-img-wrapper">
                                <img src="{{ asset('storage/'.$prestasi->foto_utama) }}"
                                     alt="{{ $prestasi->judul }}"
                                     loading="lazy">
                            </div>
                        </div>

                        {{-- KONTEN --}}
                        <div class="col-md-7">

                            {{-- Badge Achievement --}}
                            <div class="achievement-badge">
                                <i class="bi bi-award-fill"></i>
                                Prestasi Desa
                            </div>

                            {{-- Judul --}}
                            <h1 class="detail-title">
                                {{ $prestasi->judul }}
                            </h1>

                            {{-- Meta Info --}}
                            <div class="detail-meta">
                                <i class="bi bi-calendar-event"></i>
                                {{ \Carbon\Carbon::parse($prestasi->tanggal)->translatedFormat('d F Y') }}
                            </div>

                            {{-- Divider --}}
                            <div class="content-divider"></div>

                            {{-- Deskripsi --}}
                            <div class="prestasi-content">
                                {!! nl2br(e($prestasi->deskripsi)) !!}
                            </div>

                            {{-- Tombol Kembali --}}
                            <div class="mt-4">
                                <a href="{{ route('prestasi.index') }}"
                                   class="btn-back">
                                    <i class="bi bi-arrow-left"></i>
                                    Kembali ke Prestasi
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

@endsection