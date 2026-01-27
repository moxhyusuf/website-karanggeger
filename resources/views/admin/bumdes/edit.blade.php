@extends('layouts.app')

@section('title', 'Edit Bumdes')

@section('content')
<div class="container mt-4">

    <h3 class="fw-bold mb-4">Edit Data Bumdes</h3>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.bumdes.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nama Bumdes --}}
                <div class="mb-3">
                    <label class="form-label">Nama Bumdes</label>
                    <input type="text" name="nama" class="form-control" value="{{ $item->nama }}" required>
                </div>

                {{-- Keterangan --}}
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" rows="4" class="form-control">{{ $item->keterangan }}</textarea>
                </div>

                {{-- Foto --}}
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">

                    @if($item->foto)
                        <div class="mt-2">
                            <label class="form-label">Foto Saat Ini:</label><br>
                            <img src="{{ Storage::url($item->foto) }}" width="150" class="rounded border">
                        </div>
                    @endif
                </div>

                {{-- Tombol aksi --}}
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.bumdes.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
