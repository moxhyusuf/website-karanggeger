<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Desa Karanggeger')</title>

    <link href="/assets/img/logo.png" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />

    <!-- Vendor CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Main CSS -->
    <link href="/assets/css/header-fix.css" rel="stylesheet" />
    <link href="/assets/css/main.css" rel="stylesheet" />

    <style>
        /* ============== HEADER BACKGROUND COLOR ============== */
        .header,
        header,
        #header,
        .header.sticky-top,
        .header.sticked {
            background-color: #9c1706 !important;
        }

        /* ============== LOGO & SITENAME ============== */
        .header .sitename,
        header .sitename,
        .header .logo-text,
        header .logo-text {
            color: #ffffff !important;
        }

        .header .logo-img {
            height: 45px;
            width: auto;
        }

        /* ============== DESKTOP MENU - PUTIH ============== */
        @media (min-width: 1200px) {

            /* Menu utama desktop - putih */
            .header .navmenu>ul>li>a,
            header .navmenu>ul>li>a,
            .header .nav-link,
            header .nav-link {
                color: #ffffff !important;
            }

            /* Hover menu desktop */
            .header .navmenu>ul>li>a:hover,
            header .navmenu>ul>li>a:hover {
                color: #e0e0e0 !important;
            }

            /* Dropdown Desktop - Background Putih, Text Hitam */
            .header .navmenu .dropdown ul,
            header .navmenu .dropdown ul {
                background-color: #ffffff !important;
            }

            .header .navmenu .dropdown ul li a,
            header .navmenu .dropdown ul li a {
                color: #000000 !important;
            }

            .header .navmenu .dropdown ul li a:hover,
            header .navmenu .dropdown ul li a:hover {
                background-color: #f0f0f0 !important;
                color: #3d4d6a !important;
            }
        }

        /* ============== MOBILE MENU (HP) ============== */
        @media (max-width: 1199px) {

            /* Icon Hamburger - PUTIH (terlihat di header biru) */
            .mobile-nav-toggle,
            .mobile-nav-toggle i {
                color: #ffffff !important;
                font-size: 28px !important;
                cursor: pointer !important;
                z-index: 10001 !important;
            }

            /* Mobile Menu Container - Background Putih */
            .navmenu,
            .navmenu.mobile-nav-active {
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background-color: #ffffff !important;
                box-shadow: -5px 0 20px rgba(0, 0, 0, 0.15) !important;
                transition: right 0.3s ease;
                z-index: 9999;
                overflow-y: auto;
                padding: 70px 0 30px 0 !important;
            }

            .navmenu.mobile-nav-active {
                right: 0;
            }

            /* Icon Close (X) di dalam menu - HITAM */
            .navmenu .mobile-nav-toggle,
            .navmenu.mobile-nav-active .mobile-nav-toggle {
                color: #000000 !important;
                position: absolute !important;
                top: 20px !important;
                right: 20px !important;
            }

            /* Text Menu Mobile - HITAM LANGSUNG */
            .navmenu ul,
            .navmenu>ul {
                flex-direction: column;
                padding: 0 !important;
                margin: 0 !important;
            }

            .navmenu ul li a,
            .navmenu a,
            .navmenu>ul>li>a {
                color: #000000 !important;
                font-weight: 500 !important;
                padding: 15px 20px !important;
                display: block;
            }

            /* Hover Menu Mobile */
            .navmenu ul li a:hover,
            .navmenu a:hover {
                background-color: #f5f5f5 !important;
                color: #3d4d6a !important;
                padding-left: 25px !important;
                transition: all 0.3s ease !important;
            }

            /* Menu Active */
            .navmenu ul li a.active {
                background-color: #e8f0fe !important;
                color: #3d4d6a !important;
                border-left: 4px solid #3d4d6a !important;
                font-weight: 700 !important;
            }

            /* Border Antar Menu */
            .navmenu ul li {
                border-bottom: 1px solid #e5e7eb !important;
                padding: 0;
            }

            /* Dropdown Menu Mobile */
            .navmenu .dropdown ul,
            .navmenu .dropdown ul li {
                background-color: #f9fafb !important;
                position: static;
                box-shadow: none;
                padding-left: 20px !important;
            }

            .navmenu .dropdown ul li a {
                color: #374151 !important;
                font-size: 14px !important;
                padding: 12px 20px !important;
            }

            .navmenu .dropdown ul li a:hover {
                background-color: #e5e7eb !important;
                color: #3d4d6a !important;
            }

            /* Icon Arrow Dropdown */
            .navmenu .dropdown>a::after,
            .navmenu .dropdown-toggle::after {
                color: #6b7280 !important;
            }

            /* Overlay Gelap saat menu terbuka */
            .mobile-nav-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 9998;
                transition: opacity 0.3s ease;
            }

            .mobile-nav-overlay.active {
                display: block !important;
            }

            /* Logo & Button di Mobile */
            .header .logo-img {
                height: 35px;
            }

            .header .sitename {
                font-size: 0.9rem;
            }
        }

        /* ============== BUTTON LOGIN ============== */
        .header .btn-getstarted,
        header .btn-getstarted {
            background-color: #5bc0de !important;
            color: #ffffff !important;
            border: none !important;
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .header .btn-getstarted:hover,
        header .btn-getstarted:hover {
            background-color: #46a9c9 !important;
            color: #ffffff !important;
        }

        @media (max-width: 576px) {
            .btn-getstarted {
                padding: 6px 15px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body class="index-page">

    @include('layout.navbar')

    <!-- Mobile Nav Overlay -->
    <div class="mobile-nav-overlay"></div>

    <main class="main">
        @yield('content')
    </main>

    @include('layout.footer')

    <!-- Vendor JS -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- ISOTOPE -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

    {{-- Custom Scripts - Semua dalam satu DOMContentLoaded --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ============ MOBILE NAVIGATION ============
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const navMenu = document.querySelector('.navmenu');
            const overlay = document.querySelector('.mobile-nav-overlay');
            const body = document.body;

            // Toggle mobile navigation
            if (mobileNavToggle) {
                mobileNavToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    navMenu.classList.toggle('mobile-nav-active');
                    overlay.classList.toggle('active');
                    body.style.overflow = navMenu.classList.contains('mobile-nav-active') ? 'hidden' : '';
                    
                    // Change icon
                    if (navMenu.classList.contains('mobile-nav-active')) {
                        this.classList.remove('bi-list');
                        this.classList.add('bi-x');
                    } else {
                        this.classList.remove('bi-x');
                        this.classList.add('bi-list');
                    }
                });
            }

            // Close mobile nav when clicking overlay
            if (overlay) {
                overlay.addEventListener('click', function() {
                    navMenu.classList.remove('mobile-nav-active');
                    overlay.classList.remove('active');
                    body.style.overflow = '';
                    if (mobileNavToggle) {
                        mobileNavToggle.classList.remove('bi-x');
                        mobileNavToggle.classList.add('bi-list');
                    }
                });
            }

            // ============ MOBILE DROPDOWN TOGGLE ============
            const dropdownToggles = document.querySelectorAll('.navmenu .dropdown > a');
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth < 1200) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        
                        // Toggle dropdown
                        parent.classList.toggle('dropdown-active');
                        
                        // Close other dropdowns
                        dropdownToggles.forEach(other => {
                            if (other !== toggle && other.parentElement.classList.contains('dropdown-active')) {
                                other.parentElement.classList.remove('dropdown-active');
                            }
                        });
                    }
                });
            });

            // Close mobile nav when clicking a link (except dropdown toggles)
            const navLinks = document.querySelectorAll('.navmenu a:not(.dropdown > a)');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 1200) {
                        navMenu.classList.remove('mobile-nav-active');
                        overlay.classList.remove('active');
                        body.style.overflow = '';
                        if (mobileNavToggle) {
                            mobileNavToggle.classList.remove('bi-x');
                            mobileNavToggle.classList.add('bi-list');
                        }
                    }
                });
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1200) {
                    navMenu.classList.remove('mobile-nav-active');
                    overlay.classList.remove('active');
                    body.style.overflow = '';
                    if (mobileNavToggle) {
                        mobileNavToggle.classList.remove('bi-x');
                        mobileNavToggle.classList.add('bi-list');
                    }
                    // Close all dropdowns on desktop
                    dropdownToggles.forEach(toggle => {
                        toggle.parentElement.classList.remove('dropdown-active');
                    });
                }
            });

            // ============ ISOTOPE ============
            const container = document.querySelector('.isotope-container');
            if (container) {
                const iso = new Isotope(container, {
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true
                });

                const filters = document.querySelectorAll('.isotope-filters li');

                filters.forEach(filter => {
                    filter.addEventListener('click', function() {
                        filters.forEach(el => el.classList.remove('filter-active'));
                        this.classList.add('filter-active');

                        const filterValue = this.getAttribute('data-filter');
                        iso.arrange({ filter: filterValue });
                    });
                });

                // Relayout after images load
                if (typeof imagesLoaded !== 'undefined') {
                    imagesLoaded(container, function() {
                        iso.layout();
                    });
                }
            }

            // ============ LAZY LOADING IMAGES ============
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.classList.add('loaded');
                            imageObserver.unobserve(img);
                        }
                    });
                });

                lazyImages.forEach(img => imageObserver.observe(img));
            }

            // ============ INITIALIZE AOS ============
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true,
                    mirror: false
                });
            }
        });
    </script>

    {{-- TEMPAT SCRIPT HALAMAN --}}
    @stack('scripts')

</body>
</html>