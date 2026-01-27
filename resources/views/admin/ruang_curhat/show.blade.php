@extends('layouts.app')

@section('title', 'Detail Kesan & Pesan')

@section('content')

<div class="container-fluid mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Detail Kesan & Pesan Warga</h3>
            <small class="text-muted">Informasi lengkap pengaduan warga</small>
        </div>
        <a href="{{ route('admin.ruang_curhat.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="row">
        {{-- Informasi Utama --}}
        <div class="col-lg-7 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <i class="bi bi-person-lines-fill"></i> Data Pelapor
                </div>

                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <td width="35%" class="fw-semibold">Status Pelapor</td>
                            <td>{{ $data->status_pelapor }}</td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Nama Lengkap</td>
                            <td>{{ $data->nama_lengkap }}</td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Nomor HP</td>
                            <td>{{ $data->nomor_hp }}</td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Alamat</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>

                        <tr>
                            <td class="fw-semibold">Waktu Pengaduan</td>
                            <td>
                                <span class="badge bg-light text-dark">
                                    {{ $data->created_at->format('d M Y H:i') }}
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        {{-- Foto --}}
        <div class="col-lg-5 mb-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-secondary text-white">
                    <i class="bi bi-image"></i> Foto Pendukung
                </div>

                <div class="card-body text-center">
                    @if($data->foto_pendukung)
                        <a href="{{ asset('uploads/kesan_pesan/'.$data->foto_pendukung) }}" target="_blank">
                            <img
                                src="{{ asset('uploads/kesan_pesan/'.$data->foto_pendukung) }}"
                                class="img-fluid rounded shadow-sm"
                                style="max-height: 320px;"
                            >
                        </a>
                        <small class="d-block mt-2 text-muted">
                            Klik gambar untuk memperbesar
                        </small>
                    @else
                        <div class="text-muted py-5">
                            <i class="bi bi-image-alt fs-1"></i>
                            <p class="mb-0">Tidak ada foto</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Isi Pengaduan --}}
    <div class="card shadow-sm border-0 mt-3">
        <div class="card-header bg-info text-white">
            <i class="bi bi-chat-left-text"></i> Isi Pengaduan
        </div>
        <div class="card-body">
            <div class="p-3 bg-light rounded" style="white-space: pre-line;">
                {{ $data->isi_pengaduan }}
            </div>
        </div>
    </div>

</div>

@endsection
