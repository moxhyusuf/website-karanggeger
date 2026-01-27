@extends('layouts.app')

@section('title', 'Tambah Kepala Desa')

@section('content')
<div class="container">
    <h4 class="mb-3">Tambah Kepala Desa</h4>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.kepala_desa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Baris 1 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control">
                        </div>
                    </div>
                </div>

                {{-- Baris 2 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Periode Mulai</label>
                            <input type="date" name="periode_mulai" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Periode Selesai</label>
                            <input type="date" name="periode_selesai" class="form-control">
                        </div>
                    </div>
                </div>

                {{-- Baris 3 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status Jabatan</label>
                            <select name="status_jabatan" class="form-control">
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Non Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                </div>

                {{-- Baris 4 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                {{-- Baris 5 --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea name="visi" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea name="misi" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                {{-- Baris 6 --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Sambutan</label>
                            <textarea name="sambutan" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('admin.kepala_desa.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
