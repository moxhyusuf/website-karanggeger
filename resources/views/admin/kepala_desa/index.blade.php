@extends('layouts.app')

@section('title', 'Data Kepala Desa')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Kepala Desa</h4>
        <a href="{{ route('admin.kepala_desa.create') }}" class="btn btn-primary">+ Tambah Kepala Desa</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Periode</th>
                        <th>Status</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                @if ($item->foto)
                                    <img src="{{ asset('storage/'.$item->foto) }}" alt="foto" width="60" class="rounded">
                                @else
                                    <small class="text-muted">Tidak ada</small>
                                @endif
                            </td>

                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nik ?? '-' }}</td>

                            <td>
                                {{ $item->periode_mulai ? date('d-m-Y', strtotime($item->periode_mulai)) : '-' }} 
                                s/d 
                                {{ $item->periode_selesai ? date('d-m-Y', strtotime($item->periode_selesai)) : '-' }}
                            </td>

                            <td>
                                <span class="badge bg-{{ $item->status_jabatan == 'aktif' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($item->status_jabatan) }}
                                </span>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('admin.kepala_desa.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                                
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada data kepala desa.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
