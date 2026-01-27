@extends('layout.app')

@section('title', 'geografis')
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

<section id="program_unggulan" class="work-process section">
    <div class="container section-title" data-aos="fade-up">
        <h2>PROGRAM UNGGULAN DESA</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

            @foreach ($item as $program)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ 200 + ($loop->index * 100) }}">
                <div class="steps-item">

                    <div class="steps-image">
                        <img src="{{ asset('storage/' . $program->img) }}"
                            alt="{{ $program->nama_program }}"
                            class="img-fluid" loading="lazy">
                    </div>

                    <div class="steps-content">
                        <div class="steps-number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <h3>{{ $program->nama_program }}</h3>
                        <p>{{ $program->keterangan }}</p>
                    </div>

                </div>
            </div>
            @endforeach

        </div>



    </div>

</section>

@endsection