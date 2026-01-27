@extends('layout.app')

@section('title', 'Profil Kepala Desa')

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

/* ================= HERO SECTION ================= */
#kades-hero {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 70px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

#kades-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
    opacity: 0.5;
}

#kades-hero::after {
    content: '👤';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: .08;
}

#kades-hero h1 {
    font-weight: 800;
    font-size: 2.5rem;
    letter-spacing: .5px;
    color: #fff;
    position: relative;
    z-index: 1;
    text-shadow: 0 2px 15px rgba(0,0,0,.2);
    margin: 0;
}

#kades-hero p {
    max-width: 650px;
    margin: 15px auto 0;
    color: rgba(255,255,255,.95);
    position: relative;
    z-index: 1;
    font-size: 1.05rem;
    font-weight: 500;
}

/* ================= MAIN SECTION ================= */
#kades {
    padding: 70px 0;
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
}

/* ================= PROFILE CARD ================= */
.profile-card {
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.1);
    overflow: hidden;
    border: 1px solid var(--border-color);
    position: relative;
}

.profile-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
}

/* ================= IMAGE SECTION ================= */
.image-section {
    padding: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff9f9 100%);
    position: relative;
}

.image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(220, 38, 38, 0.2);
    max-width: 400px;
    width: 100%;
}

.image-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(220, 38, 38, 0.1) 0%, transparent 100%);
    z-index: 1;
}

.image-wrapper img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.image-wrapper:hover img {
    transform: scale(1.05);
}

.image-badge {
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    background: rgba(255,255,255,.95);
    backdrop-filter: blur(10px);
    padding: 15px 20px;
    border-radius: 12px;
    z-index: 2;
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
    text-align: center;
}

.badge-icon {
    font-size: 24px;
    margin-bottom: 5px;
}

.badge-text {
    font-size: 14px;
    font-weight: 700;
    color: var(--primary-color);
    margin: 0;
}

/* ================= CONTENT SECTION ================= */
.content-section {
    padding: 45px;
}

.profile-header {
    margin-bottom: 30px;
    padding-bottom: 25px;
    border-bottom: 2px solid var(--border-color);
    position: relative;
}

.profile-header::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100px;
    height: 2px;
    background: var(--primary-color);
}

.name-title {
    font-size: 32px;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.periode-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff9f9 100%);
    color: var(--primary-color);
    padding: 10px 20px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid var(--border-color);
    margin-bottom: 15px;
}

.periode-badge i {
    font-size: 16px;
}

.alamat-text {
    color: #64748b;
    font-size: 15px;
    margin-bottom: 0;
    display: flex;
    align-items: start;
    gap: 10px;
}

.alamat-text i {
    color: var(--primary-color);
    font-size: 18px;
    margin-top: 2px;
}

/* ================= SAMBUTAN BOX ================= */
.sambutan-box {
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff5f5 100%);
    border-radius: 16px;
    padding: 28px;
    margin: 30px 0;
    border: 2px solid var(--border-color);
    position: relative;
    overflow: hidden;
}

.sambutan-box::before {
    content: '"';
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 80px;
    color: var(--primary-color);
    opacity: 0.1;
    font-family: Georgia, serif;
}

.sambutan-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.sambutan-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: #fff;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
}

.sambutan-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
}

.sambutan-text {
    font-size: 15px;
    color: #475569;
    line-height: 1.8;
    margin: 0;
    position: relative;
    z-index: 1;
    text-align: justify;
}

/* ================= VISI MISI SECTION ================= */
.visi-misi-section {
    margin-top: 30px;
}

.section-title {
    font-size: 22px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-title i {
    color: var(--primary-color);
    font-size: 24px;
}

.visi-box, .misi-box {
    background: #fff;
    border-radius: 16px;
    padding: 25px;
    height: 100%;
    box-shadow: 0 4px 15px rgba(220, 38, 38, 0.08);
    border: 2px solid var(--border-color);
    transition: all 0.3s ease;
}

.visi-box:hover, .misi-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.15);
    border-color: var(--primary-light);
}

.box-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    padding-bottom: 12px;
    border-bottom: 2px solid var(--bg-light);
}

.box-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
}

.box-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
}

.box-content {
    font-size: 14px;
    color: #475569;
    line-height: 1.7;
    margin: 0;
    text-align: justify;
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: var(--bg-light);
    border-radius: 20px;
    border: 2px dashed var(--border-color);
}

.empty-icon {
    font-size: 64px;
    margin-bottom: 20px;
    opacity: 0.5;
}

.empty-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 10px;
}

.empty-text {
    font-size: 15px;
    color: #64748b;
    margin: 0;
}

/* ================= DECORATIVE DOTS ================= */
.decoration-dots {
    position: absolute;
    width: 150px;
    height: 150px;
    background-image: radial-gradient(circle, var(--border-color) 2px, transparent 2px);
    background-size: 20px 20px;
    opacity: 0.3;
    pointer-events: none;
}

.dots-top-right {
    top: 30px;
    right: 30px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    #kades-hero {
        padding: 60px 0;
    }
    
    #kades-hero h1 {
        font-size: 2rem;
    }
    
    #kades {
        padding: 50px 0;
    }
    
    .image-section {
        padding: 30px;
    }
    
    .image-wrapper img {
        height: 400px;
    }
    
    .content-section {
        padding: 35px 30px;
    }
    
    .name-title {
        font-size: 28px;
    }
    
    #kades-hero::after {
        font-size: 80px;
    }
}

@media (max-width: 768px) {
    #kades-hero {
        padding: 50px 0;
    }
    
    #kades-hero h1 {
        font-size: 1.75rem;
    }
    
    #kades-hero p {
        font-size: 1rem;
    }
    
    #kades {
        padding: 40px 0;
    }
    
    .image-section {
        padding: 30px 20px;
        margin-bottom: 0;
    }
    
    .image-wrapper img {
        height: 350px;
    }
    
    .content-section {
        padding: 30px 20px;
    }
    
    .name-title {
        font-size: 24px;
    }
    
    .sambutan-box {
        padding: 24px 20px;
    }
    
    .visi-box, .misi-box {
        padding: 20px;
        margin-bottom: 20px;
    }
    
    #kades-hero::after {
        display: none;
    }
    
    .decoration-dots {
        display: none;
    }
}

@media (max-width: 576px) {
    #kades-hero h1 {
        font-size: 1.5rem;
    }
    
    .profile-card {
        border-radius: 16px;
    }
    
    .image-wrapper img {
        height: 300px;
    }
    
    .name-title {
        font-size: 22px;
    }
    
    .section-title {
        font-size: 20px;
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

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
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

.profile-card {
    animation: fadeInUp 0.6s ease-out;
}
</style>

<!-- Hero Section -->
<section id="kades-hero">
    <div class="container">
        <h1 data-aos="fade-down">👤 PROFIL KEPALA DESA</h1>
        <p data-aos="fade-up">
            Mengenal lebih dekat sosok pemimpin desa kami
        </p>
    </div>
</section>

<!-- Main Section -->
<section id="kades">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        @if ($kades)

        <div class="profile-card">
            <div class="decoration-dots dots-top-right"></div>
            
            <div class="row g-0">

                <!-- IMAGE SECTION -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                    <div class="image-section">
                        <div class="image-wrapper">
                            <img
                                src="{{ $kades->foto ? asset('storage/'.$kades->foto) : asset('assets/img/default-user.png') }}"
                                alt="Foto Kepala Desa">
                            
                            <div class="image-badge">
                                <div class="badge-icon">🏛️</div>
                                <p class="badge-text">KEPALA DESA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTENT SECTION -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                    <div class="content-section">

                        <!-- Profile Header -->
                        <div class="profile-header">
                            <h2 class="name-title">
                                {{ $kades->nama }}
                            </h2>

                            @if ($kades->periode_mulai || $kades->periode_selesai)
                            <div class="periode-badge">
                                <i class="bi bi-calendar-check"></i>
                                <span>
                                    Periode: 
                                    {{ $kades->periode_mulai ? date('d F Y', strtotime($kades->periode_mulai)) : '-' }}
                                    -
                                    {{ $kades->periode_selesai ? date('d F Y', strtotime($kades->periode_selesai)) : 'Sekarang' }}
                                </span>
                            </div>
                            @endif

                            @if ($kades->alamat)
                            <p class="alamat-text">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>{{ $kades->alamat }}</span>
                            </p>
                            @endif
                        </div>

                        <!-- Sambutan -->
                        @if ($kades->sambutan)
                        <div class="sambutan-box">
                            <div class="sambutan-header">
                                <div class="sambutan-icon">💬</div>
                                <h3 class="sambutan-title">Sambutan Kepala Desa</h3>
                            </div>
                            <p class="sambutan-text">{{ $kades->sambutan }}</p>
                        </div>
                        @endif

                        <!-- Visi & Misi -->
                        @if ($kades->visi || $kades->misi)
                        <div class="visi-misi-section">
                            <h3 class="section-title">
                                <i class="bi bi-bullseye"></i>
                                Visi & Misi
                            </h3>

                            <div class="row g-3">
                                @if ($kades->visi)
                                <div class="col-md-6">
                                    <div class="visi-box">
                                        <div class="box-header">
                                            <div class="box-icon">🎯</div>
                                            <h4 class="box-title">Visi</h4>
                                        </div>
                                        <p class="box-content">{{ $kades->visi }}</p>
                                    </div>
                                </div>
                                @endif

                                @if ($kades->misi)
                                <div class="col-md-6">
                                    <div class="misi-box">
                                        <div class="box-header">
                                            <div class="box-icon">📋</div>
                                            <h4 class="box-title">Misi</h4>
                                        </div>
                                        <p class="box-content">{{ $kades->misi }}</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>

        @else
        <!-- Empty State -->
        <div class="empty-state" data-aos="zoom-in">
            <div class="empty-icon">📭</div>
            <h3 class="empty-title">Data Belum Tersedia</h3>
            <p class="empty-text">Data Kepala Desa belum ditambahkan ke dalam sistem</p>
        </div>
        @endif

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