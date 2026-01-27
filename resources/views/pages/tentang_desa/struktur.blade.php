@extends('layout.app')

@section('title', 'Struktur Pemerintahan')

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
#struktur-hero {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 70px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

#struktur-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><path d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/></g></g></svg>');
}

#struktur-hero::after {
    content: '🏛️';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: .08;
}

#struktur-hero h1 {
    font-weight: 800;
    font-size: 2.5rem;
    letter-spacing: .5px;
    color: #fff;
    position: relative;
    z-index: 1;
    text-shadow: 0 2px 15px rgba(0,0,0,.2);
    margin: 0;
}

#struktur-hero p {
    max-width: 650px;
    margin: 15px auto 0;
    color: rgba(255,255,255,.95);
    position: relative;
    z-index: 1;
    font-size: 1.05rem;
    font-weight: 500;
}

/* ================= MAIN SECTION ================= */
#struktural {
    padding: 70px 0;
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
}

/* ================= KEPALA DESA CARD ================= */
.kades-card {
    background: #fff;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.1);
    border: 2px solid var(--border-color);
    position: relative;
    overflow: hidden;
    margin-bottom: 50px;
}

.kades-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
}

.kades-header {
    text-align: center;
    margin-bottom: 35px;
}

.kades-badge {
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

.kades-title {
    font-size: 28px;
    font-weight: 800;
    color: var(--text-dark);
    margin: 0;
}

.kades-content {
    display: flex;
    align-items: center;
    gap: 35px;
}

.kades-photo-wrapper {
    flex-shrink: 0;
}

.kades-photo {
    width: 180px;
    height: 180px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(220, 38, 38, 0.2);
    border: 4px solid var(--border-color);
    position: relative;
}

.kades-photo::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(220, 38, 38, 0.1), transparent);
    z-index: 1;
}

.kades-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.kades-info {
    flex: 1;
}

.kades-name {
    font-size: 24px;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 8px;
    text-transform: uppercase;
}

.kades-position {
    font-size: 16px;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 15px;
}

.kades-periode {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--bg-light);
    padding: 8px 16px;
    border-radius: 10px;
    font-size: 14px;
    color: #64748b;
    font-weight: 600;
    border: 1px solid var(--border-color);
}

.kades-periode i {
    color: var(--primary-color);
}

/* ================= STRUKTUR CARD ================= */
.struktur-card {
    background: #fff;
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.1);
    border: 2px solid var(--border-color);
    position: relative;
    overflow: hidden;
}

.struktur-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
}

.struktur-header {
    text-align: center;
    margin-bottom: 35px;
}

.struktur-badge {
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

.struktur-title {
    font-size: 28px;
    font-weight: 800;
    color: var(--text-dark);
    margin: 0;
}

.struktur-image-wrapper {
    background: var(--bg-light);
    border-radius: 16px;
    padding: 20px;
    border: 2px solid var(--border-color);
}

.struktur-image-wrapper img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.1);
}

/* ================= ZOOM MODAL ================= */
.zoom-icon {
    position: absolute;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.4);
    transition: all .3s ease;
    z-index: 10;
}

.zoom-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 12px 30px rgba(220, 38, 38, 0.5);
}

.image-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.95);
    animation: fadeIn 0.3s ease;
}

.image-modal.active {
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content-wrapper {
    position: relative;
    max-width: 95%;
    max-height: 95vh;
    margin: auto;
}

.modal-content-wrapper img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
}

.close-modal {
    position: absolute;
    top: -50px;
    right: 0;
    color: #fff;
    font-size: 40px;
    font-weight: 700;
    cursor: pointer;
    transition: all .3s ease;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.close-modal:hover {
    background: var(--primary-color);
    transform: rotate(90deg);
}

/* ================= EMPTY STATE ================= */
.empty-state {
    text-align: center;
    padding: 80px 20px;
    background: var(--bg-light);
    border-radius: 24px;
    border: 2px dashed var(--border-color);
}

.empty-icon {
    font-size: 80px;
    margin-bottom: 25px;
    opacity: 0.5;
}

.empty-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 12px;
}

.empty-text {
    font-size: 16px;
    color: #64748b;
    margin: 0;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    #struktur-hero {
        padding: 60px 0;
    }
    
    #struktur-hero h1 {
        font-size: 2rem;
    }
    
    #struktural {
        padding: 50px 0;
    }
    
    .kades-content {
        flex-direction: column;
        text-align: center;
    }
    
    .kades-photo {
        width: 160px;
        height: 160px;
    }
    
    #struktur-hero::after {
        font-size: 80px;
    }
}

@media (max-width: 768px) {
    #struktur-hero {
        padding: 50px 0;
    }
    
    #struktur-hero h1 {
        font-size: 1.75rem;
    }
    
    #struktur-hero p {
        font-size: 1rem;
    }
    
    #struktural {
        padding: 40px 0;
    }
    
    .kades-card,
    .struktur-card {
        padding: 30px 20px;
    }
    
    .kades-title,
    .struktur-title {
        font-size: 24px;
    }
    
    .kades-photo {
        width: 140px;
        height: 140px;
    }
    
    .kades-name {
        font-size: 20px;
    }
    
    .zoom-icon {
        bottom: 20px;
        right: 20px;
        width: 45px;
        height: 45px;
        font-size: 18px;
    }
    
    #struktur-hero::after {
        display: none;
    }
}

@media (max-width: 576px) {
    #struktur-hero h1 {
        font-size: 1.5rem;
    }
    
    .kades-card,
    .struktur-card {
        border-radius: 16px;
    }
    
    .kades-photo {
        width: 120px;
        height: 120px;
    }
    
    .struktur-image-wrapper {
        padding: 15px;
    }
    
    .close-modal {
        top: -40px;
        font-size: 35px;
        width: 45px;
        height: 45px;
    }
}

/* ================= ANIMATIONS ================= */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

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

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.kades-card,
.struktur-card {
    animation: fadeInUp 0.6s ease-out;
}

.modal-content-wrapper {
    animation: zoomIn 0.3s ease-out;
}
</style>

<!-- Hero Section -->
<section id="struktur-hero">
    <div class="container">
        <h1 data-aos="fade-down">🏛️ STRUKTUR PEMERINTAHAN</h1>
        <p data-aos="fade-up">
            Susunan organisasi pemerintahan Desa Karanggeger
        </p>
    </div>
</section>

<!-- Main Section -->
<section id="struktural">
    <div class="container">

        <!-- Kepala Desa Card -->
        @if(isset($kades) && $kades)
        <div class="kades-card" data-aos="fade-up" data-aos-delay="100">
            <div class="kades-header">
                <div class="kades-badge">
                    <i class="bi bi-person-badge"></i>
                    <span>Pimpinan Desa</span>
                </div>
                <h2 class="kades-title">Kepala Desa</h2>
            </div>

            <div class="kades-content">
                <div class="kades-photo-wrapper">
                    <div class="kades-photo">
                        <img 
                            src="{{ $kades->foto ? asset('storage/'.$kades->foto) : asset('assets/img/default-user.png') }}"
                            alt="Foto Kepala Desa">
                    </div>
                </div>

                <div class="kades-info">
                    <h3 class="kades-name">{{ $kades->nama }}</h3>
                    <p class="kades-position">Kepala Desa Karanggeger</p>
                    
                    @if($kades->periode_mulai || $kades->periode_selesai)
                    <div class="kades-periode">
                        <i class="bi bi-calendar-check"></i>
                        <span>
                            Periode: 
                            {{ $kades->periode_mulai ? date('Y', strtotime($kades->periode_mulai)) : '-' }}
                            -
                            {{ $kades->periode_selesai ? date('Y', strtotime($kades->periode_selesai)) : 'Sekarang' }}
                        </span>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        <!-- Struktur Organisasi -->
        @forelse($struktur as $index => $item)
        <div class="struktur-card" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
            <div class="struktur-header">
                <div class="struktur-badge">
                    <i class="bi bi-diagram-3"></i>
                    <span>Bagan Organisasi</span>
                </div>
                <h2 class="struktur-title">Struktur Organisasi Pemerintahan</h2>
            </div>

            <div class="struktur-image-wrapper" style="position: relative;">
                <img 
                    src="{{ asset('storage/' . $item->gambar) }}"
                    class="struktur-image"
                    alt="Struktur Organisasi Desa"
                    id="strukturImage{{ $index }}">
                
                <div class="zoom-icon" onclick="openModal({{ $index }})">
                    <i class="bi bi-arrows-fullscreen"></i>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="image-modal" id="imageModal{{ $index }}" onclick="closeModal({{ $index }})">
            <div class="modal-content-wrapper" onclick="event.stopPropagation()">
                <span class="close-modal" onclick="closeModal({{ $index }})">&times;</span>
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Struktur Organisasi Desa">
            </div>
        </div>

        @empty
        <!-- Empty State -->
        <div class="empty-state" data-aos="zoom-in">
            <div class="empty-icon">📊</div>
            <h3 class="empty-title">Belum Ada Data Struktur</h3>
            <p class="empty-text">Data struktur organisasi pemerintahan desa belum ditambahkan</p>
        </div>
        @endforelse

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    function openModal(index) {
        const modal = document.getElementById('imageModal' + index);
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(index) {
        const modal = document.getElementById('imageModal' + index);
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Close modal with ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const modals = document.querySelectorAll('.image-modal');
            modals.forEach(modal => {
                modal.classList.remove('active');
            });
            document.body.style.overflow = 'auto';
        }
    });
</script>

@endsection