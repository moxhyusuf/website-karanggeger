<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Desa Laweyan</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="/assets/img/logoL.png" rel="icon" />
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link
        href="/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet" />
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
        href="/assets/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet" />
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="/assets/img/logoL.png" alt="Logo Desa Laweyan" class="logo-img">
                <span class="sitename">DESA LAWEYAN</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#sejarah">Sejarah</a></li>
                            <li><a href="#geografis">Geografis</a></li>
                            <li><a href="#wilayah">Pembagian Wilayah</a></li>
                            <li><a href="#kependudukan">Data Kependudukan</a></li>
                            <li><a href="#kades">Profil Kepala Desa</a></li>
                            <li><a href="#struktural">Struktur Pemerintah Desa</a></li>
                            <li><a href="#kelembagaan">Kelembagaan desa</a></li>
                            <li><a href="#visi">Visi & Misi</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Promo Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Program Unggulan</a></li>
                            <li><a href="#">Produk Unggulan</a></li>
                            <li><a href="#">Ruang UMKM</a></li>
                            <li><a href="#">BUMDesa dan KDMP</a></li>
                        </ul>
                    </li>
                    <li><a href="#portfolio">Berita</a></li>
                    <li><a href="#team">Pengaduan</a></li>



                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#about">Get Started</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Bagian Teks -->
                    <div
                        class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Selamat Datang,</h1>
                        <h1>di Website Resmi Laweyan Probolinggo</h1>
                        <p>Laweyan Tertib, Aman, dan Berjaya!!</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a
                                href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center">
                                <i class="bi bi-play-circle"></i><span>Watch Video</span>
                            </a>
                        </div>
                    </div>

                    <!-- Bagian Gambar -->
                    <div
                        class="col-lg-6 order-1 order-lg-2 hero-img"
                        data-aos="zoom-out"
                        data-aos-delay="200">
                        <img
                            src="/assets/img/kades1.png"
                            class="img-fluid animated"
                            alt="" width="100%" />
                    </div>
                </div>
            </div>

        </section>
        <!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">
            <div class="container" data-aos="zoom-in">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 2,
                                    "spaceBetween": 40
                                },
                                "480": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 60
                                },
                                "640": {
                                    "slidesPerView": 4,
                                    "spaceBetween": 80
                                },
                                "992": {
                                    "slidesPerView": 5,
                                    "spaceBetween": 120
                                },
                                "1200": {
                                    "slidesPerView": 6,
                                    "spaceBetween": 120
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-1.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-2.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-3.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-4.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-5.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-6.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-7.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="/assets/img/clients/clients-8.webp"
                                class="img-fluid"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section SEJARAH DESA LAWEYAN -->
        <section
            id="sejarah"
            class="section why-us light-background"
            data-builder="section">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                        <div
                            class="content px-xl-5"
                            data-aos="fade-up"
                            data-aos-delay="100">
                            <h3>
                                <span>Sejarah </span><strong>Desa Laweyan</strong>
                            </h3>

                        </div>

                        <div
                            class="faq-container px-xl-5"
                            data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="faq-item faq-active">
                                <h3>
                                    <span>"</span> Asal-Usul
                                </h3>
                                <div class="faq-content">
                                    <p style="text-align: justify; text-justify: inter-word;">
                                        Pada awalnya, Desa Laweyan adalah gabungan dari 3 Desa, yaitu Desa Muneng Barat, Desa Muneng Utara dan Desa Pohsangit Barat. Desa Muneng Barat Kepala Desanya P. Atmo, Desa Muneng Utara Kepala Desanya P. Kerto sedang Desa Posangit Barat Kepala Desannya Pak Damo. Pak Atmo adalah anak dari Pak Damo sedang Pak Kerto adalah menantu dari Pak Damo, Karena Tiga Desa ini dipimpin oleh satu keluarga, maka diadakan musyawarah untuk mengabung tiga desa menjadi satu bernama Desa Laweyan. Diadakan Pilkades dari Tiga Desa, maka dimenangkan oleh Pak Damo, sejak saat itulah sekitar tahun 1954 terbentuk desa baru bernama Laweyan.
                                    </p>
                                    <p style="text-align: justify; text-justify: inter-word;">Ada dua versi terbentuknya Desa Laweyan yang pertama adalah, seperti yang terpapar di atas, sedang versi yang kedua adalah: berdasarkan UU no 5 Tahun 1979, ada Tiga Dusun yang bernama Dusun Manis, Dusun Karang Tengah dan Dusun Krajan dimana masing-masing Dusun terdiri dari beberapa Blok, ada Blok Parsi, Blok Dampit, Blok Trebung, Blok Pasar Juwet, Blok badok dan lain-lain yang sampai sekarang masih ada. Dari tiga dusun itulah di bentuk satu desa yang bernama Desa Laweyan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->


                            <!-- End Faq item-->
                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img
                            src="/assets/img/why-us.png"
                            class="img-fluid"
                            alt=""
                            data-aos="zoom-in"
                            data-aos-delay="100" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Section GEOGRAFIS DESA LAWEYAN -->
        <section id="geografis" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>🌍 Geografis Desa</h2>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <!-- Deskripsi + Peta -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="card shadow p-4 h-100">
                            <p>
                                Laweyan merupakan salah satu desa yang berada di wilayah Kecamatan Sumberasih,
                                berlokasi 12 km di arah barat Kota Kabupaten Probolinggo. Desa ini memiliki luas
                                <strong>186 Ha</strong>, terdiri dari <span class="text-success fw-bold">105 Ha tanah sawah 🌾</span>
                                dan <span class="text-warning fw-bold">81 Ha tanah kering 🌳</span>.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Peta Google Maps -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12645.844993083345!2d113.16366148015034!3d-7.7903470349008845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7b2be4f496587%3A0xe0ef5625f39a1563!2sLaweyan%2C%20Kec.%20Sumberasih%2C%20Kabupaten%20Probolinggo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1757560871726!5m2!1sid!2sid"
                            width="100%" height="300" style="border:0;"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Batas Wilayah -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card p-3 bg-primary-subtle">
                            <h5>🧭 Sebelah Utara</h5>
                            <p>Kelurahan Triwung Kidul, Kecamatan Kademangan, Kota Probolinggo</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 bg-primary-subtle">
                            <h5>🧭 Sebelah Timur</h5>
                            <p>Desa Pohsangit Leres, Kecamatan Sumberasih</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 bg-primary-subtle">
                            <h5>🧭 Sebelah Selatan</h5>
                            <p>Desa Muneng Kidul, Kecamatan Sumberasih</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 bg-primary-subtle">
                            <h5>🧭 Sebelah Barat</h5>
                            <p>Desa Muneng, Kecamatan Sumberasih</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- Section PEMBAGIAN WILAYAH DESA LAWEYAN -->
        <section id="wilayah" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>🏘️Pembagian Wilayah</h2>
            </div>

            <div class="container py-5">
                <!-- Ringkasan Dusun (Card Grid) -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card shadow p-4 h-100">
                            <h5>🏡 Dusun Manis</h5>
                            <p>RT: 1, 2, 3, 4, 5 <br> RW: 1, 2, 3</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-4 h-100">
                            <h5>🏡 Dusun Manis II</h5>
                            <p>RT: 6, 7, 8, 9, 10, 11 <br> RW: 4, 5</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow p-4 h-100">
                            <h5>🏡 Dusun Ombenan</h5>
                            <p>RT: 12, 13, 14, 15, 16, 17 <br> RW: 6, 7</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow p-4 h-100">
                            <h5>🏡 Dusun Karang Tengah</h5>
                            <p>RT: 18, 19, 20, 21, 22, 23 <br> RW: 8, 9</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow p-4 h-100">
                            <h5>🏡 Dusun Krajan</h5>
                            <p>RT: 24, 25, 26, 27, 28, 29, 30 <br> RW: 10, 11, 12</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- Section DATA KEPENDUDUKAN DESA LAWEYAN -->
        <section id="kependudukan" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>📊 Data Kependudukan </h2>
            </div>

            <div class="container">
                <h3>Jumlah Penduduk Berdasarkan Jenis Kelamin</h3>
                <div class="chart-container">
                    <canvas id="genderChart"></canvas>
                </div>

                <h3 class="mt-5">Struktur Usia</h3>
                <div class="chart-container">
                    <canvas id="ageChart"></canvas>
                </div>

                <h3 class="mt-5">Jenis Pekerjaan</h3>
                <div class="chart-container">
                    <canvas id="jobChart"></canvas>
                </div>

                <h3 class="mt-5">Tenaga Kerja</h3>
                <div class="chart-container">
                    <canvas id="workforceChart"></canvas>
                </div>

                <h3 class="mt-5">Agama</h3>
                <div class="chart-container">
                    <canvas id="religionChart"></canvas>
                </div>

                <h3 class="mt-5">Jenis Pendidikan</h3>
                <div class="chart-container">
                    <canvas id="educationChart"></canvas>
                </div>

                <h3 class="mt-5">Tamat Sekolah</h3>
                <div class="chart-container">
                    <canvas id="graduateChart"></canvas>
                </div>
            </div>

            <style>
                .chart-container {
                    position: relative;
                    height: 300px;
                    width: 500px;
                    margin: 20px auto;
                    /* biar center */
                }
            </style>




        </section>
        <!-- Section PROFIL KEPALA DESA LAWEYAN -->
        <section id="kades" class="skills section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <img
                            src="/assets/img/kades1.png"
                            class="img-fluid"
                            alt="" />
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>PROFIL KEPALA DESA LAWEYAN BAPAK HJ SUWADI </h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section STRUKTURAL DESA LAWEYAN -->
        <section id="struktural" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>STRUKTUR PEMERINTAHAN DESA LAWEYAN</h2>
            </div>

            <div class="container">
                <div class="row">

                    <img
                        src="/assets/img/struktural.jpeg"
                        class="img-fluid"
                        alt="" />

                </div>
            </div>
            </div>

        </section>
        <!-- Section KELEMBAGAAN DESA LAWEYAN -->
        <section id="kelembagaan" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>KELEMBAGAAN DESA</h2>
            </div>

            <div class="container">
                <table style="width:100%; border-collapse:collapse; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 3px 8px rgba(0,0,0,0.1);">
                    <thead style="background:#3b82f6; color:#fff;">
                        <tr>
                            <th style="padding:10px;">No</th>
                            <th>Nama Lembaga</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                            <th>Visual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding:8px; text-align:center;">1</td>
                            <td>LKMD/LPMD</td>
                            <td>4</td>
                            <td>3</td>
                            <td>7</td>
                            <td>
                                <div style="background:#eee; border-radius:10px; overflow:hidden; height:12px;">
                                    <div style="width:20%; background:#3b82f6; height:12px;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:8px; text-align:center;">2</td>
                            <td>TP-PKK</td>
                            <td>0</td>
                            <td>23</td>
                            <td>23</td>
                            <td>
                                <div style="background:#eee; border-radius:10px; overflow:hidden; height:12px;">
                                    <div style="width:70%; background:#ef4444; height:12px;"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </section>
        <!-- Section VISI & MISI DESA LAWEYAN -->
        <section id="visi" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Visi dan Misi</h2>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <!-- VISI -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-4 border rounded shadow-sm bg-light h-100">
                            <h3 class="text-center mb-3"><strong>"Visi</strong></h3>
                            <p style="text-align: justify; text-justify: inter-word;">
                                Visi adalah suatu gambaran tentang keadaan masa depan, berisikan cita dan citra yang ingin diwujudkan, dibangun melalui proses refleksi dan proyeksi yang digali dari nilai-nilai luhur yang dianut oleh seluruh komponen pemerintahan desa sesuai kewenangan lokal desa.
                            </p>
                            <p style="text-align: justify; text-justify: inter-word;">
                                <em>“Terwujudnya Desa Laweyan yang Mandiri menuju Masyarakat yang Sejahtera, Sehat, Cerdas, Aman, Berakhlaq dan Berwawasan Lingkungan.”</em>
                            </p>
                            <p style="text-align: justify; text-justify: inter-word;">
                                Pernyataan visi tersebut mengandung makna terjalinnya sinergi yang dinamis antara masyarakat, Pemerintah Desa Laweyan dan seluruh Lembaga Desa dalam merealisasi pembangunan desa secara terpadu.
                            </p>
                        </div>
                    </div>

                    <!-- MISI -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-4 border rounded shadow-sm bg-white h-100">
                            <h3 class="text-center mb-3"><strong>"Misi</strong></h3>
                            <ol style="text-align: justify; text-justify: inter-word;">
                                <li>Menciptakan tata kelola pemerintahan yang baik berdasarkan demokratisasi, transparansi, penegakan hukum, berkeadilan, kesetaraan gender dan mengutamakan pelayanan kepada masyarakat.</li>
                                <li>Meningkatkan pembangunan di bidang ekonomi untuk meningkatkan kesejahteraan masyarakat Desa.</li>
                                <li>Meningkatkan Pendapatan Asli Desa.</li>
                                <li>Meningkatkan pembangunan di bidang kesehatan untuk mendorong derajat kesehatan masyarakat agar dapat bekerja lebih optimal dan memiliki harapan hidup yang lebih panjang.</li>
                                <li>Meningkatkan pembangunan di bidang pendidikan baik formal maupun informal yang mudah diakses dan dinikmati seluruh warga masyarakat tanpa terkecuali sehingga mampu menghasilkan insan intelektual, inovatif dan enterpreneur (wirausahawan).</li>
                                <li>Mewujudkan dan mendorong terwujudnya ketentraman, ketertiban dan keamanan masyarakat.</li>
                                <li>Menjadikan masyarakat Desa Laweyan berbudi pekerti luhur, tangguh, sehat jasmani dan rohani, cerdas, patriotik, berdisiplin, produktif, beriman dan bertaqwa serta demokratis.</li>
                                <li>Mewujudkan dan mengembangkan kegiatan keagamaan untuk menambah keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>
                            Subscribe to our newsletter and receive the latest news about
                            our products and services!
                        </p>
                        <form
                            action="forms/newsletter.php"
                            method="post"
                            class="php-email-form">
                            <div class="newsletter-form">
                                <input type="email" name="email" /><input
                                    type="submit"
                                    value="Subscribe" />
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your subscription request has been sent. Thank you!
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">DESA LAWEYAN</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Kecamatan Sumberasih</p>
                        <p>Kabupaten Probolinggo</p>
                        <p class="mt-3">
                            <strong>Phone:</strong> <span>+1 5589 55488 55</span>
                        </p>
                        <p><strong>Email:</strong> <span>desalaweyan@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                        <li>
                            <i class="bi bi-chevron-right"></i> <a href="#">Tentang Desa</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i> <a href="#">Promo Desa</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Pengaduan</a>
                        </li>
                    </ul>
                </div>


                <div class="col-lg-3 col-md-12">
                    <h4>Follow Us</h4>
                    <p>
                        Desa Laweyan Probolinggo
                    </p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright2025</span> <strong class="px-1 sitename">ATP</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a
        href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // === Jenis Kelamin ===
        new Chart(document.getElementById('genderChart'), {
            type: 'pie',
            data: {
                labels: ['Laki-Laki', 'Perempuan'],
                datasets: [{
                    data: @json($data['gender']),
                    backgroundColor: ['#3498db', '#e74c3c']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // === Struktur Usia ===
        new Chart(document.getElementById('ageChart'), {
            type: 'bar',
            data: {
                labels: ['0-14', '15-64', '>65'],
                datasets: [{
                        label: 'Laki-Laki',
                        data: @json($data['usia']['laki']),
                        backgroundColor: '#3498db'
                    },
                    {
                        label: 'Perempuan',
                        data: @json($data['usia']['perempuan']),
                        backgroundColor: '#e74c3c'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // === Jenis Pekerjaan ===
        new Chart(document.getElementById('jobChart'), {
            type: 'bar',
            data: {
                labels: [
                    'Belum Kerja', 'Buruh', 'Petani', 'Nelayan', 'Dagang',
                    'PNS', 'Pensiunan', 'TNI/POLRI', 'Guru', 'Karyawan Swasta',
                    'Karyawan BUMN', 'Honorer', 'Wiraswasta', 'Pelajar', 'Lainnya'
                ],
                datasets: [{
                    label: 'Jumlah',
                    data: @json($data['pekerjaan']),
                    backgroundColor: '#2ecc71'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // === Tenaga Kerja ===
        new Chart(document.getElementById('workforceChart'), {
            type: 'doughnut',
            data: {
                labels: ['Angkatan Kerja', 'Bukan Angkatan Kerja'],
                datasets: [{
                    data: @json($data['tenagaKerja']),
                    backgroundColor: ['#1abc9c', '#95a5a6']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // === Agama ===
        new Chart(document.getElementById('religionChart'), {
            type: 'pie',
            data: {
                labels: ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha'],
                datasets: [{
                    data: @json($data['agama']),
                    backgroundColor: ['#f1c40f', '#e67e22', '#e74c3c', '#2ecc71', '#3498db']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // === Jenis Pendidikan ===
        new Chart(document.getElementById('educationChart'), {
            type: 'bar',
            data: {
                labels: [
                    'Tidak Sekolah', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'S2', 'S1'
                ],
                datasets: [{
                    label: 'Jumlah',
                    data: @json($data['pendidikan']),
                    backgroundColor: '#9b59b6'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // === Tamat Sekolah ===
        new Chart(document.getElementById('graduateChart'), {
            type: 'bar',
            data: {
                labels: [
                    'S1', 'Tidak Sekolah', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'S2'
                ],
                datasets: [{
                    label: 'Jumlah',
                    data: @json($data['tamatSekolah']),
                    backgroundColor: '#34495e'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
