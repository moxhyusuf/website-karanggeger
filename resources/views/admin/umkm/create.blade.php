@extends('layouts.app')

@section('title', 'Tambah UMKM')

@section('content')
<div class="container mt-4">

    <h3>Tambah Data UMKM</h3>

    <div class="card mt-3">
        <div class="card-body">

            <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Baris 1 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Nama Produk</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control" value="{{ old('harga') }}" required>
                        </div>
                    </div>
                </div>

                {{-- Baris 2 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi') }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- Baris 3 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2">{{ old('alamat') }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>WhatsApp</label>
                            <input type="text" name="wa" class="form-control" value="{{ old('wa') }}" required>
                        </div>
                    </div>
                </div>

                {{-- Baris 4 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label>Gambar Produk</label>
                            <input type="file" name="media[]" class="form-control" multiple>
                            <small class="text-muted">Bisa pilih lebih dari satu gambar</small>
                        </div>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
