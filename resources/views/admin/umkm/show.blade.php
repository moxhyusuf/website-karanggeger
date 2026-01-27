@extends('layouts.app')

@section('title', 'Detail UMKM')

@section('content')
<div class="container mt-4">

    <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <div class="card mb-4">
        <div class="card-body">

            <h4 class="fw-bold mb-3">{{ $umkm->nama }}</h4>

            <table class="table table-bordered">
                <tr>
                    <th width="200">Harga</th>
                    <td>Rp {{ number_format($umkm->harga, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $umkm->deskripsi }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $umkm->alamat ?? '-' }}</td>
                </tr>
                <tr>
                    <th>WhatsApp</th>
                    <td>
                        <a href="https://wa.me/{{ $umkm->wa }}"
                           target="_blank"
                           class="btn btn-success btn-sm">
                            Chat WhatsApp
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    {{-- GALERI FOTO --}}
    <div class="card">
        <div class="card-header fw-bold">
            Galeri Foto UMKM
        </div>

        <div class="card-body">
            @if ($umkm->media->count())
                <div class="row">
                    @foreach ($umkm->media as $img)
                        <div class="col-md-3 col-sm-4 col-6 mb-3">
                            <img src="{{ asset('storage/'.$img->file_path) }}"
                                 class="img-fluid rounded border"
                                 style="height:150px; object-fit:cover;">
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-muted mb-0">Belum ada foto.</p>
            @endif
        </div>
    </div>

</div>
@endsection
