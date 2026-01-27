@extends('layouts.app')

@section('title', 'Detail Berita')
@section('page-title', 'Detail Berita')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card shadow-sm">

            {{-- HEADER --}}
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.berita.index') }}"
                   class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>

                <a href="{{ route('admin.berita.edit', $berita->id_berita) }}"
                   class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i> Edit Berita
                </a>
            </div>

            {{-- BODY --}}
            <div class="card-body">

                {{-- JUDUL --}}
                <h4 class="fw-bold mb-2">{{ $berita->judul }}</h4>

                {{-- META --}}
                <div class="text-muted small mb-4">
                    <i class="far fa-calendar"></i>
                    {{ \Carbon\Carbon::parse($berita->tgl_berita)->format('d F Y') }}
                    &nbsp;|&nbsp;
                    <i class="far fa-user"></i>
                    {{ $berita->nmpenulis }}
                    &nbsp;|&nbsp;
                    <i class="fas fa-hashtag"></i>
                    ID {{ $berita->id_berita }}
                </div>

                <hr>

                <div class="row">

                    {{-- GAMBAR --}}
                    <div class="col-md-4 mb-3">
                        @if($berita->image)
                            <img src="{{ asset('storage/' . $berita->image) }}"
                                 alt="Gambar Berita"
                                 class="img-fluid rounded shadow-sm"
                                 style="max-height: 220px; width:100%; object-fit: cover;">
                        @else
                            <div class="border rounded p-4 text-center text-muted fst-italic">
                                Tidak ada gambar
                            </div>
                        @endif
                    </div>

                    {{-- ISI BERITA --}}
                    <div class="col-md-8">
                        <h6 class="fw-semibold mb-2">Isi Berita</h6>

                        <div class="berita-content"
                             style="
                                line-height: 1.8;
                                font-size: 15px;
                                text-align: justify;
                             ">
                            {!! nl2br(e($berita->narasiberita)) !!}
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
@endsection
