@extends('layout.app')

@section('title', 'Geografis Desa')

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
    --success-color: #16a34a;
    --warning-color: #ea580c;
}

/* ================= HERO SECTION ================= */
#geografis-hero {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 70px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

#geografis-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><path d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/></g></g></svg>');
}

#geografis-hero::after {
    content: '🌍';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: .08;
}

#geografis-hero h1 {
    font-weight: 800;
    font-size: 2.5rem;
    letter-spacing: .5px;
    color: #fff;
    position: relative;
    z-index: 1;
    text-shadow: 0 2px 15px rgba(0,0,0,.2);
    margin: 0;
}

#geografis-hero p {
    max-width: 650px;
    margin: 15px auto 0;
    color: rgba(255,255,255,.95);
    position: relative;
    z-index: 1;
    font-size: 1.05rem;
    font-weight: 500;
}

/* ================= STATS CARDS ================= */
.stats-section {
    margin-top: -50px;
    position: relative;
    z-index: 10;
    margin-bottom: 60px;
}

.stat-card {
    background: #fff;
    border-radius: 20px;
    padding: 30px 25px;
    text-align: center;
    box-shadow: 0 10px 35px rgba(220, 38, 38, 0.12);
    transition: all .3s ease;
    height: 100%;
    border: 2px solid var(--border-color);
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
}

.stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(220, 38, 38, 0.2);
    border-color: var(--primary-light);
}

.stat-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 18px;
    font-size: 32px;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
    transition: transform .3s ease;
}

.stat-card:hover .stat-icon {
    transform: scale(1.1) rotate(5deg);
}

.stat-value {
    font-size: 32px;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 8px;
    line-height: 1;
}

.stat-label {
    font-size: 14px;
    color: #64748b;
    font-weight: 600;
    margin: 0;
}

/* ================= MAIN CONTENT ================= */
#geografis-content {
    padding: 70px 0;
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 50%, var(--bg-light) 100%);
}

/* ================= DESCRIPTION CARD ================= */
.description-card {
    background: #fff;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.1);
    border: 2px solid var(--border-color);
    position: relative;
    overflow: hidden;
    height: 100%;
}

.description-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
}

.description-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.description-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
}

.description-title {
    font-size: 26px;
    font-weight: 800;
    color: var(--text-dark);
    margin: 0;
}

.description-text {
    font-size: 15px;
    line-height: 1.9;
    color: #475569;
    text-align: justify;
    margin: 0;
}

.highlight-box {
    display: inline-block;
    padding: 8px 16px;
    background: linear-gradient(135deg, var(--bg-light), #fff5f5);
    border-radius: 10px;
    border: 1px solid var(--border-color);
    margin: 0 4px;
}

.text-area-sawah {
    color: var(--success-color);
    font-weight: 700;
}

.text-area-kering {
    color: var(--warning-color);
    font-weight: 700;
}

/* ================= MAP CARD ================= */
.map-card {
    background: #fff;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.1);
    border: 2px solid var(--border-color);
    position: relative;
    height: 100%;
}

.map-header {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    padding: 20px 30px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.map-header-icon {
    font-size: 24px;
}

.map-header-title {
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin: 0;
}

.map-wrapper {
    position: relative;
    padding-bottom: 75%;
    height: 0;
    overflow: hidden;
}

.map-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

.map-footer {
    padding: 15px 25px;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 13px;
    color: var(--text-gray);
    font-weight: 600;
}

.map-footer i {
    color: var(--primary-color);
}

/* ================= BOUNDARIES SECTION ================= */
.boundaries-section {
    margin-top: 60px;
}

.section-header {
    text-align: center;
    margin-bottom: 45px;
}

.section-badge {
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

.section-title {
    font-size: 32px;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 12px;
}

.section-subtitle {
    font-size: 15px;
    color: #64748b;
    margin: 0;
}

/* ================= BOUNDARY CARDS ================= */
.boundary-card {
    background: #fff;
    border-radius: 20px;
    padding: 30px 25px;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.1);
    border: 2px solid var(--border-color);
    transition: all .3s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.boundary-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(180deg, var(--primary-color), var(--primary-dark));
}

.boundary-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(220, 38, 38, 0.2);
    border-color: var(--primary-light);
}

.boundary-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.boundary-icon {
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    box-shadow: 0 6px 18px rgba(220, 38, 38, 0.3);
    transition: transform .3s ease;
}

.boundary-card:hover .boundary-icon {
    transform: rotate(10deg) scale(1.1);
}

.boundary-direction {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
}

.boundary-location {
    font-size: 15px;
    color: #475569;
    line-height: 1.6;
    margin: 0;
    font-weight: 500;
}

/* ================= CLIMATE INFO SECTION ================= */
.climate-section {
    margin-top: 60px;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff5f5 100%);
    border-radius: 24px;
    padding: 40px;
    border: 2px solid var(--border-color);
    position: relative;
    overflow: hidden;
}

.climate-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
}

.climate-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
}

.climate-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
}

.climate-title {
    font-size: 24px;
    font-weight: 800;
    color: var(--text-dark);
    margin: 0;
}

.climate-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.climate-info-item {
    background: #fff;
    padding: 20px;
    border-radius: 16px;
    border: 1px solid var(--border-color);
    display: flex;
    align-items: center;
    gap: 15px;
}

.climate-item-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary-light), var(--accent-color));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
}

.climate-item-content h6 {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 5px;
    font-weight: 600;
}

.climate-item-content p {
    font-size: 16px;
    color: var(--text-dark);
    margin: 0;
    font-weight: 700;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    #geografis-hero {
        padding: 60px 0;
    }
    
    #geografis-hero h1 {
        font-size: 2rem;
    }
    
    .stats-section {
        margin-top: -30px;
    }
    
    .section-title {
        font-size: 28px;
    }
    
    .description-card,
    .climate-section {
        padding: 30px 25px;
    }
    
    #geografis-hero::after {
        font-size: 80px;
    }
}

@media (max-width: 768px) {
    #geografis-hero {
        padding: 50px 0;
    }
    
    #geografis-hero h1 {
        font-size: 1.75rem;
    }
    
    #geografis-hero p {
        font-size: 1rem;
    }
    
    #geografis-content {
        padding: 50px 0;
    }
    
    .stat-card {
        padding: 25px 20px;
        margin-bottom: 20px;
    }
    
    .section-title {
        font-size: 24px;
    }
    
    .description-card {
        margin-bottom: 30px;
    }
    
    .boundaries-section,
    .climate-section {
        margin-top: 40px;
    }
    
    .boundary-card {
        margin-bottom: 20px;
    }
    
    #geografis-hero::after {
        display: none;
    }
}

@media (max-width: 576px) {
    #geografis-hero h1 {
        font-size: 1.5rem;
    }
    
    .stat-value {
        font-size: 28px;
    }
    
    .description-card,
    .climate-section {
        padding: 25px 20px;
        border-radius: 16px;
    }
    
    .map-card {
        border-radius: 16px;
    }
    
    .climate-info-grid {
        grid-template-columns: 1fr;
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

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

.stat-icon {
    animation: pulse 2s ease-in-out infinite;
}

.stat-card:nth-child(2) .stat-icon {
    animation-delay: .3s;
}

.stat-card:nth-child(3) .stat-icon {
    animation-delay: .6s;
}

/* ================= DECORATIVE ELEMENTS ================= */
.decoration-circle {
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(220, 38, 38, 0.05), transparent);
    pointer-events: none;
}

.circle-top-right {
    top: -100px;
    right: -100px;
}

.circle-bottom-left {
    bottom: -100px;
    left: -100px;
}
</style>

<!-- Hero Section -->
<section id="geografis-hero">
    <div class="container">
        <h1 data-aos="fade-down">🌍 GEOGRAFIS DESA KARANGGEGER</h1>
        <p data-aos="fade-up">
            Mengenal kondisi geografis dan batas wilayah desa kami
        </p>
    </div>
</section>

<!-- Stats Cards -->
<div class="container stats-section">
    <div class="row g-4" data-aos="fade-up">
        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">📏</div>
                <div class="stat-value">378.345</div>
                <div class="stat-label">Luas Total (Ha)</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">🌾</div>
                <div class="stat-value">222.211</div>
                <div class="stat-label">Tanah Sawah (Ha)</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">🌳</div>
                <div class="stat-value">156.134</div>
                <div class="stat-label">Tanah Kering (Ha)</div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<section id="geografis-content">
    <div class="container">

        <!-- Description + Map -->
        <div class="row g-4 mb-5">
            
            <!-- Description Card -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="description-card">
                    <div class="description-header">
                        <div class="description-icon">📍</div>
                        <h3 class="description-title">Tentang Desa Kami</h3>
                    </div>
                    <p class="description-text">
                        Karanggeger merupakan salah satu desa yang berada di wilayah kecamatan Pajarakan, berlokasi 
                        <span class="highlight-box">6 km</span> di arah barat kota kabupaten Probolinggo. 
                        Memiliki luas wilayah <span class="highlight-box"><strong>378.345 Ha</strong></span> yang terdiri dari 
                        <span class="text-area-sawah">222.211 Ha tanah sawah 🌾</span> dan 
                        <span class="text-area-kering">156.134 Ha tanah kering 🌳</span>.
                    </p>
                </div>
            </div>

            <!-- Map Card -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="map-card">
                    <div class="map-header">
                        <span class="map-header-icon">🗺️</span>
                        <h3 class="map-header-title">Peta Lokasi Desa</h3>
                    </div>
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12671.766424873405!2d113.35986811437917!3d-7.777552157739026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7aa91f817be97%3A0x19a5b1b24b48fe39!2sKaranggeger%2C%20Kec.%20Pajarakan%2C%20Kabupaten%20Probolinggo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1766366728852!5m2!1sid!2sid"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="map-footer">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Desa Karanggeger, Kec. Pajarakan, Kab. Probolinggo</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Climate Info -->
        <div class="climate-section" data-aos="fade-up" data-aos-delay="100">
            <div class="climate-header">
                <div class="climate-icon">☁️</div>
                <h3 class="climate-title">Kondisi Iklim & Geografis</h3>
            </div>
            <div class="climate-info-grid">
                <div class="climate-info-item">
                    <div class="climate-item-icon">⛰️</div>
                    <div class="climate-item-content">
                        <h6>Ketinggian</h6>
                        <p>10 - 50 mdpl</p>
                    </div>
                </div>
                <div class="climate-info-item">
                    <div class="climate-item-icon">🌡️</div>
                    <div class="climate-item-content">
                        <h6>Iklim</h6>
                        <p>Tropis</p>
                    </div>
                </div>
                <div class="climate-info-item">
                    <div class="climate-item-icon">🌧️</div>
                    <div class="climate-item-content">
                        <h6>Curah Hujan</h6>
                        <p>1.279 mm/tahun</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Boundaries Section -->
        <div class="boundaries-section" data-aos="fade-up" data-aos-delay="200">
            <div class="section-header">
                <div class="section-badge">
                    <i class="bi bi-compass"></i>
                    <span>Batas Wilayah</span>
                </div>
                <h2 class="section-title">Batas Wilayah Desa</h2>
                <p class="section-subtitle">Desa Karanggeger berbatasan dengan wilayah-wilayah berikut</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6" data-aos="flip-left" data-aos-delay="100">
                    <div class="boundary-card">
                        <div class="boundary-header">
                            <div class="boundary-icon">⬆️</div>
                            <h4 class="boundary-direction">Sebelah Utara</h4>
                        </div>
                        <p class="boundary-location">Selat Madura</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="200">
                    <div class="boundary-card">
                        <div class="boundary-header">
                            <div class="boundary-icon">➡️</div>
                            <h4 class="boundary-direction">Sebelah Timur</h4>
                        </div>
                        <p class="boundary-location">Desa Sukokerto dan Desa Tanjung</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="300">
                    <div class="boundary-card">
                        <div class="boundary-header">
                            <div class="boundary-icon">⬇️</div>
                            <h4 class="boundary-direction">Sebelah Selatan</h4>
                        </div>
                        <p class="boundary-location">Desa Karangbong</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="400">
                    <div class="boundary-card">
                        <div class="boundary-header">
                            <div class="boundary-icon">⬅️</div>
                            <h4 class="boundary-direction">Sebelah Barat</h4>
                        </div>
                        <p class="boundary-location">Desa Karangpranti dan Desa Gejugan</p>
                    </div>
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