@extends('layouts.app')

@section('title', 'Edit Program')
@section('page-title', 'Edit Program')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <form action="{{ route('admin.program.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label>Nama Program</label>
                        <input type="text" name="nama_program" class="form-control"
                            value="{{ old('nama_program', $item->nama_program) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Keterangan Program</label>
                        <textarea name="keterangan" class="form-control" rows="6" required>{{ old('keterangan', $item->keterangan) }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>Gambar Program (opsional)</label><br>

                        @if($item->img)
                        <img src="{{ asset('storage/'.$item->img) }}" alt="" width="200" class="mb-2">
                        @endif

                        <input type="file" name="img" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="{{ route('admin.program.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>

    </div>
</section>
@endsection