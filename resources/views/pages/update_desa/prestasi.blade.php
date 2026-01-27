@extends('layout.app')

@section('title', 'Prestasi Desa')

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
    --shadow-sm: 0 1px 3px rgba(220,38,38,.08);
    --shadow-md: 0 4px 12px rgba(220,38,38,.1);
    --shadow-lg: 0 10px 30px rgba(220,38,38,.15);
}

/* ================= PAGE TITLE ================= */
.page-title {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 65px 0 50px;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
}

.page-title::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.page-title::after {
    content: '🏆';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 120px;
    opacity: .08;
}

.page-title .container {
    position: relative;
    z-index: 1;
}

.page-title h1 {
    color: #fff;
    font-size: 36px;
    font-weight: 800;
    margin-top: 10px;
    text-shadow: 0 2px 10px rgba(0,0,0,.2);
}

.page-title .breadcrumbs ol {
    display: flex;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.page-title .breadcrumbs ol li {
    color: rgba(255,255,255,.9);
    font-size: 13px;
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

/* ================= SECTION HEADER ================= */
#prestasi {
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
    padding: 30px 0 70px;
}

.section-header {
    text-align: center;
    margin-bottom: 45px;
    padding-top: 0;
}

.section-header h2 {
    font-size: 32px;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
}

.section-header h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    border-radius: 2px;
}

.section-header p {
    font-size: 15px;
    color: #6c757d;
    max-width: 580px;
    margin: 22px auto 0;
    line-height: 1.6;
}

/* ================= CARD PRESTASI ================= */
.prestasi-card {
    background: var(--bg-white);
    border-radius: 14px;
    border: 1px solid var(--border-color);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    transition: all .3s cubic-bezier(.4,0,.2,1);
    position: relative;
    box-shadow: var(--shadow-sm);
}

.prestasi-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    transform: scaleX(0);
    transition: transform .3s ease;
    z-index: 2;
}

.prestasi-card:hover::before {
    transform: scaleX(1);
}

.prestasi-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-light);
}

/* ================= IMAGE WRAPPER ================= */
.prestasi-img-wrapper {
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
    flex-shrink: 0;
    position: relative;
}

.prestasi-img-wrapper::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(220,38,38,.4), transparent 60%);
    opacity: 0;
    transition: opacity .3s ease;
}

.prestasi-card:hover .prestasi-img-wrapper::after {
    opacity: 1;
}

.prestasi-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform .5s cubic-bezier(.4,0,.2,1);
}

.prestasi-card:hover .prestasi-img-wrapper img {
    transform: scale(1.12);
}

/* ================= TROPHY BADGE ================= */
.trophy-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: linear-gradient(135deg, rgba(255,255,255,.95) 0%, rgba(255,255,255,.85) 100%);
    color: var(--primary-color);
    padding: 8px 12px;
    border-radius: 20px;
    font-size: 20px;
    z-index: 2;
    box-shadow: 0 3px 10px rgba(220, 38, 38, .3);
    backdrop-filter: blur(4px);
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

/* ================= CARD CONTENT ================= */
.prestasi-card .card-body {
    padding: 22px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.prestasi-card h5 {
    font-size: 17px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 12px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 48px;
    transition: color .3s ease;
}

.prestasi-card:hover h5 {
    color: var(--primary-color);
}

.prestasi-card .date-info {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 14px;
    padding: 6px 12px;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff5f5 100%);
    border-radius: 8px;
    width: fit-content;
    border: 1px solid var(--border-color);
}

.prestasi-card .date-info i {
    font-size: 13px;
}

.prestasi-card .description {
    font-size: 13.5px;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 18px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex-grow: 1;
}

/* ================= BUTTON ================= */
.btn-detail {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    border: none;
    border-radius: 9px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all .3s ease;
    align-self: flex-start;
    margin-top: auto;
    box-shadow: 0 3px 10px rgba(220, 38, 38, .3);
}

.btn-detail:hover {
    background: linear-gradient(135deg, var(--primary-dark) 0%, #991b1b 100%);
    color: #fff;
    transform: translateX(5px);
    box-shadow: 0 5px 15px rgba(220, 38, 38, .4);
}

.btn-detail i {
    font-size: 14px;
    transition: transform .3s ease;
}

.btn-detail:hover i {
    transform: translateX(4px);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 70px 20px;
    background: var(--bg-white);
    border-radius: 16px;
    border: 2px dashed var(--border-color);
}

.empty-state i {
    font-size: 70px;
    color: var(--border-color);
    margin-bottom: 18px;
    display: block;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: .5; }
}

.empty-state p {
    font-size: 16px;
    color: #94a3b8;
    font-style: italic;
    margin: 0;
}

/* ================= COUNT BADGE ================= */
.count-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    z-index: 2;
    box-shadow: 0 3px 10px rgba(220, 38, 38, .4);
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    .page-title {
        padding: 55px 0 45px;
    }
    
    .page-title h1 {
        font-size: 30px;
    }
    
    .section-header h2 {
        font-size: 28px;
    }
    
    #prestasi {
        padding: 25px 0 60px;
    }
    
    .page-title::after {
        font-size: 90px;
        right: 5%;
    }
}

@media (max-width: 767px) {
    .prestasi-img-wrapper {
        height: 180px;
    }
    
    .prestasi-card .card-body {
        padding: 20px;
    }
    
    .page-title h1 {
        font-size: 26px;
    }
    
    .page-title {
        padding: 45px 0 35px;
    }
    
    .section-header h2 {
        font-size: 24px;
    }
    
    .section-header p {
        font-size: 14px;
    }
    
    #prestasi {
        padding: 20px 0 50px;
    }
    
    .page-title::after {
        display: none;
    }
    
    .prestasi-card h5 {
        font-size: 16px;
        min-height: 44px;
    }
}

@media (max-width: 576px) {
    .prestasi-img-wrapper {
        height: 160px;
    }
    
    .btn-detail {
        width: 100%;
        justify-content: center;
    }
}

/* ================= ANIMATION ================= */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scaleIn {
    from {
        opacity: 0;
        transform: scale(.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.prestasi-card {
    animation: scaleIn .5s ease-out;
}

.prestasi-card:nth-child(1) { animation-delay: .1s; }
.prestasi-card:nth-child(2) { animation-delay: .2s; }
.prestasi-card:nth-child(3) { animation-delay: .3s; }
.prestasi-card:nth-child(4) { animation-delay: .4s; }
.prestasi-card:nth-child(5) { animation-delay: .5s; }
.prestasi-card:nth-child(6) { animation-delay: .6s; }

/* ================= HOVER SHINE EFFECT ================= */
.prestasi-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,.3), transparent);
    transition: left .5s ease;
}

.prestasi-card:hover::after {
    left: 100%;
}
</style>

<main class="main">

    {{-- HEADER --}}
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="current">Prestasi Desa</li>
                </ol>
            </nav>
            <h1>Prestasi Desa</h1>
        </div>
    </div>

</main>

<section id="prestasi">

    <div class="container">

        {{-- SECTION HEADER --}}
        <div class="section-header" data-aos="fade-up">
            <h2>Prestasi & Penghargaan Desa</h2>
            <p>
                Dokumentasi berbagai prestasi dan pencapaian yang telah diraih untuk kemajuan dan kebanggaan masyarakat desa.
            </p>
        </div>

        {{-- CARDS GRID --}}
        <div class="row g-4">

            @forelse ($prestasi as $item)

            <div class="col-lg-4 col-md-6"
                 data-aos="zoom-in"
                 data-aos-delay="{{ $loop->iteration * 100 }}">

                <div class="prestasi-card">

                    {{-- FOTO --}}
                    <div class="prestasi-img-wrapper">
                        <div class="trophy-badge">🏆</div>
                        <img src="{{ asset('storage/'.$item->foto_utama) }}"
                             alt="{{ $item->judul }}"
                             loading="lazy">
                    </div>

                    {{-- KONTEN --}}
                    <div class="card-body">

                        <h5>{{ $item->judul }}</h5>

                        <div class="date-info">
                            <i class="bi bi-calendar-event"></i>
                            {{ $item->tanggal }}
                        </div>

                        <p class="description">
                            {{ $item->deskripsi }}
                        </p>

                        <a href="{{ route('prestasi.show', $item->id) }}"
                           class="btn-detail">
                            Lihat Detail
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>
                </div>
            </div>

            @empty

            <div class="col-12">
                <div class="empty-state">
                    <i class="bi bi-trophy"></i>
                    <p>Belum ada data prestasi yang tersedia</p>
                </div>
            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection