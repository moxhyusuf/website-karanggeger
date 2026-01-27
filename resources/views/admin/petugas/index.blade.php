@extends('layouts.app')

@section('title', 'Petugas')
@section('page-title', 'Petugas')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.petugas.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>No Hp</th>
                                    <th>Jabatan</th>
                                    <th>Bidang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>{{ $user->jabatan }}</td>
                                    <td>{{ $user->bidang }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.petugas.edit', $user->id) }}"
                                        class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('admin.petugas.destroy', $user->id) }}"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin hapus petugas ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">Belum ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection