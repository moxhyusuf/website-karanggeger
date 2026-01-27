@extends('layouts.app')

@section('title', 'Edit Galeri')
@section('page-title', 'Edit Galeri')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h5>Form Edit Galeri</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.galeri.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Judul -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control"
                                   value="{{ old('judul', $item->judul) }}" required>
                        </div>

                        <!-- Kategori -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="all" {{ $item->kategori == 'all' ? 'selected' : '' }}>All</option>
                                <option value="kegiatan" {{ $item->kategori == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                                <option value="event" {{ $item->kategori == 'event' ? 'selected' : '' }}>Event</option>
                                <option value="pembangunan" {{ $item->kategori == 'pembangunan' ? 'selected' : '' }}>Pembangunan</option>
                                <option value="lain-lain" {{ $item->kategori == 'lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                    </div>

                    <!-- Gambar -->
                    <div class="mb-3">
                        <label class="form-label">Gambar (opsional)</label> <br>

                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" width="200" class="mb-2 rounded border">
                        @endif

                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <!-- Tombol aksi -->
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan Perubahan
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
