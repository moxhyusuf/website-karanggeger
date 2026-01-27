@extends('layouts.app')

@section('title', 'Tambah Bumdes')

@section('content')
<div class="container mt-4">

    <h3 class="fw-bold mb-4">Tambah Data Bumdes</h3>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.bumdes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Nama Bumdes --}}
                <div class="mb-3">
                    <label class="form-label">Nama Bumdes</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Bumdes" required>
                </div>

                {{-- Keterangan --}}
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" rows="4" class="form-control" placeholder="Keterangan tambahan..."></textarea>
                </div>

                {{-- Foto --}}
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                {{-- Tombol aksi --}}
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
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
