@extends('layouts.app')

@section('title', 'Tambah Program')
@section('page-title', 'Tambah Program')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Nama Program</label>
                        <input type="text" name="nama_program" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Keterangan Program</label>
                        <textarea name="keterangan" class="form-control" rows="6" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>Gambar Program (opsional)</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('admin.program.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>

    </div>
</section>
@endsection