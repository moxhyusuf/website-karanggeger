@extends('layouts.app')

@section('title', 'Edit Prestasi Desa')
@section('page-title', 'Edit Prestasi Desa')

@section('content')
<div class="container-fluid mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Edit Prestasi Desa</h3>
        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Judul Prestasi -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Judul Prestasi</label>
                        <input type="text" name="judul_prestasi" class="form-control"
                               value="{{ old('judul_prestasi', $prestasi->judul_prestasi) }}" required>
                        @error('judul_prestasi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Tanggal Prestasi -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Prestasi</label>
                        <input type="date" name="tanggal_prestasi" class="form-control"
                               value="{{ old('tanggal_prestasi', $prestasi->tanggal_prestasi) }}" required>
                        @error('tanggal_prestasi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Foto Utama -->
                <div class="mb-3">
                    <label class="form-label">Foto Utama</label>
                    <div class="d-flex align-items-center mb-2 gap-3">
                        @if ($prestasi->foto_utama)
                            <img src="{{ asset('storage/' . $prestasi->foto_utama) }}" 
                                 style="width: 150px; height:120px; object-fit:cover; border-radius:5px;">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                        <input type="file" name="foto_utama" class="form-control">
                    </div>
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                    @error('foto_utama')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Tombol Save -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Update Prestasi
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
