@extends('layouts.app')

@section('title', 'Detail Program')
@section('page-title', 'Detail Program')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h4>{{ $program->nama_program }}</h4>
            </div>

            <div class="card-body">

                @if ($program->img)
                <img src="{{ asset('storage/' . $program->img) }}" class="img-fluid mb-3" width="400">
                @endif

                <p><strong>Keterangan:</strong></p>
                <p>{{ $program->keterangan }}</p>

                <a href="{{ route('admin.program.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('admin.program.edit', $program->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Yakin ingin menghapus program ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>

            </div>
        </div>

    </div>
</section>
@endsection