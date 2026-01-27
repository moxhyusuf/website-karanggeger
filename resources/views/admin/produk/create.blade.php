@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container mt-4">

    <h3>Tambah Produk</h3>

    <div class="card mt-3">
        <div class="card-body">

            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Produk</label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection