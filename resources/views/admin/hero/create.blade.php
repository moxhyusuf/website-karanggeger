@extends('layouts.app')

@section('title', 'Tambah Hero')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Hero Section</h5>
        </div>

        <div class="card-body p-4">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('admin.hero.store') }}"
                  id="heroForm">
                @csrf

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Judul Utama</label>
                        <input type="text"
                               name="judul_1"
                               class="form-control"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Judul Kedua</label>
                        <input type="text"
                               name="judul_2"
                               class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Subtitle</label>
                        <input type="text"
                               name="subtitle"
                               class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gambar Hero</label>
                        <input type="file"
                               name="gambar"
                               class="form-control"
                               accept="image/*"
                               required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Urutan</label>
                        <input type="number"
                               name="urutan"
                               class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select name="aktif" class="form-select">
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>

                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.hero.index') }}" class="btn btn-light">
                        Kembali
                    </a>
                    <button class="btn btn-success px-4" id="btnSubmit">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>

{{-- ⛔ Anti double submit --}}
<script>
document.getElementById('heroForm').addEventListener('submit', function () {
    const btn = document.getElementById('btnSubmit');
    btn.disabled = true;
    btn.innerHTML = 'Menyimpan...';
});
</script>
@endsection
