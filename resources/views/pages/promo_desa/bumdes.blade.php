@extends('layout.app')

@section('title', 'BUMDes Desa')

@section('content')

<main class="main">

    {{-- Page Header --}}
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}"></a></li>
                    <li class="current">BUMDes Desa</li>
                </ol>
            </nav>
        </div>
    </div>

</main>

<section id="bumdes" class="py-5" style="background:#f5f8fb">

    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-2">Badan Usaha Milik Desa</h2>
            <p class="text-muted">
                Informasi Ekonomi & Potensi Usaha Desa Laweyan.
            </p>
        </div>

        <div class="row justify-content-center">

            @forelse($bumdes as $item)

                <div class="col-lg-4 col-md-6 mb-4 d-flex"
                    data-aos="zoom-in"
                    data-aos-delay="{{ $loop->iteration * 120 }}">

                    <div class="bumdes-card shadow bg-white rounded-4 overflow-hidden w-100">

                        {{-- Foto --}}
                        <div class="bumdes-img-wrapper">
                            <img
                                src="{{ asset('storage/'.$item->foto) }}"
                                class="img-fluid"
                                alt=""
                            >
                        </div>

                        <div class="p-4">
                            {{-- Nama --}}
                            <h5 class="fw-bold text-dark mb-2">{{ $item->nama }}</h5>

                            {{-- deskripsi --}}
                            <p class="text-muted small text-clamp"
                               title="{{ $item->keterangan }}">
                                {{ $item->keterangan }}
                            </p>

                        </div>

                    </div>
                </div>

            @empty

                <p class="text-center text-muted"><em>Belum ada data BUMDes</em></p>

            @endforelse

        </div>

    </div>
</section>


{{-- CSS FINAL --}}
<style>
.bumdes-card{
    border:0;
    transition:.35s;
}
.bumdes-card:hover{
    transform:translateY(-7px);
    box-shadow:0 18px 35px rgba(0,0,0,.08) !important;
}

/* cover banner style */
.bumdes-img-wrapper{
    width:100%;
    height:230px;
    overflow:hidden;
    border-bottom:4px solid #0275d8;
}
.bumdes-img-wrapper img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.3s;
}
.bumdes-img-wrapper img:hover{
    transform:scale(1.08);
}

/* Limit text (3 baris) */
.text-clamp{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow:hidden;
}
</style>

@endsection
