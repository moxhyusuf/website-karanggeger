@extends('layout.app')

@section('title', 'Galeri Desa')

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
    padding: 65px 0 50px;
    margin-bottom: 0;
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
    content: '📸';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 110px;
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

/* ================= PORTFOLIO SECTION ================= */
.portfolio {
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
    padding: 50px 0 70px;
}

/* ================= FILTER BUTTONS ================= */
.portfolio-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    padding: 0;
    margin: 0 0 45px;
    list-style: none;
}

.portfolio-filters li {
    padding: 10px 24px;
    background: var(--bg-white);
    color: var(--text-gray);
    border: 2px solid var(--border-color);
    border-radius: 25px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(220, 38, 38, .08);
}

.portfolio-filters li:hover {
    background: var(--bg-light);
    border-color: var(--primary-light);
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(220, 38, 38, .15);
}

.portfolio-filters li.filter-active {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    border-color: var(--primary-color);
    box-shadow: 0 4px 12px rgba(220, 38, 38, .3);
    transform: translateY(-3px);
}

/* ================= PORTFOLIO ITEM ================= */
.portfolio-item {
    position: relative;
    overflow: hidden;
    border-radius: 14px;
    box-shadow: 0 4px 15px rgba(220, 38, 38, .1);
    transition: all .3s ease;
    background: var(--bg-white);
    border: 1px solid var(--border-color);
}

.portfolio-item::before {
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

.portfolio-item:hover::before {
    transform: scaleX(1);
}

.portfolio-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(220, 38, 38, .2);
    border-color: var(--primary-light);
}

/* ================= IMAGE ================= */
.portfolio-item img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
    transition: transform .5s ease;
}

.portfolio-item:hover img {
    transform: scale(1.15);
}

/* ================= INFO OVERLAY ================= */
.portfolio-info {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(220,38,38,.95) 0%, rgba(185,28,28,.85) 50%, transparent 100%);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 24px;
    opacity: 0;
    transition: opacity .4s ease;
}

.portfolio-item:hover .portfolio-info {
    opacity: 1;
}

.portfolio-info h4 {
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 8px;
    transform: translateY(20px);
    transition: transform .4s ease .1s;
    text-shadow: 0 2px 8px rgba(0,0,0,.3);
}

.portfolio-item:hover .portfolio-info h4 {
    transform: translateY(0);
}

.portfolio-info p {
    color: rgba(255,255,255,.95);
    font-size: 13px;
    line-height: 1.5;
    margin-bottom: 16px;
    transform: translateY(20px);
    transition: transform .4s ease .2s;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.portfolio-item:hover .portfolio-info p {
    transform: translateY(0);
}

/* ================= PREVIEW LINK ================= */
.preview-link {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 45px;
    height: 45px;
    background: rgba(255,255,255,.95);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    font-size: 20px;
    opacity: 0;
    transform: scale(0);
    transition: all .3s ease .3s;
    box-shadow: 0 4px 12px rgba(0,0,0,.3);
    z-index: 3;
}

.portfolio-item:hover .preview-link {
    opacity: 1;
    transform: scale(1);
}

.preview-link:hover {
    background: var(--primary-color);
    color: #fff;
    transform: scale(1.15) rotate(15deg);
}

/* ================= CATEGORY BADGE ================= */
.category-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    padding: 6px 14px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .5px;
    z-index: 2;
    box-shadow: 0 3px 10px rgba(220, 38, 38, .4);
    opacity: 0;
    transform: translateY(-10px);
    transition: all .3s ease;
}

.portfolio-item:hover .category-badge {
    opacity: 1;
    transform: translateY(0);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 80px 20px;
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

/* ================= LOADING SKELETON ================= */
.portfolio-item::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,.3), transparent);
    transition: left .5s ease;
}

.portfolio-item:hover::after {
    left: 100%;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    .page-title {
        padding: 55px 0 45px;
    }
    
    .page-title h1 {
        font-size: 30px;
    }
    
    .portfolio {
        padding: 40px 0 60px;
    }
    
    .portfolio-item img {
        height: 250px;
    }
    
    .page-title::after {
        font-size: 90px;
        right: 5%;
    }
}

@media (max-width: 767px) {
    .page-title {
        padding: 45px 0 35px;
    }
    
    .page-title h1 {
        font-size: 26px;
    }
    
    .portfolio {
        padding: 30px 0 50px;
    }
    
    .portfolio-filters {
        gap: 8px;
        margin-bottom: 35px;
    }
    
    .portfolio-filters li {
        padding: 8px 18px;
        font-size: 13px;
    }
    
    .portfolio-item img {
        height: 220px;
    }
    
    .portfolio-info {
        padding: 20px;
    }
    
    .portfolio-info h4 {
        font-size: 16px;
    }
    
    .portfolio-info p {
        font-size: 12px;
    }
    
    .preview-link {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
    
    .page-title::after {
        display: none;
    }
}

@media (max-width: 576px) {
    .portfolio-item img {
        height: 200px;
    }
    
    .portfolio-filters li {
        padding: 7px 16px;
        font-size: 12px;
    }
}

/* ================= ANIMATIONS ================= */
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

.portfolio-item {
    animation: scaleIn .5s ease-out;
}

.portfolio-item:nth-child(1) { animation-delay: .1s; }
.portfolio-item:nth-child(2) { animation-delay: .2s; }
.portfolio-item:nth-child(3) { animation-delay: .3s; }
.portfolio-item:nth-child(4) { animation-delay: .4s; }
.portfolio-item:nth-child(5) { animation-delay: .5s; }
.portfolio-item:nth-child(6) { animation-delay: .6s; }
.portfolio-item:nth-child(7) { animation-delay: .7s; }
.portfolio-item:nth-child(8) { animation-delay: .8s; }
.portfolio-item:nth-child(9) { animation-delay: .9s; }

/* ================= ISOTOPE TRANSITIONS ================= */
.isotope-container {
    transition: height .4s ease;
}

.portfolio-item.isotope-hidden {
    pointer-events: none;
    opacity: 0;
    transform: scale(.8);
}
</style>

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="current">Galeri Desa</li>
                </ol>
            </nav>
            <h1>Galeri Desa</h1>
        </div>
    </div>

    <section id="portfolio" class="portfolio section">
        <div class="container">

            <!-- FILTER -->
            <ul class="portfolio-filters isotope-filters"
                data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".kegiatan">Kegiatan</li>
                <li data-filter=".event">Event</li>
                <li data-filter=".pembangunan">Pembangunan</li>
                <li data-filter=".lain-lain">Lain-lain</li>
            </ul>

            <!-- GALERI -->
            <div class="row gy-4 isotope-container"
                 data-aos="fade-up" data-aos-delay="200">

                @forelse ($item as $row)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ strtolower(str_replace(' ', '-', $row->kategori)) }}">
                        
                        <!-- Category Badge -->
                        <div class="category-badge">{{ $row->kategori }}</div>
                        
                        <img src="{{ asset('storage/' . $row->gambar) }}"
                             class="img-fluid" 
                             alt="{{ $row->judul }}"
                             loading="lazy">

                        <div class="portfolio-info">
                            <h4>{{ $row->judul }}</h4>
                            <p>{{ $row->deskripsi }}</p>
                        </div>

                        <a href="{{ asset('storage/' . $row->gambar) }}"
                           class="glightbox preview-link"
                           data-gallery="portfolio-gallery"
                           title="{{ $row->judul }}">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="empty-state">
                            <i class="bi bi-images"></i>
                            <p>Belum ada foto di galeri</p>
                        </div>
                    </div>
                @endforelse

            </div>

        </div>
    </section>

</main>
@endsection