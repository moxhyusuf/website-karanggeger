@extends('layouts.app')

@section('title', 'Edit Visi & Misi')
@section('page-title', 'Edit Visi & Misi')

@section('content')
<div class="card">
    <div class="card-body">

        <h4>Edit Visi & Misi</h4>
        <hr>

        <form action="{{ route('admin.vismis.update', $vismis->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Visi -->
            <div class="form-group mb-3">
                <label for="visi">Visi</label>
                <textarea name="visi" id="visi" class="form-control" rows="4" required>{{ old('visi', $vismis->visi) }}</textarea>
            </div>

            <!-- Misi -->
            <div class="form-group mb-3">
                <label for="misi">Misi</label>
                <textarea name="misi" id="misi" class="form-control" rows="6" required>{{ old('misi', $vismis->misi) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.vismis.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>
</div>
@endsection
