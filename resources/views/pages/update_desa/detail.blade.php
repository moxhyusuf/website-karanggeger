@extends('layout.app')

@section('title', $berita->judul)

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
    margin-bottom: 45px;
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

.page-title .breadcrumbs {
    display: flex;
    gap: 8px;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 0;
}

.page-title .breadcrumbs a,
.page-title .breadcrumbs span {
    color: rgba(255,255,255,.95);
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
}

.page-title .breadcrumbs a:hover {
    color: #fff;
    text-decoration: underline;
}

.page-title .breadcrumbs .separator {
    color: rgba(255,255,255,.5);
    margin: 0 5px;
}

/* ================= DETAIL BERITA ================= */
.berita-detail-section {
    background: linear-gradient(to bottom, #fef2f2 0%, #ffffff 100%);
    padding: 0 0 70px;
}

.berita-detail {
    background: var(--bg-white);
    border-radius: 16px;
    padding: 35px;
    border: 1px solid var(--border-color);
    box-shadow: 0 4px 20px rgba(220, 38, 38, .08);
    transition: box-shadow .3s ease;
}

.berita-detail:hover {
    box-shadow: 0 8px 30px rgba(220, 38, 38, .12);
}

.berita-detail-img {
    margin-bottom: 30px;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(220, 38, 38, .15);
    border: 1px solid var(--border-color);
}

.berita-detail-img img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    display: block;
    transition: transform .6s ease;
}

.berita-detail-img:hover img {
    transform: scale(1.06);
}

.berita-detail-title {
    font-size: 2.2rem;
    font-weight: 800;
    line-height: 1.3;
    color: var(--text-dark);
    margin-bottom: 18px;
    text-shadow: 0 1px 2px rgba(0,0,0,.02);
}

.berita-detail-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 16px 22px;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff5f5 100%);
    border-radius: 12px;
    margin-bottom: 30px;
    border-left: 4px solid var(--primary-color);
    box-shadow: 0 2px 8px rgba(220, 38, 38, .06);
}

.berita-detail-meta span {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    color: var(--text-gray);
    font-weight: 600;
}

.berita-detail-meta i {
    color: var(--primary-color);
    font-size: 15px;
}

.berita-detail-content {
    font-size: 16px;
    line-height: 1.85;
    color: #374151;
    text-align: justify;
}

.berita-detail-content p {
    margin-bottom: 18px;
}

.berita-detail-content p:last-child {
    margin-bottom: 0;
}

.berita-back-btn {
    margin-top: 40px;
    padding-top: 30px;
    border-top: 2px dashed var(--border-color);
}

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

/* ================= SIDEBAR ================= */
.sidebar-box {
    background: var(--bg-white);
    padding: 24px;
    border-radius: 14px;
    border: 1px solid var(--border-color);
    margin-bottom: 22px;
    box-shadow: 0 4px 18px rgba(220, 38, 38, .08);
    position: sticky;
    top: 100px;
    transition: all .3s ease;
}

.sidebar-box:hover {
    box-shadow: 0 6px 24px rgba(220, 38, 38, .12);
}

.sidebar-box h5 {
    font-weight: 800;
    font-size: 18px;
    color: var(--text-dark);
    margin-bottom: 22px;
    padding-bottom: 14px;
    border-bottom: 2px solid var(--border-color);
    position: relative;
    display: flex;
    align-items: center;
    gap: 8px;
}

.sidebar-box h5 i {
    color: var(--primary-color);
    font-size: 20px;
}

.sidebar-box h5::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 55px;
    height: 2px;
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
}

.sidebar-berita {
    display: flex;
    gap: 12px;
    margin-bottom: 18px;
    padding-bottom: 18px;
    border-bottom: 1px solid #f3f4f6;
    text-decoration: none;
    color: inherit;
    transition: all .3s ease;
    border-radius: 8px;
    padding: 10px;
    margin-left: -10px;
    margin-right: -10px;
}

.sidebar-berita:last-child {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0;
}

.sidebar-berita:hover {
    background: var(--bg-light);
    transform: translateX(4px);
}

.sidebar-berita-img {
    width: 75px;
    height: 60px;
    border-radius: 9px;
    overflow: hidden;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(220, 38, 38, .12);
    border: 1px solid var(--border-color);
}

.sidebar-berita-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .4s ease;
}

.sidebar-berita:hover .sidebar-berita-img img {
    transform: scale(1.15);
}

.sidebar-berita-content h6 {
    font-size: 13px;
    font-weight: 700;
    line-height: 1.4;
    color: #1f2937;
    margin-bottom: 6px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: color .3s ease;
}

.sidebar-berita:hover h6 {
    color: var(--primary-color);
}

.sidebar-berita-content small {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11px;
    color: #9ca3af;
    font-weight: 600;
}

.sidebar-berita-content small i {
    font-size: 10px;
    color: var(--primary-color);
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 30px 20px;
    color: #9ca3af;
}

.empty-state i {
    font-size: 40px;
    color: var(--border-color);
    margin-bottom: 10px;
    display: block;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    .page-title {
        padding: 45px 0 32px;
    }
    
    .berita-detail {
        padding: 28px 22px;
    }
    
    .berita-detail-title {
        font-size: 1.9rem;
    }
    
    .berita-detail-img img {
        height: 340px;
    }
    
    .sidebar-box {
        position: static;
        margin-top: 35px;
    }
}

@media (max-width: 767px) {
    .page-title {
        padding: 35px 0 28px;
        margin-bottom: 30px;
    }
    
    .berita-detail {
        padding: 22px 18px;
        border-radius: 14px;
    }
    
    .berita-detail-title {
        font-size: 1.5rem;
    }
    
    .berita-detail-img img {
        height: 240px;
    }
    
    .berita-detail-meta {
        gap: 14px;
        padding: 14px 18px;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .berita-detail-content {
        font-size: 15px;
        line-height: 1.75;
    }
    
    .sidebar-box {
        padding: 20px;
    }
    
    .sidebar-berita-img {
        width: 70px;
        height: 55px;
    }
}

@media (max-width: 576px) {
    .berita-detail-title {
        font-size: 1.3rem;
    }
    
    .berita-detail-img img {
        height: 200px;
    }
    
    .btn-back {
        width: 100%;
        justify-content: center;
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

.berita-detail {
    animation: fadeIn .6s ease-out;
}

.sidebar-box {
    animation: slideInRight .7s ease-out;
}

.berita-detail-img {
    animation: fadeIn .8s ease-out;
}

/* ================= LOADING SKELETON ================= */
.berita-detail-img::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, transparent, rgba(220,38,38,.05), transparent);
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}
</style>

<main class="main">

    {{-- HEADER WITH BREADCRUMB --}}
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="{{ url('/') }}">Beranda</a>
                <span class="separator">/</span>
                <a href="{{ route('berita') }}">Berita</a>
                <span class="separator">/</span>
                <span>{{ Str::limit($berita->judul, 50) }}</span>
            </nav>
        </div>
    </div>

    <section class="berita-detail-section">
        <div class="container">
            <div class="row">

                {{-- KONTEN UTAMA --}}
                <div class="col-lg-8">

                    <article class="berita-detail" data-aos="fade-up">

                        {{-- Gambar Utama --}}
                        @if($berita->image)
                            <div class="berita-detail-img">
                                <img src="{{ asset('storage/'.$berita->image) }}"
                                     alt="{{ $berita->judul }}"
                                     loading="lazy">
                            </div>
                        @endif

                        {{-- Judul --}}
                        <h1 class="berita-detail-title">
                            {{ $berita->judul }}
                        </h1>

                        {{-- Meta Info --}}
                        <div class="berita-detail-meta">
                            <span>
                                <i class="bi bi-person-circle"></i>
                                {{ $berita->nmpenulis }}
                            </span>
                            <span>
                                <i class="bi bi-calendar-event"></i>
                                {{ \Carbon\Carbon::parse($berita->tgl_berita)->format('d M Y') }}
                            </span>
                        </div>

                        {{-- Konten Berita --}}
                        <div class="berita-detail-content">
                            {!! nl2br(e($berita->narasiberita)) !!}
                        </div>

                        {{-- Tombol Kembali --}}
                        <div class="berita-back-btn">
                            <a href="{{ route('berita') }}" class="btn-back">
                                <i class="bi bi-arrow-left"></i>
                                Kembali ke Daftar Berita
                            </a>
                        </div>

                    </article>

                </div>

                {{-- SIDEBAR --}}
                <div class="col-lg-4">

                    <div class="sidebar-box" data-aos="fade-up" data-aos-delay="100">
                        <h5>
                            <i class="bi bi-newspaper"></i>
                            Berita Terbaru
                        </h5>

                        @forelse($beritaTerbaru ?? [] as $item)
                            <a href="{{ route('berita.detail', $item->id_berita) }}"
                               class="sidebar-berita">

                                <div class="sidebar-berita-img">
                                    <img src="{{ asset('storage/'.$item->image) }}"
                                         alt="{{ $item->judul }}"
                                         loading="lazy">
                                </div>

                                <div class="sidebar-berita-content">
                                    <h6>{{ Str::limit($item->judul, 55) }}</h6>
                                    <small>
                                        <i class="bi bi-calendar3"></i>
                                        {{ \Carbon\Carbon::parse($item->tgl_berita)->format('d M Y') }}
                                    </small>
                                </div>

                            </a>
                        @empty
                            <div class="empty-state">
                                <i class="bi bi-inbox"></i>
                                <p class="small mb-0">
                                    <em>Belum ada berita lainnya</em>
                                </p>
                            </div>
                        @endforelse

                    </div>

                </div>

            </div>
        </div>
    </section>

</main>

@endsection