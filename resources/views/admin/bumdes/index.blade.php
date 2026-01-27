@extends('layouts.app')

@section('title', 'Data Bumdes')

@section('content')

<div class="container-fluid mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3 class="fw-bold">Data Bumdes</h3>
        <a href="{{ route('admin.bumdes.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr class="text-center">
                        <th width="50">No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th width="150">Foto</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ Str::limit($item->keterangan, 60) }}</td>
                            <td class="text-center">
                               @if($item->foto)
                                    <img src="{{ asset('storage/' . $item->foto) }}" width="100" class="img-thumbnail">
                                @else
                                    <span class="text-muted">Tidak ada</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.bumdes.edit', $item->id) }}" 
                                    class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                <form action="{{ route('admin.bumdes.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-3">Belum ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection
