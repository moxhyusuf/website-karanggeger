@extends('layouts.app')

@section('title', 'Tambah Galeri')
@section('page-title', 'Tambah Galeri')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h5>Form Tambah Galeri</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Judul -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
                        </div>

                        <!-- Kategori -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="all">All</option>
                                <option value="kegiatan">Kegiatan</option>
                                <option value="event">Event</option>
                                <option value="pembangunan">Pembangunan</option>
                                <option value="lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi') }}</textarea>
                    </div>

                    <!-- Gambar -->
                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>

                    <!-- Tombol -->
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</section>
@endsection
