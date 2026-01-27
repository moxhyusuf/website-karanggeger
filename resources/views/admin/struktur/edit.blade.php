@extends('layouts.app')

@section('title', 'Edit Struktur')

@section('content')
<div class="container mt-4">

    <h3>Edit Struktur Organisasi</h3>

    <div class="card mt-3">
        <div class="card-body">

            <form action="{{ route('admin.struktur.update', $struktur->id) }}" 
                  method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Gambar Sekarang:</label>
                    @if($struktur->gambar)
                        <div>
                            <img src="{{ asset('storage/' . $struktur->gambar) }}" width="200">
                        </div>
                    @else
                        <p class="text-muted">Belum ada gambar</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Ganti Gambar (opsional)</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.struktur.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection
