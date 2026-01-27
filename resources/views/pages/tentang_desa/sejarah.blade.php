@extends('layout.app')

@section('title', 'sejarah')
@section('content')

<!-- Section SEJARAH DESA LAWEYAN -->
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html"></a></li>
                    <li class="current"></li>
                </ol>
            </nav>

        </div>
    </div><!-- End Page Title -->



</main>

<section
    id="sejarah"
    class="section why-us light-background"
    data-builder="section">
    <div class="container-fluid">
        <div class="row gy-6">
            <div
                class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                <div
                    class="content px-xl-5"
                    data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>
                        <span>Sejarah </span><strong>Desa Karanggeger</strong>
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

                            @if($sejarah)
                            <p style="text-align: justify; text-justify: inter-word;">
                                {{$sejarah->sejarah}}
                            </p>
                            @else
                            <p>Belum ada data sejarah yang ditambahkan.</p>
                            @endif

                        </div>

                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                    <!-- End Faq item-->


                    <!-- End Faq item-->
                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                @if($sejarah && $sejarah->img)
                <img
                    src="{{ asset('storage/'.$sejarah->img) }}"
                    class="img-fluid"
                    alt="Foto Sejarah Desa">
                @else
                <img
                    src="/assets/img/why-us.png"
                    class="img-fluid"
                    alt="Default Image">
                @endif
            </div>



        </div>
    </div>
</section>

@endsection