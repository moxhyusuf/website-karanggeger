@extends('layout.app')

@section('title', 'Pengaduan Warga')

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
#curhat-hero {
    background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
    padding: 70px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

#curhat-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
    opacity: 0.5;
}

#curhat-hero::after {
    content: '📢';
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: .08;
}

#curhat-hero h1 {
    font-weight: 800;
    font-size: 2.5rem;
    letter-spacing: .5px;
    color: #fff;
    position: relative;
    z-index: 1;
    text-shadow: 0 2px 15px rgba(0,0,0,.2);
}

#curhat-hero p {
    max-width: 650px;
    margin: 15px auto 0;
    color: rgba(255,255,255,.95);
    position: relative;
    z-index: 1;
    font-size: 1.05rem;
    font-weight: 500;
}

/* ================= INFO CARDS ================= */
.info-section {
    margin-top: -50px;
    position: relative;
    z-index: 10;
}

.info-card {
    background: #fff;
    border-radius: 16px;
    padding: 28px 25px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.12);
    transition: all .3s ease;
    height: 100%;
    border: 1px solid var(--border-color);
}

.info-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(220, 38, 38, 0.2);
    border-color: var(--primary-light);
}

.info-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 18px;
    box-shadow: 0 6px 20px rgba(220, 38, 38, 0.3);
    transition: transform .3s ease;
}

.info-card:hover .info-icon {
    transform: scale(1.1) rotate(5deg);
}

.info-icon i {
    font-size: 32px;
    color: #fff;
}

.info-card h6 {
    font-weight: 700;
    font-size: 16px;
    color: var(--text-dark);
    margin-bottom: 8px;
}

.info-card p {
    font-size: 13px;
    color: #64748b;
    margin: 0;
    line-height: 1.5;
}

/* ================= FORM SECTION ================= */
.form-section {
    padding: 70px 0 60px;
    background: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
}

.form-container {
    background: #fff;
    border-radius: 20px;
    padding: 45px;
    box-shadow: 0 15px 50px rgba(220, 38, 38, 0.1);
    position: relative;
    border: 1px solid var(--border-color);
}

.form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
    border-radius: 20px 20px 0 0;
}

.form-header {
    text-align: center;
    margin-bottom: 40px;
    padding-bottom: 25px;
    border-bottom: 2px solid var(--border-color);
    position: relative;
}

.form-header::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 2px;
    background: var(--primary-color);
}

.form-header h3 {
    font-weight: 800;
    font-size: 28px;
    color: var(--text-dark);
    margin-bottom: 10px;
}

.form-header p {
    color: #64748b;
    margin: 0;
    font-size: 15px;
}

/* ================= FORM INPUTS ================= */
.form-label {
    font-weight: 700;
    font-size: 14px;
    color: #334155;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.form-label i {
    color: var(--primary-color);
    font-size: 16px;
}

.form-control, .form-select {
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 12px 18px;
    font-size: 14px;
    transition: all .3s ease;
    background: #fff;
}

.form-control:focus, .form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.1);
    outline: none;
}

.form-control::placeholder {
    color: #cbd5e1;
}

textarea.form-control {
    resize: vertical;
    min-height: 100px;
}

/* ================= FILE INPUT ================= */
.file-input-wrapper {
    position: relative;
}

.file-input-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 32px;
    border: 2px dashed #cbd5e1;
    border-radius: 12px;
    background: var(--bg-light);
    cursor: pointer;
    transition: all .3s ease;
}

.file-input-label:hover {
    border-color: var(--primary-color);
    background: #fff5f5;
}

.file-input-label i {
    font-size: 36px;
    color: var(--primary-color);
}

.file-input-label span {
    color: #64748b;
    font-weight: 600;
    font-size: 14px;
}

.file-input-label small {
    font-size: 12px;
}

input[type="file"] {
    position: absolute;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
    top: 0;
    left: 0;
}

/* ================= ALERTS ================= */
.alert {
    border: none;
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 30px;
    display: flex;
    align-items: start;
    gap: 10px;
}

.alert-success {
    background: linear-gradient(135deg, #d1fae5, #a7f3d0);
    color: #065f46;
    border-left: 4px solid #10b981;
}

.alert-danger {
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    color: #991b1b;
    border-left: 4px solid var(--primary-color);
}

.alert i {
    font-size: 18px;
    flex-shrink: 0;
    margin-top: 2px;
}

.alert ul {
    margin: 8px 0 0 20px;
    padding: 0;
}

/* ================= SUBMIT BUTTON ================= */
.btn-submit {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 50px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: #fff;
    border: none;
    border-radius: 50px;
    font-weight: 700;
    font-size: 15px;
    transition: all .3s ease;
    box-shadow: 0 8px 20px rgba(220, 38, 38, 0.35);
    cursor: pointer;
}

.btn-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(220, 38, 38, 0.45);
    background: linear-gradient(135deg, var(--primary-dark), #991b1b);
}

.btn-submit:active {
    transform: translateY(-1px);
}

.btn-submit i {
    font-size: 18px;
}

/* ================= HELPER TEXT ================= */
.form-text {
    font-size: 12px;
    color: #94a3b8;
    margin-top: 6px;
    display: block;
}

/* ================= BADGE ================= */
.required-badge {
    display: inline-block;
    padding: 2px 8px;
    background: var(--primary-color);
    color: #fff;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 700;
    margin-left: 5px;
    text-transform: uppercase;
}

/* ================= FILE NAME DISPLAY ================= */
.file-name-display {
    margin-top: 10px;
    padding: 10px 15px;
    background: var(--bg-light);
    border-radius: 8px;
    border-left: 3px solid var(--primary-color);
    font-size: 13px;
    color: var(--text-dark);
    display: none;
}

.file-name-display.show {
    display: block;
}

.file-name-display i {
    color: var(--primary-color);
    margin-right: 8px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 991px) {
    #curhat-hero {
        padding: 60px 0;
    }
    
    #curhat-hero h1 {
        font-size: 2rem;
    }
    
    .form-container {
        padding: 35px 30px;
    }
    
    #curhat-hero::after {
        font-size: 80px;
        right: 5%;
    }
}

@media (max-width: 768px) {
    #curhat-hero {
        padding: 50px 0;
    }
    
    #curhat-hero h1 {
        font-size: 1.75rem;
    }
    
    #curhat-hero p {
        font-size: 1rem;
    }
    
    .info-section {
        margin-top: -30px;
    }
    
    .info-card {
        padding: 24px 20px;
    }
    
    .form-container {
        padding: 30px 20px;
    }
    
    .form-header h3 {
        font-size: 24px;
    }
    
    .btn-submit {
        width: 100%;
        padding: 14px 30px;
    }
    
    .file-input-label {
        padding: 25px;
        flex-direction: column;
    }
    
    #curhat-hero::after {
        display: none;
    }
}

@media (max-width: 576px) {
    #curhat-hero h1 {
        font-size: 1.5rem;
    }
    
    .form-container {
        padding: 25px 18px;
        border-radius: 16px;
    }
    
    .info-icon {
        width: 60px;
        height: 60px;
    }
    
    .info-icon i {
        font-size: 28px;
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

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.info-icon {
    animation: bounce 2s ease-in-out infinite;
}

.info-card:nth-child(2) .info-icon {
    animation-delay: .2s;
}

.info-card:nth-child(3) .info-icon {
    animation-delay: .4s;
}

/* ================= LOADING STATE ================= */
.btn-submit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.btn-submit:disabled:hover {
    transform: none;
}

/* ================= FOCUS VISIBLE ================= */
.form-control:focus-visible,
.form-select:focus-visible,
.btn-submit:focus-visible {
    outline: 2px solid var(--primary-color);
    outline-offset: 2px;
}
</style>

<!-- Hero Section -->
<section id="curhat-hero">
    <div class="container">
        <h1 data-aos="fade-down">📢 RUANG PENGADUAN WARGA</h1>
        <p data-aos="fade-up">
            Sampaikan laporan Anda agar desa dapat menangani dengan cepat dan tepat
        </p>
    </div>
</section>

<!-- Info Cards -->
<div class="container info-section">
    <div class="row g-4" data-aos="fade-up">
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h6>Aman & Terpercaya</h6>
                <p>Data Anda dijamin kerahasiaannya dengan enkripsi tingkat tinggi</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <h6>Respon Cepat</h6>
                <p>Tim kami siap menanggapi dan menindaklanjuti laporan Anda</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon">
                    <i class="bi bi-chat-heart"></i>
                </div>
                <h6>Mudah & Praktis</h6>
                <p>Proses pelaporan yang sederhana dan user-friendly</p>
            </div>
        </div>
    </div>
</div>

<!-- Form Section -->
<section class="form-section">
    <div class="container" data-aos="fade-up" data-aos-delay="150">

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="form-container">

                    <!-- Form Header -->
                    <div class="form-header">
                        <h3>📝 Form Pengaduan Warga</h3>
                        <p>Isi formulir di bawah ini dengan lengkap dan jelas</p>
                    </div>

                    <!-- Alerts -->
                    @if(session('success'))
                        <div class="alert alert-success" data-aos="zoom-in">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger" data-aos="shake">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <div>
                                <strong>Terjadi kesalahan:</strong>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Form -->
                    <form action="{{ route('ruang_curhat.store') }}" method="POST" enctype="multipart/form-data" id="complaintForm">
                        @csrf

                        <div class="row">

                            <!-- Status Pelapor -->
                            <div class="col-lg-6 mb-4">
                                <label class="form-label">
                                    <i class="bi bi-person-badge"></i>
                                    Status Pelapor
                                    <span class="required-badge">Wajib</span>
                                </label>
                                <select class="form-select" name="status_pelapor" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Warga Desa">Warga Desa</option>
                                    <option value="Non Warga">Bukan Warga Desa</option>
                                </select>
                            </div>

                            <!-- Nama Lengkap -->
                            <div class="col-lg-6 mb-4">
                                <label class="form-label">
                                    <i class="bi bi-person"></i>
                                    Nama Lengkap
                                    <span class="required-badge">Wajib</span>
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       name="nama_lengkap" 
                                       placeholder="Masukkan nama lengkap Anda"
                                       required>
                            </div>

                            <!-- Nomor HP -->
                            <div class="col-lg-6 mb-4">
                                <label class="form-label">
                                    <i class="bi bi-telephone"></i>
                                    Nomor HP
                                    <span class="required-badge">Wajib</span>
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       name="nomor_hp" 
                                       placeholder="Contoh: 08123456789"
                                       pattern="[0-9]{10,13}"
                                       required>
                                <small class="form-text">Nomor yang dapat dihubungi (10-13 digit)</small>
                            </div>

                            <!-- Alamat -->
                            <div class="col-lg-6 mb-4">
                                <label class="form-label">
                                    <i class="bi bi-geo-alt"></i>
                                    Alamat
                                </label>
                                <textarea class="form-control" 
                                          name="alamat" 
                                          rows="3"
                                          placeholder="Masukkan alamat lengkap Anda"></textarea>
                                <small class="form-text">Opsional, untuk memudahkan follow-up</small>
                            </div>

                            <!-- Isi Pengaduan -->
                            <div class="col-12 mb-4">
                                <label class="form-label">
                                    <i class="bi bi-chat-square-text"></i>
                                    Isi Pengaduan
                                    <span class="required-badge">Wajib</span>
                                </label>
                                <textarea class="form-control" 
                                          name="isi_pengaduan" 
                                          rows="6" 
                                          placeholder="Jelaskan pengaduan Anda dengan detail: apa, kapan, dimana, dan bagaimana kronologinya..."
                                          required></textarea>
                                <small class="form-text">Minimal 20 karakter. Jelaskan masalah yang ingin Anda laporkan secara detail</small>
                            </div>

                            <!-- Foto Pendukung -->
                            <div class="col-12 mb-4">
                                <label class="form-label">
                                    <i class="bi bi-camera"></i>
                                    Foto Pendukung
                                </label>
                                <div class="file-input-wrapper">
                                    <label class="file-input-label" for="fileInput">
                                        <i class="bi bi-cloud-upload"></i>
                                        <div>
                                            <span class="d-block" id="fileLabel">Klik untuk upload foto</span>
                                            <small class="text-muted d-block mt-1">Format: JPG, PNG, JPEG (Max 2MB) - Opsional</small>
                                        </div>
                                    </label>
                                    <input type="file" 
                                           id="fileInput"
                                           class="form-control" 
                                           name="foto_pendukung"
                                           accept="image/jpeg,image/png,image/jpg">
                                </div>
                                <div class="file-name-display" id="fileNameDisplay">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span id="fileName"></span>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn-submit">
                                    <i class="bi bi-send-fill"></i>
                                    Kirim Pengaduan
                                </button>
                            </div>

                        </div>
                    </form>

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

    // File input preview
    const fileInput = document.getElementById('fileInput');
    const fileLabel = document.getElementById('fileLabel');
    const fileNameDisplay = document.getElementById('fileNameDisplay');
    const fileName = document.getElementById('fileName');

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Validate file size (2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('Ukuran file terlalu besar! Maksimal 2MB');
                fileInput.value = '';
                return;
            }
            
            fileLabel.textContent = file.name;
            fileName.textContent = file.name;
            fileNameDisplay.classList.add('show');
        } else {
            fileLabel.textContent = 'Klik untuk upload foto';
            fileNameDisplay.classList.remove('show');
        }
    });

    // Form validation
    const form = document.getElementById('complaintForm');
    form.addEventListener('submit', function(e) {
        const isiPengaduan = form.querySelector('[name="isi_pengaduan"]').value;
        if (isiPengaduan.length < 20) {
            e.preventDefault();
            alert('Isi pengaduan minimal 20 karakter!');
            return false;
        }
    });
</script>

@endsection