@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="container mt-4">

    <h3>Edit Produk</h3>

    <div class="card mt-3">
        <div class="card-body">

            <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Produk Sekarang</label><br>
                    @if($produk->image)
                    <img src="{{ asset('storage/' . $produk->image) }}" alt="gambar" width="120">
                    @else
                    <p class="text-muted">Tidak Ada Gambar</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Ganti Gambar (Opsional)</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>


            </form>

        </div>
    </div>

</div>
@endsection