@extends('layouts.app')

@section('title','Edit Petugas')
@section('page-title','Edit Petugas')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.petugas.update', $petugas->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <!-- Nama -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text"
                               name="nama"
                               class="form-control"
                               value="{{ $petugas->nama }}"
                               required>
                    </div>
                </div>

                <!-- Username -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text"
                               name="username"
                               class="form-control"
                               value="{{ $petugas->username }}"
                               required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- No HP -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text"
                               name="no_hp"
                               class="form-control"
                               value="{{ $petugas->no_hp }}"
                               required>
                    </div>
                </div>

                <!-- Jabatan -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text"
                               name="jabatan"
                               class="form-control"
                               value="{{ $petugas->jabatan }}"
                               required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Bidang -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bidang</label>
                        <input type="text"
                               name="bidang"
                               class="form-control"
                               value="{{ $petugas->bidang }}"
                               required>
                    </div>
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password (opsional)</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Kosongkan jika tidak diganti">
                    </div>
                </div>
            </div>

            <div class="text-right mt-3">
                <button class="btn btn-primary">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('admin.petugas.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>
    </div>
</div>
@endsection
