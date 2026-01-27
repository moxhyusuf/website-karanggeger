@extends('layout.app')

@section('title', 'Layanan Desa Laweyan')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
:root {
    --primary-color: #dc2626;
    --primary-dark: #b91c1c;
    --primary-light: #ef4444;
    --accent-color: #f87171;
    --text-dark: #7f1d1d;
    --text-gray: #991b1b;
    --bg-light: #fef2f2;
    --bg-white: #ffffff;
    --border-color: #fecaca;
}

/* ================= HERO LAYANAN ================= */
#layanan-hero {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 85px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

#layanan-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
    opacity: 0.5;
}

#layanan-hero::after {
    content: '🏢';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: .08;
}

#layanan-hero h1 {
    font-weight: 800;
    font-size: 2.8rem;
    letter-spacing: 1px;
    color: #fff;
    position: relative;
    z-index: 1;
    margin-bottom: 15px;
    text-shadow: 0 2px 15px rgba(0,0,0,.2);
}

#layanan-hero p {
    max-width: 700px;
    margin: 0 auto;
    color: rgba(255,255,255,.95);
    position: relative;
    z-index: 1;
    font-size: 1.1rem;
    line-height: 1.7;
    font-weight: 500;
}

/* ================= STATS SECTION ================= */
.stats-section {
    background: linear-gradient(135deg, #fff 0%, var(--bg-light) 100%);
    margin-top: -60px;
    border-radius: 20px;
    padding: 40px 30px;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.15);
    position: relative;
    z-index: 10;
    border: 1px solid var(--border-color);
}

.stat-box {
    text-align: center;
    padding: 20px 15px;
    position: relative;
}

.stat-box::after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 2px;
    height: 60%;
    background: linear-gradient(to bottom, transparent, var(--primary-color), transparent);
}

.stat-box:last-child::after {
    display: none;
}

.stat-number {
    font-size: 2.8rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 10px;
    animation: countUp 1s ease-out;
}

@keyframes countUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.stat-label {
    color: #64748b;
    font-size: 0.95rem;
    font-weight: 600;
}

/* ================= SECTION TITLE ================= */
.section-title-wrapper {
    text-align: center;
    margin-bottom: 55px;
}

.section-subtitle {
    color: var(--primary-color);
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 12px;
    display: inline-block;
    padding: 6px 18px;
    background: var(--bg-light);
    border-radius: 20px;
}

.section-title {
    font-size: 2.3rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    border-radius: 2px;
}

.section-description {
    color: #64748b;
    font-size: 1.05rem;
    max-width: 600px;
    margin: 20px auto 0;
    line-height: 1.6;
}

/* ================= CARD LAYANAN ================= */
.layanan-card {
    background: #fff;
    border-radius: 20px;
    padding: 40px 32px;
    height: 100%;
    text-align: center;
    border: 2px solid var(--border-color);
    transition: all .4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.layanan-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
    transform: scaleX(0);
    transition: transform .4s ease;
}

.layanan-card:hover::before {
    transform: scaleX(1);
}

.layanan-card::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.08), transparent);
    transform: translate(-50%, -50%);
    transition: width .6s ease, height .6s ease;
}

.layanan-card:hover::after {
    width: 500px;
    height: 500px;
}

.layanan-card:hover {
    border-color: var(--primary-color);
    transform: translateY(-12px);
    box-shadow: 0 20px 50px rgba(220, 38, 38, 0.25);
}

/* ================= ICON WRAPPER ================= */
.layanan-icon-wrapper {
    position: relative;
    margin: 0 auto 28px;
    width: 100px;
    height: 100px;
}

.icon-bg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, var(--bg-light), #fee2e2);
    border-radius: 50%;
    opacity: 0;
    transition: all .4s ease;
}

.layanan-card:hover .icon-bg {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1.15);
}

.layanan-icon {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.35);
    transition: all .4s ease;
    z-index: 2;
}

.layanan-card:hover .layanan-icon {
    transform: scale(1.15) rotate(10deg);
    box-shadow: 0 12px 35px rgba(220, 38, 38, 0.5);
}

.layanan-icon i {
    font-size: 44px;
    color: #fff;
    transition: all .3s ease;
}

.layanan-card:hover .layanan-icon i {
    transform: scale(1.1);
}

/* ================= CONTENT ================= */
.layanan-card h5 {
    font-weight: 700;
    font-size: 1.35rem;
    color: var(--text-dark);
    margin-bottom: 15px;
    position: relative;
    z-index: 3;
    transition: color .3s ease;
}

.layanan-card:hover h5 {
    color: var(--primary-color);
}

.layanan-card p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 25px;
    position: relative;
    z-index: 3;
    min-height: 85px;
}

/* ================= BUTTON ================= */
.btn-layanan {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: #fff;
    border: none;
    border-radius: 50px;
    font-weight: 700;
    font-size: 14px;
    transition: all .3s ease;
    box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
    position: relative;
    z-index: 3;
    text-decoration: none;
}

.btn-layanan:hover {
    transform: translateX(6px);
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.5);
    background: linear-gradient(135deg, var(--primary-dark), #991b1b);
    color: #fff;
}

.btn-layanan i {
    transition: transform .3s ease;
    font-size: 16px;
}

.btn-layanan:hover i {
    transform: translateX(5px);
}

/* ================= CATEGORY BADGE ================= */
.category-badge {
    position: absolute;
    top: 18px;
    right: 18px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: #fff;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    z-index: 3;
    box-shadow: 0 4px 15px rgba(220, 38, 38, 0.4);
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* ================= FLOATING ELEMENTS ================= */
.layanan-card .floating-icon {
    position: absolute;
    opacity: 0.05;
    font-size: 120px;
    color: var(--primary-color);
    bottom: -20px;
    right: -20px;
    transform: rotate(-15deg);
    transition: all .5s ease;
    z-index: 1;
}

.layanan-card:hover .floating-icon {
    transform: rotate(-15deg) scale(1.2);
    opacity: 0.08;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    #layanan-hero {
        padding: 70px 0;
    }
    
    #layanan-hero h1 {
        font-size: 2.3rem;
    }
    
    .stats-section {
        margin-top: -50px;
        padding: 35px 25px;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    #layanan-hero::after {
        font-size: 80px;
        right: 5%;
    }
}

@media (max-width: 768px) {
    #layanan-hero {
        padding: 60px 0;
    }
    
    #layanan-hero h1 {
        font-size: 1.9rem;
    }
    
    #layanan-hero p {
        font-size: 1rem;
    }
    
    .stats-section {
        margin-top: -40px;
        padding: 30px 20px;
    }
    
    .stat-number {
        font-size: 2.3rem;
    }
    
    .stat-box::after {
        display: none;
    }
    
    .stat-box {
        margin-bottom: 15px;
    }
    
    .stat-box:last-child {
        margin-bottom: 0;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .section-description {
        font-size: 1rem;
    }
    
    .layanan-card {
        padding: 35px 28px;
    }
    
    .layanan-card p {
        min-height: auto;
    }
    
    #layanan-hero::after {
        display: none;
    }
}

@media (max-width: 576px) {
    #layanan-hero h1 {
        font-size: 1.6rem;
        letter-spacing: 0.5px;
    }
    
    .section-title {
        font-size: 1.6rem;
    }
    
    .layanan-icon-wrapper {
        width: 90px;
        height: 90px;
    }
    
    .layanan-icon {
        width: 90px;
        height: 90px;
    }
    
    .layanan-icon i {
        font-size: 40px;
    }
    
    .icon-bg {
        width: 110px;
        height: 110px;
    }
    
    .btn-layanan {
        width: 100%;
        justify-content: center;
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
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes slideInFromRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.layanan-card {
    animation: scaleIn .6s ease-out;
}

/* ================= SHINE EFFECT ================= */
.layanan-card .shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,.3), transparent);
    transition: left .5s ease;
}

.layanan-card:hover .shine {
    left: 100%;
}
</style>

<!-- Hero Section -->
<section id="layanan-hero">
    <div class="container">
        <h1 data-aos="fade-down">🏢 PELAYANAN DESA LAWEYAN</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Akses mudah dan cepat untuk berbagai layanan administrasi desa yang tersedia untuk masyarakat
        </p>
    </div>
</section>

<!-- Stats Section -->
<div class="container" style="margin-top: -40px;">
    <div class="stats-section" data-aos="fade-up">
        <div class="row">
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Jenis Layanan</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Akses Online</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Pengguna Aktif</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Section -->
<section class="section py-5" style="background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);">
    <div class="container">

        <!-- Section Title -->
        <div class="section-title-wrapper" data-aos="fade-up">
            <div class="section-subtitle">Layanan Kami</div>
            <h2 class="section-title">Pilihan Layanan Tersedia</h2>
            <p class="section-description">
                Berbagai layanan administrasi desa yang dapat Anda akses dengan mudah
            </p>
        </div>

        <div class="row g-4">

            <!-- NON KEPENDUDUKAN -->
            <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                <div class="layanan-card">
                    <span class="category-badge">Populer</span>
                    <div class="shine"></div>
                    
                    <div class="layanan-icon-wrapper">
                        <div class="icon-bg"></div>
                        <div class="layanan-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                    </div>
                    
                    <h5>Non Kependudukan</h5>
                    <p>
                        Surat keterangan usaha, izin kegiatan, dan layanan administrasi lainnya yang mendukung kegiatan masyarakat
                    </p>
                    
                    <a href="#" class="btn-layanan">
                        Lihat Layanan
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    
                    <i class="bi bi-file-earmark-text-fill floating-icon"></i>
                </div>
            </div>

            <!-- KEPENDUDUKAN -->
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="150">
                <div class="layanan-card">
                    <span class="category-badge">Terbaru</span>
                    <div class="shine"></div>
                    
                    <div class="layanan-icon-wrapper">
                        <div class="icon-bg"></div>
                        <div class="layanan-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                    
                    <h5>Kependudukan</h5>
                    <p>
                        Layanan KTP, KK, akta kelahiran, surat pindah, dan berbagai dokumen kependudukan lainnya
                    </p>
                    
                    <a href="#" class="btn-layanan">
                        Lihat Layanan
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    
                    <i class="bi bi-people-fill floating-icon"></i>
                </div>
            </div>

            <!-- SOSIAL -->
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="layanan-card">
                    <span class="category-badge">Aktif</span>
                    <div class="shine"></div>
                    
                    <div class="layanan-icon-wrapper">
                        <div class="icon-bg"></div>
                        <div class="layanan-icon">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                    </div>
                    
                    <h5>Sosial & Kemasyarakatan</h5>
                    <p>
                        Bantuan sosial, program kemasyarakatan, dan informasi kegiatan warga desa
                    </p>
                    
                    <a href="#" class="btn-layanan">
                        Lihat Layanan
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    
                    <i class="bi bi-heart-pulse-fill floating-icon"></i>
                </div>
            </div>

        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>

@endsection