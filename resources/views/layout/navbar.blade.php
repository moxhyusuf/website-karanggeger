<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        
        <!-- Logo -->
        <a href="/" class="logo d-flex align-items-center">
            <img src="/assets/img/logo.png" alt="Logo Desa Karanggeger" class="logo-img">
            <span class="sitename">DESA KARANGGEGER</span>
        </a>

        <!-- Mobile Nav Toggle - PENTING: Di luar navmenu -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

        <!-- Desktop Navigation -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>
                
                <li class="dropdown">
                    <a href="#"><span>Tentang Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ route('geografis') }}">Geografis</a></li>
                        <li><a href="{{ route('wilayah') }}">Pembagian Wilayah</a></li>
                        <li><a href="{{ route('kependudukan') }}">Data Kependudukan</a></li>
                        <li><a href="{{ route('kepdes') }}">Profil Kepala Desa</a></li>
                        <li><a href="{{ route('struktur.frontend') }}">Struktur Pemerintah Desa</a></li>
                        
                        <li><a href="{{ route('vismis.frontend') }}">Visi & Misi</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#"><span>Promo Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('program') }}">Program Unggulan</a></li>
                        <li><a href="{{ route('produk') }}">Produk Unggulan</a></li>
                        <li><a href="{{ route('umkm') }}">Ruang UMKM</a></li>
                        <li><a href="{{ route('frontend.bumdes') }}">BUMDesa dan KDMP</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#"><span>Update Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('berita') }}">Berita Desa</a></li>
                        <li><a href="{{ route('galeri.frontend') }}">Galeri Desa</a></li>
                        
                        <li><a href="{{ route('prestasi.index') }}">Prestasi Desa</a></li>
                    </ul>
                </li>
                
                
                <li><a href="{{ route('ruang_curhat.pengaduan') }}">Ruang Curhat</a></li>
                <li><a href="{{ route('layanan') }}">Layanan</a></li>
            </ul>
        </nav>

        <!-- Login Button -->
        <a class="btn-getstarted" href="{{ route('login') }}" target="_blank">Login</a>
    </div>
</header>

<style>
    /* ==================== HEADER STYLES ==================== */
    .header {
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        z-index: 997;
        padding: 10px 0;
    }

    .header.sticky-top {
        position: sticky;
        top: 0;
    }

    /* Logo */
    .logo {
        text-decoration: none;
        z-index: 1000;
    }

    .logo .logo-img {
        height: 50px;
        width: auto;
        margin-right: 10px;
    }

    .logo .sitename {
        font-size: 1.3rem;
        font-weight: 700;
        color: #b1880dff;
        white-space: nowrap;
    }

    /* Login Button */
    .btn-getstarted {
        background: #b1880dff;
        color: #fff;
        padding: 10px 25px;
        border-radius: 50px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.3s;
        white-space: nowrap;
        z-index: 1000;
    }

    .btn-getstarted:hover {
        background: #8a6a0a;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(177, 136, 13, 0.3);
    }

    /* ==================== DESKTOP NAVIGATION ==================== */
    @media (min-width: 1200px) {
        .mobile-nav-toggle {
            display: none !important;
        }

        .navmenu ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 30px;
        }

        .navmenu ul li {
            position: relative;
        }

        .navmenu ul li a {
            color: #333;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            padding: 8px 0;
            transition: color 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .navmenu ul li a:hover,
        .navmenu ul li a.active {
            color: #b1880dff;
        }

        .navmenu .dropdown ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            min-width: 220px;
            padding: 10px 0;
            border-radius: 8px;
            z-index: 99;
        }

        .navmenu .dropdown:hover > ul {
            display: block;
        }

        .navmenu .dropdown ul li {
            padding: 0;
        }

        .navmenu .dropdown ul li a {
            display: block;
            padding: 10px 20px;
            font-size: 14px;
        }

        .navmenu .dropdown ul li a:hover {
            background: #f8f9fa;
            color: #b1880dff;
        }

        .toggle-dropdown {
            font-size: 12px;
        }
    }

    /* ==================== MOBILE NAVIGATION ==================== */
    @media (max-width: 1199px) {
        /* Mobile Toggle Button */
        .mobile-nav-toggle {
            display: block !important;
            font-size: 28px;
            cursor: pointer;
            color: #333;
            z-index: 10001;
            position: relative;
            transition: all 0.3s;
        }

        .mobile-nav-toggle:hover {
            color: #b1880dff;
        }

        /* Navigation Menu */
        .navmenu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            max-width: 85%;
            height: 100vh;
            background: #fff;
            box-shadow: -5px 0 20px rgba(0,0,0,0.2);
            transition: right 0.4s ease;
            z-index: 10000;
            overflow-y: auto;
            padding: 80px 20px 30px 20px;
        }

        .navmenu.mobile-nav-active {
            right: 0;
        }

        /* Menu List */
        .navmenu ul {
            display: flex;
            flex-direction: column;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .navmenu ul li {
            padding: 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .navmenu ul li:last-child {
            border-bottom: none;
        }

        .navmenu ul li a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 10px;
            color: #333;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .navmenu ul li a:hover,
        .navmenu ul li a.active {
            color: #b1880dff;
            background: #f8f9fa;
            padding-left: 15px;
        }

        /* Dropdown Styles */
        .navmenu .dropdown > a {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navmenu .dropdown > a .toggle-dropdown {
            transition: transform 0.3s;
        }

        .navmenu .dropdown.dropdown-active > a .toggle-dropdown {
            transform: rotate(180deg);
        }

        .navmenu .dropdown ul {
            display: none;
            padding-left: 0;
            background: #f8f9fa;
            margin: 0;
        }

        .navmenu .dropdown.dropdown-active > ul {
            display: block;
        }

        .navmenu .dropdown ul li {
            border-bottom: none;
        }

        .navmenu .dropdown ul li a {
            padding: 12px 20px;
            font-size: 14px;
            padding-left: 30px;
        }

        .navmenu .dropdown ul li a:hover {
            padding-left: 35px;
        }

        /* Hide login button on very small screens */
        .btn-getstarted {
            padding: 8px 20px;
            font-size: 14px;
        }
    }

    /* ==================== RESPONSIVE ADJUSTMENTS ==================== */
    @media (max-width: 768px) {
        .logo .logo-img {
            height: 40px;
        }

        .logo .sitename {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 576px) {
        .logo .logo-img {
            height: 35px;
        }

        .logo .sitename {
            font-size: 1rem;
        }

        .btn-getstarted {
            padding: 6px 15px;
            font-size: 13px;
        }

        .mobile-nav-toggle {
            font-size: 26px;
        }
    }

    @media (max-width: 400px) {
        .logo .sitename {
            display: none;
        }

        .btn-getstarted {
            padding: 6px 12px;
            font-size: 12px;
        }
    }
</style>

{{-- JANGAN TAMBAHKAN SCRIPT DI SINI - Sudah ada di layout.blade.php --}}