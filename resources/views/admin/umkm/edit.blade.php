@extends('layouts.app')

@section('title', 'Edit UMKM')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3 class="fw-bold">Edit Data UMKM</h3>
        <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.umkm.update', $umkm->id) }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Baris 1: Nama + Harga --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text"
                                name="nama"
                                class="form-control"
                                value="{{ old('nama', $umkm->nama) }}"
                                required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number"
                                name="harga"
                                class="form-control"
                                value="{{ old('harga', $umkm->harga) }}"
                                required>
                        </div>
                    </div>
                </div>

                {{-- Baris 2: Deskripsi --}}
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                        class="form-control"
                        rows="4"
                        required>{{ old('deskripsi', $umkm->deskripsi) }}</textarea>
                </div>

                {{-- Baris 3: Alamat + WhatsApp --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat"
                                class="form-control"
                                rows="2">{{ old('alamat', $umkm->alamat) }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">WhatsApp</label>
                            <input type="text"
                                name="wa"
                                class="form-control"
                                value="{{ old('wa', $umkm->wa) }}"
                                required>
                        </div>
                    </div>
                </div>

                {{-- FOTO SAAT INI --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Foto Produk Saat Ini</label>

                    @if ($umkm->media->count())
                    <div class="row">
                        @foreach ($umkm->media as $media)
                        <div class="col-md-3 mb-3">
                            <div class="card shadow-sm h-100">

                                <img src="{{ asset('storage/' . $media->file_path) }}"
                                    class="rounded-top w-100"
                                    style="height:160px; object-fit:cover;"
                                    alt="Foto Produk">

                                <div class="card-body p-2">



                                    {{-- HAPUS FOTO --}}
                                    <button type="button"
                                        class="btn btn-danger btn-sm w-100 btn-hapus-foto"
                                        data-id="{{ $media->id }}">
                                        <i class="fas fa-trash"></i> Hapus Foto
                                    </button>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="text-muted">Belum ada foto produk.</p>
                    @endif
                </div>

                {{-- TAMBAH FOTO BARU --}}
                <div class="mb-3">
                    <label class="form-label">Tambah Foto Baru</label>
                    <input type="file"
                        name="media[]"
                        class="form-control"
                        multiple
                        accept="image/*">
                    <small class="text-muted">Bisa pilih lebih dari satu gambar</small>
                </div>

                {{-- TOMBOL --}}
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Perbarui Data
                    </button>
                    <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

{{-- SCRIPT HAPUS FOTO --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnHapusFoto = document.querySelectorAll('.btn-hapus-foto');

        btnHapusFoto.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const id = this.dataset.id;

                if (!confirm('Yakin ingin menghapus foto ini?')) return;

                // Disable button dan ubah text
                this.disabled = true;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menghapus...';

                // Kirim request DELETE
                fetch('/admin/umkm/media/' + id, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    })

                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            alert('Foto berhasil dihapus');
                            location.reload();
                        } else {
                            alert('Gagal menghapus foto: ' + (data.message || ''));
                            this.disabled = false;
                            this.innerHTML = '<i class="fas fa-trash"></i> Hapus Foto';
                        }
                    })
                    .catch(err => {
                        console.error('Error:', err);
                        alert('Terjadi kesalahan saat menghapus foto');
                        this.disabled = false;
                        this.innerHTML = '<i class="fas fa-trash"></i> Hapus Foto';
                    });
            });
        });
    });
</script>
@endsection