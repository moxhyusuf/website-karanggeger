@extends('layout.app')

@section('title', 'Beranda Desa Karanggeger')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
/* ================= ROOT VARIABLES ================= */
:root {
    --primary-red: #dc2626;
    --dark-red: #991b1b;
    --light-red: #fee2e2;
    --gradient-red: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
    --dark-bg: #0f0f0f;
    --card-bg: #ffffff;
}

/* ================= HERO SECTION - PREMIUM STYLE ================= */
#hero {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    background: var(--dark-bg);
}

/* Animated Background Pattern */
#hero::before {
    content: "";
    position: absolute;
    width: 200%;
    height: 200%;
    background: 
        radial-gradient(circle at 20% 50%, rgba(220, 38, 38, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(220, 38, 38, 0.1) 0%, transparent 50%);
    animation: morphBackground 20s ease-in-out infinite;
    z-index: 1;
}

@keyframes morphBackground {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(-5%, -5%) rotate(120deg); }
    66% { transform: translate(5%, 5%) rotate(240deg); }
}

/* Background Carousel */
#heroBackground {
    position: absolute;
    inset: 0;
    z-index: 0;
}

#heroBackground .carousel-inner,
#heroBackground .carousel-item,
#heroBackground .bg-slide {
    width: 100%;
    height: 100vh;
}

.bg-slide {
    background-size: cover;
    background-position: center;
    filter: brightness(0.4) saturate(1.2);
}

#heroBackground .carousel-item.active .bg-slide {
    animation: zoomEffect 12s ease-out forwards;
}

@keyframes zoomEffect {
    from { transform: scale(1) rotate(0deg); }
    to { transform: scale(1.15) rotate(2deg); }
}

/* Dynamic Overlay */
#hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: 
        linear-gradient(135deg, 
            rgba(255, 255, 255, 0.85) 0%, 
            rgba(235, 230, 230, 0.4) 50%,
            rgba(255, 255, 255, 0.9) 100%);
    z-index: 2;
    mix-blend-mode: multiply;
}

/* Hero Content */
.hero-content {
    position: relative;
    z-index: 3;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
}

.hero-text-wrapper {
    max-width: 1100px;
    text-align: center;
}

/* Animated Badge */
.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 24px;
    background: rgba(220, 38, 38, 0.1);
    border: 1px solid rgba(220, 38, 38, 0.3);
    border-radius: 50px;
    color: #fcf9f9;
    font-size: 0.9rem;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
    animation: fadeInDown 1s ease;
}

.hero-badge .pulse-dot {
    width: 8px;
    height: 8px;
    background: #dc2626;
    border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.2); }
}

/* Hero Typography - Modern & Bold */
#heroJudul1 {
    font-size: 3.5rem;
    font-weight: 900;
    background: linear-gradient(135deg, #ffffff 0%, #fcfcfc 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -1px;
    line-height: 1.2;
    margin-bottom: 12px;
    animation: fadeInUp 1s ease 0.2s both;
}

#heroJudul2 {
    font-size: 3.5rem;
    font-weight: 900;
    background: var(--gradient-red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -1px;
    line-height: 1.2;
    margin-bottom: 25px;
    animation: fadeInUp 1s ease 0.4s both;
    position: relative;
}

#heroJudul2::after {
    content: "";
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: var(--gradient-red);
    border-radius: 2px;
}

#heroSubtitle {
    font-size: 1.1rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
    max-width: 650px;
    margin: 0 auto 35px;
    font-weight: 400;
    animation: fadeInUp 1s ease 0.6s both;
}

/* Hero Buttons - Modern Style */
.hero-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    animation: fadeInUp 1s ease 0.8s both;
}

.btn-hero-primary {
    padding: 14px 35px;
    background: var(--gradient-red);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.95rem;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    position: relative;
    overflow: hidden;
}

.btn-hero-primary::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.btn-hero-primary:hover::before {
    left: 100%;
}

.btn-hero-primary:hover {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 12px 35px rgba(220, 38, 38, 0.4);
    color: #fff;
}

.btn-hero-outline {
    padding: 14px 35px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: #fff;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.95rem;
    transition: all 0.4s ease;
    backdrop-filter: blur(10px);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-hero-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: var(--primary-red);
    color: var(--primary-red);
    transform: translateY(-2px);
}

/* Scroll Indicator - Modern */
.scroll-indicator {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.scroll-indicator span {
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.scroll-indicator .scroll-line {
    width: 2px;
    height: 40px;
    background: linear-gradient(to bottom, var(--primary-red), transparent);
    animation: scrollMove 2s ease-in-out infinite;
}

@keyframes scrollMove {
    0%, 100% { opacity: 0; transform: translateY(-10px); }
    50% { opacity: 1; transform: translateY(10px); }
}

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ================= SECTION STYLES - PREMIUM ================= */
.section {
    padding: 70px 0;
    position: relative;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-badge {
    display: inline-block;
    padding: 6px 18px;
    background: var(--light-red);
    color: var(--primary-red);
    font-weight: 700;
    font-size: 0.75rem;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border-radius: 25px;
    margin-bottom: 15px;
}

.section-title {
    font-size: 2.2rem;
    font-weight: 900;
    color: #1f2937;
    margin-bottom: 15px;
    letter-spacing: -0.5px;
}

.section-description {
    color: #64748b;
    font-size: 1rem;
    max-width: 650px;
    margin: 0 auto;
    line-height: 1.7;
}

/* ================= SEJARAH SECTION - STORYTELLING STYLE ================= */
#sejarah {
    background: linear-gradient(to bottom, #ffffff 0%, #fef2f2 100%);
    position: relative;
    overflow: hidden;
}

#sejarah::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.05) 0%, transparent 70%);
    z-index: 0;
}

.sejarah-container {
    position: relative;
    z-index: 1;
}

.sejarah-card {
    background: #fff;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(220, 38, 38, 0.1);
    position: relative;
    overflow: hidden;
}

.sejarah-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: var(--gradient-red);
}

.sejarah-card .number {
    position: absolute;
    top: 15px;
    right: 25px;
    font-size: 5rem;
    font-weight: 900;
    color: rgba(220, 38, 38, 0.05);
    line-height: 1;
}

.sejarah-card h3 {
    font-size: 1.8rem;
    font-weight: 900;
    color: #1f2937;
    margin-bottom: 25px;
    letter-spacing: -0.5px;
}

.sejarah-card h3 .highlight {
    background: var(--gradient-red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.sejarah-quote {
    font-size: 1.1rem;
    font-style: italic;
    color: var(--primary-red);
    margin-bottom: 20px;
    padding-left: 20px;
    border-left: 3px solid var(--primary-red);
    font-weight: 600;
}

.sejarah-text {
    font-size: 0.95rem;
    line-height: 1.8;
    color: #4b5563;
    margin-bottom: 25px;
}

.read-more-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--primary-red);
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.read-more-link:hover {
    gap: 12px;
    color: var(--dark-red);
}

.sejarah-img-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    height: 500px;
}

.sejarah-img-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(220, 38, 38, 0.3) 0%, transparent 60%);
    z-index: 1;
    opacity: 0;
    transition: opacity 0.5s ease;
}

.sejarah-img-wrapper:hover::before {
    opacity: 1;
}

.sejarah-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s ease;
}

.sejarah-img-wrapper:hover img {
    transform: scale(1.08);
}

/* ================= KEPALA DESA SECTION - PREMIUM PROFILE ================= */
#kades {
    background: #fff;
    position: relative;
}

.kades-wrapper {
    background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
    border-radius: 30px;
    padding: 50px;
    box-shadow: 0 20px 70px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.kades-wrapper::before {
    content: "";
    position: absolute;
    top: -80px;
    right: -80px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.08) 0%, transparent 70%);
}

.kades-img-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(220, 38, 38, 0.25);
    height: 450px;
}

.kades-img-wrapper::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50%;
    background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 100%);
}

.kades-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.kades-badge {
    display: inline-block;
    padding: 10px 24px;
    background: var(--gradient-red);
    color: #fff;
    border-radius: 40px;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 15px;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
}

.kades-name {
    font-size: 2rem;
    font-weight: 900;
    color: #1f2937;
    margin-bottom: 20px;
    letter-spacing: -0.5px;
}

.kades-profile {
    font-size: 0.95rem;
    line-height: 1.8;
    color: #4b5563;
    margin-bottom: 30px;
}

.sambutan-box {
    background: linear-gradient(135deg, rgba(220, 38, 38, 0.05) 0%, rgba(220, 38, 38, 0.02) 100%);
    border-radius: 16px;
    padding: 30px;
    border: 2px solid rgba(220, 38, 38, 0.1);
    position: relative;
}

.sambutan-box::before {
    content: '"';
    position: absolute;
    top: 15px;
    left: 20px;
    font-size: 3.5rem;
    color: rgba(220, 38, 38, 0.1);
    font-family: Georgia, serif;
}

.sambutan-box h5 {
    font-weight: 800;
    color: var(--dark-red);
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.1rem;
}

.sambutan-text {
    font-size: 0.95rem;
    line-height: 1.8;
    color: #4b5563;
    font-style: italic;
}

/* ================= BERITA SECTION - MAGAZINE STYLE ================= */
#berita {
    background: linear-gradient(to bottom, #fef2f2 0%, #ffffff 100%);
}

.berita-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.berita-header h2 {
    font-size: 2.2rem;
    font-weight: 900;
    color: #1f2937;
    margin: 0;
}

.btn-all-news {
    padding: 12px 28px;
    background: var(--gradient-red);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
}

.btn-all-news:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(220, 38, 38, 0.4);
    color: #fff;
}

.berita-main-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    height: 100%;
}

.berita-main-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.berita-main-img {
    position: relative;
    height: 320px;
    overflow: hidden;
}

.berita-main-img::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.4) 0%, transparent 50%);
}

.berita-main-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s ease;
}

.berita-main-card:hover .berita-main-img img {
    transform: scale(1.08) rotate(1deg);
}

.berita-category {
    position: absolute;
    top: 15px;
    left: 15px;
    padding: 6px 16px;
    background: var(--gradient-red);
    color: #fff;
    border-radius: 16px;
    font-size: 0.75rem;
    font-weight: 700;
    z-index: 1;
}

.berita-main-body {
    padding: 30px;
}

.berita-date {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--primary-red);
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 12px;
}

.berita-main-title {
    font-size: 1.4rem;
    font-weight: 800;
    color: #1f2937;
    margin-bottom: 12px;
    line-height: 1.4;
    letter-spacing: -0.3px;
}

.berita-main-excerpt {
    font-size: 0.95rem;
    line-height: 1.7;
    color: #64748b;
    margin-bottom: 20px;
}

.btn-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 26px;
    background: var(--gradient-red);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-read-more:hover {
    gap: 12px;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.4);
    color: #fff;
}

/* Side Berita Cards */
.berita-side-item {
    background: #fff;
    border-radius: 16px;
    padding: 16px;
    display: flex;
    gap: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    transition: all 0.4s ease;
    text-decoration: none;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.berita-side-item:hover {
    transform: translateX(8px);
    box-shadow: 0 12px 30px rgba(220, 38, 38, 0.15);
    border-color: var(--primary-red);
}

.berita-side-img {
    width: 100px;
    height: 75px;
    border-radius: 12px;
    overflow: hidden;
    flex-shrink: 0;
}

.berita-side-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.berita-side-item:hover .berita-side-img img {
    transform: scale(1.1);
}

.berita-side-content h6 {
    font-size: 0.9rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 8px;
    line-height: 1.4;
}

.berita-side-date {
    color: var(--primary-red);
    font-size: 0.8rem;
    font-weight: 600;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1024px) {
    #heroJudul1, #heroJudul2 {
        font-size: 2.8rem;
    }
    
    .kades-wrapper {
        padding: 40px;
    }
}

@media (max-width: 768px) {
    #heroJudul1, #heroJudul2 {
        font-size: 2rem;
    }
    
    #heroSubtitle {
        font-size: 1rem;
    }
    
    .section {
        padding: 50px 0;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .sejarah-card, .kades-wrapper {
        padding: 25px;
    }
    
    .sejarah-card .number {
        font-size: 3.5rem;
    }
    
    .sejarah-card h3 {
        font-size: 1.5rem;
    }
    
    .kades-name {
        font-size: 1.6rem;
    }
    
    .berita-main-img {
        height: 220px;
    }
    
    .berita-header h2 {
        font-size: 1.8rem;
    }
    
    .hero-buttons {
        flex-direction: column;
    }
    
    .btn-hero-primary, .btn-hero-outline {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .berita-header {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .sejarah-img-wrapper {
        height: 350px;
    }
    
    .kades-img-wrapper {
        height: 350px;
    }
    
    .sejarah-card, .kades-wrapper {
        padding: 20px;
    }
}
</style>

{{-- ================= HERO SECTION ================= --}}
@php
    $heroAktif = $heroSlides->first();
@endphp

<section id="hero">
    <!-- Background Slider -->
    <div id="heroBackground"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel"
         data-bs-interval="6000">
        <div class="carousel-inner">
            @foreach ($heroSlides as $key => $slide)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}"
                     data-judul1="{{ $slide->judul_1 }}"
                     data-judul2="{{ $slide->judul_2 }}"
                     data-subtitle="{{ $slide->subtitle }}">
                    <div class="bg-slide"
                         style="background-image:url('{{ asset('storage/'.$slide->gambar) }}')">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">
        <div class="hero-text-wrapper">
            @if($heroAktif)
                <div class="hero-badge">
                    <span class="pulse-dot"></span>
                    WEBSITE RESMI
                </div>
                <h1 id="heroJudul1">{{ $heroAktif->judul_1 }}</h1>
                <h1 id="heroJudul2">{{ $heroAktif->judul_2 }}</h1>
                <p id="heroSubtitle">{{ $heroAktif->subtitle }}</p>
            @endif

            <div class="hero-buttons">
                <a href="#sejarah" class="btn-hero-primary">
                    <i class="bi bi-compass"></i>
                    Jelajahi Desa
                </a>
                <a href="https://youtu.be/P7Vt3pb8fYI?si=LkfVCq3ZsF0s4l0z" target="_blank" class="btn-hero-outline">
                    <i class="bi bi-play-circle"></i>
                    Tonton Profil
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

{{-- ================= SEJARAH SECTION ================= --}}
<section id="sejarah" class="section">
    <div class="container sejarah-container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Tentang Kami</span>
            <h2 class="section-title">Sejarah & Asal Usul</h2>
            <p class="section-description">Mengenal lebih dekat perjalanan dan cerita di balik Desa Karanggeger</p>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="sejarah-card">
                    <span class="number">01</span>
                    <h3><span class="highlight">Sejarah</span> Desa Karanggeger</h3>
                    <div class="sejarah-quote">
                        "Dari masa ke masa, sebuah warisan yang terus dijaga"
                    </div>
                    @if($sejarah)
                        <p class="sejarah-text">
                            {{ \Illuminate\Support\Str::limit(strip_tags($sejarah->sejarah), 400) }}
                        </p>
                        <a href="{{ route('sejarah') }}" class="read-more-link">
                            Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    @else
                        <p class="sejarah-text">Data sejarah belum tersedia.</p>
                    @endif
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                @if($sejarah && $sejarah->img)
                    <div class="sejarah-img-wrapper">
                        <img src="{{ asset('storage/'.$sejarah->img) }}" alt="Sejarah Desa Karanggeger">
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ================= KEPALA DESA SECTION ================= --}}
<section id="kades" class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-badge">Pimpinan</span>
            <h2 class="section-title">Kepala Desa</h2>
            <p class="section-description">Pemimpin yang berdedikasi untuk kemajuan Desa Karanggeger</p>
        </div>

        @if($kepdes)
        <div class="kades-wrapper">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="kades-img-wrapper">
                        <img src="{{ asset('storage/'.$kepdes->foto) }}" alt="Kepala Desa Karanggeger">
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                    <span class="kades-badge">Kepala Desa</span>
                    <h2 class="kades-name">{{ $kepdes->nama }}</h2>
                    <p class="kades-profile">{!! nl2br(e($kepdes->profil)) !!}</p>

                    @if(!empty($kepdes->sambutan))
                    <div class="sambutan-box">
                        <h5>
                            <i class="bi bi-chat-quote-fill"></i>
                            Sambutan Kepala Desa
                        </h5>
                        <p class="sambutan-text">{!! nl2br(e($kepdes->sambutan)) !!}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @else
            <p class="text-center text-muted">Data kepala desa belum tersedia.</p>
        @endif
    </div>
</section>

{{-- ================= BERITA SECTION ================= --}}
<section id="berita" class="section">
    <div class="container">
        <div class="berita-header" data-aos="fade-up">
            <div>
                <span class="section-badge">Informasi</span>
                <h2>Berita Terkini</h2>
            </div>
            <a href="{{ route('berita') }}" class="btn-all-news">
                Semua Berita
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>

        <div class="row g-4">
            @if($berita->count() > 0)
            <!-- Main Berita -->
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="berita-main-card">
                    <div class="berita-main-img">
                        <div class="berita-category">Berita Utama</div>
                        <img src="{{ asset('storage/'.$berita[0]->image) }}" alt="{{ $berita[0]->judul }}">
                    </div>
                    <div class="berita-main-body">
                        <div class="berita-date">
                            <i class="bi bi-calendar3"></i>
                            {{ \Carbon\Carbon::parse($berita[0]->tgl_berita)->format('d M Y') }}
                        </div>
                        <h3 class="berita-main-title">{{ $berita[0]->judul }}</h3>
                        <p class="berita-main-excerpt">
                            {{ Str::limit(strip_tags($berita[0]->isi), 180) }}
                        </p>
                        <a href="{{ route('berita.detail', $berita[0]->id_berita) }}" class="btn-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Side Berita -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    @foreach($berita->skip(1)->take(3) as $index => $item)
                    <a href="{{ route('berita.detail', $item->id_berita) }}" 
                       class="berita-side-item"
                       data-aos="fade-up" 
                       data-aos-delay="{{ ($index + 2) * 100 }}">
                        <div class="berita-side-img">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->judul }}">
                        </div>
                        <div class="berita-side-content">
                            <h6>{{ Str::limit($item->judul, 60) }}</h6>
                            <div class="berita-side-date">
                                <i class="bi bi-clock me-1"></i>
                                {{ \Carbon\Carbon::parse($item->tgl_berita)->format('d M Y') }}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @else
                <div class="col-12">
                    <p class="text-center text-muted">Belum ada berita tersedia.</p>
                </div>
            @endif
        </div>
    </div>
</section>

{{-- ================= SCRIPTS ================= --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
      duration: 1000,
      easing: 'ease-out-cubic',
      once: true,
      offset: 50
  });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('heroBackground');
    const j1  = document.getElementById('heroJudul1');
    const j2  = document.getElementById('heroJudul2');
    const sub = document.getElementById('heroSubtitle');

    if (carousel && j1 && j2 && sub) {
        // Saat slide mulai pindah
        carousel.addEventListener('slide.bs.carousel', () => {
            j1.style.opacity = '0';
            j2.style.opacity = '0';
            sub.style.opacity = '0';
        });

        // Setelah slide aktif
        carousel.addEventListener('slid.bs.carousel', e => {
            const slide = e.relatedTarget;
            
            j1.textContent  = slide.dataset.judul1 || '';
            j2.textContent  = slide.dataset.judul2 || '';
            sub.textContent = slide.dataset.subtitle || '';

            setTimeout(() => {
                j1.style.opacity = '1';
                j2.style.opacity = '1';
                sub.style.opacity = '1';
            }, 150);
        });
    }
});
</script>

@endsection