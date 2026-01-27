@extends('layouts.app')

@section('title', 'Edit Hero')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Hero Section</h5>
        </div>

        <div class="card-body p-4">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('admin.hero.update', $hero->id) }}"
                  id="heroForm">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Judul Utama</label>
                        <input type="text"
                               name="judul_1"
                               class="form-control"
                               value="{{ old('judul_1', $hero->judul_1) }}"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Judul Kedua</label>
                        <input type="text"
                               name="judul_2"
                               class="form-control"
                               value="{{ old('judul_2', $hero->judul_2) }}">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Subtitle</label>
                        <input type="text"
                               name="subtitle"
                               class="form-control"
                               value="{{ old('subtitle', $hero->subtitle) }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gambar Saat Ini</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$hero->gambar) }}"
                                 class="img-fluid rounded"
                                 style="max-height:180px">
                        </div>
                        <input type="file"
                               name="gambar"
                               class="form-control"
                               accept="image/*">
                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti gambar
                        </small>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Urutan</label>
                        <input type="number"
                               name="urutan"
                               class="form-control"
                               value="{{ old('urutan', $hero->urutan) }}">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select name="aktif" class="form-select">
                            <option value="1" {{ $hero->aktif ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ !$hero->aktif ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                    </div>

                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.hero.index') }}" class="btn btn-light">
                        Kembali
                    </a>
                    <button class="btn btn-warning px-4" id="btnSubmit">
                        Update
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

{{-- Anti double submit --}}
<script>
document.getElementById('heroForm').addEventListener('submit', function () {
    const btn = document.getElementById('btnSubmit');
    btn.disabled = true;
    btn.innerHTML = 'Mengupdate...';
});
</script>
@endsection
