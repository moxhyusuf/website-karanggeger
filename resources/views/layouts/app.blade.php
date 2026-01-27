<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard')</title>

    {{-- FAVICON --}}
    <link rel="icon" type="image/png" href="{{ asset('dist/img/logo.png') }}">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- Custom Responsive CSS --}}
    <style>
    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        /* Sidebar positioning and z-index fix */
        .main-sidebar {
            position: fixed !important;
            top: 0;
            left: -250px;
            height: 100vh;
            z-index: 1040;
            transition: left 0.3s ease-in-out;
        }
        
        body.sidebar-open .main-sidebar {
            left: 0;
        }

        /* Content wrapper positioning */
        .content-wrapper {
            margin-left: 0 !important;
            width: 100%;
            transition: none;
        }

        /* Overlay for sidebar */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1039;
        }

        body.sidebar-open .sidebar-overlay {
            display: block;
        }

        /* Navbar fixed */
        .main-header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        /* Add padding to content to account for fixed navbar */
        .content-wrapper {
            padding-top: 57px;
        }

        /* Card spacing mobile */
        .card {
            margin-bottom: 1rem;
        }

        /* Table responsive */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Form controls mobile */
        .form-control {
            font-size: 16px; /* Prevent zoom on iOS */
        }

        /* Button spacing mobile */
        .btn {
            margin-bottom: 0.5rem;
        }

        /* Image cards on mobile - 2 columns */
        .col-md-3.mb-3 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        /* Hide preloader on mobile */
        .preloader {
            display: none !important;
        }

        /* Navbar search full width */
        .navbar-search-block {
            width: 100%;
        }

        /* Footer mobile */
        .main-footer {
            padding: 1rem;
            font-size: 0.875rem;
        }

        .main-footer .float-right {
            float: none !important;
            display: block;
            margin-top: 0.5rem;
        }

        /* Dashboard cards full width on mobile */
        .small-box {
            margin-bottom: 1rem;
        }

        /* Ensure sidebar menu is clickable */
        .main-sidebar .nav-link {
            position: relative;
            z-index: 1;
        }
    }

    /* Tablet Responsiveness */
    @media (min-width: 769px) and (max-width: 1024px) {
        .col-md-3.mb-3 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }

    /* Desktop Optimization */
    @media (min-width: 1025px) {
        .content-wrapper {
            min-height: calc(100vh - 3.5rem - 57px);
        }
    }

    /* Image preview responsive */
    .img-fluid.rounded.border {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Card image responsive */
    .card img {
        max-width: 100%;
        height: auto;
    }

    /* Fix for long text overflow */
    .card-body {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    /* Button group responsive */
    @media (max-width: 576px) {
        .d-flex.gap-2 {
            flex-direction: column;
        }

        .d-flex.gap-2 .btn {
            width: 100%;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
        }

        .btn-group .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
    }

    /* Prevent body scroll when sidebar open on mobile */
    @media (max-width: 768px) {
        body.sidebar-open {
            overflow: hidden;
        }
    }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- Preloader --}}
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/assets/img/logo.png" alt="Logo" height="60" width="60">
        </div>

        {{-- Navbar --}}
        @include('layouts.partials.navbar')

        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')

        {{-- Sidebar Overlay for Mobile --}}
        <div class="sidebar-overlay"></div>

        {{-- Content --}}
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">@yield('page-title', 'Dashboard')</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        {{-- Footer --}}
        @include('layouts.partials.footer')
    </div>

    <!-- JS -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    {{-- Custom Mobile JS --}}
   <script>
    $(document).ready(function() {
        // Toggle sidebar on mobile
        $('[data-widget="pushmenu"]').on('click', function(e) {
            e.preventDefault();
            
            if ($(window).width() <= 768) {
                $('body').toggleClass('sidebar-open');
                
                // Prevent body scroll when sidebar is open
                if ($('body').hasClass('sidebar-open')) {
                    $('body').css('overflow', 'hidden');
                } else {
                    $('body').css('overflow', 'auto');
                }
            }
        });

        // Close sidebar when clicking overlay
        $(document).on('click', '.sidebar-overlay', function() {
            $('body').removeClass('sidebar-open');
            $('body').css('overflow', 'auto');
        });

        // Close sidebar when clicking nav link on mobile
        $('.nav-sidebar .nav-link').on('click', function() {
            if ($(window).width() <= 768) {
                setTimeout(function() {
                    $('body').removeClass('sidebar-open');
                    $('body').css('overflow', 'auto');
                }, 100);
            }
        });

        // Handle window resize
        $(window).on('resize', function() {
            if ($(window).width() > 768) {
                $('body').removeClass('sidebar-open');
                $('body').css('overflow', 'auto');
            }
        });

        // Auto-hide alerts
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 5000);
    });
</script>

    {{-- Stack untuk script tambahan dari child view --}}
    @stack('scripts')
</body>

</html>