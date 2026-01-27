@extends('layouts.app')

@section('title', 'Edit Sejarah')
@section('page-title', 'Edit Sejarah')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <form action="{{ route('admin.sejarah.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label>Isi Sejarah</label>
                        <textarea name="sejarah" class="form-control" rows="8" required>{{ old('sejarah', $item->sejarah) }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>Gambar (opsional)</label><br>

                        @if($item->img)
                        <img src="{{ asset('storage/'.$item->img) }}" alt="" width="200" class="mb-2">
                        @endif

                        <input type="file" name="img" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="{{ route('admin.sejarah.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>

    </div>
</section>
@endsection