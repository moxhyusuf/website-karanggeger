@extends('layouts.app')

@section('title','Tambah Petugas')
@section('page-title','Tambah Petugas')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.petugas.store') }}" method="POST">
            @csrf

            <div class="row">
                <!-- Nama -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>

                <!-- Username -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- No HP -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                </div>

                <!-- Jabatan -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Bidang -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bidang</label>
                        <input type="text" name="bidang" class="form-control" required>
                    </div>
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="text-right mt-3">
                <button class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('admin.petugas.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>
    </div>
</div>
@endsection
