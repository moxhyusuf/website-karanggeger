@extends('layouts.app')

@section('title', 'Edit Berita')
@section('page-title', 'Edit Berita')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h5>Form Edit Berita</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.berita.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Judul -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
                        </div>

                        <!-- Tanggal -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tgl_berita" class="form-control" value="{{ old('tgl_berita', $berita->tgl_berita) }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Penulis -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="nmpenulis" class="form-control" value="{{ old('nmpenulis', $berita->nmpenulis) }}" required>
                        </div>

                        <!-- Gambar -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Gambar (opsional)</label><br>
                            @if($berita->image)
                                <img src="{{ asset('storage/' . $berita->image) }}" width="150" class="mb-2 rounded border">
                            @endif
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <!-- Isi Berita -->
                    <div class="mb-3">
                        <label class="form-label">Isi Berita</label>
                        <textarea name="narasiberita" class="form-control" rows="5" required>{{ old('narasiberita', $berita->narasiberita) }}</textarea>
                    </div>

                    <!-- Tombol -->
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Update
                        </button>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</section>
@endsection
