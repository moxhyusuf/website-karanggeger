@extends('layouts.app')

@section('title', 'Program')
@section('page-title', 'Data Program')

@section('content')
<div class="card">

    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('admin.program.create') }}" class="btn btn-primary">+ Tambah Program</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                  
                    <th>No</th>
                    <th>Nama Program</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($programs as $item)
                <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_program }}</td>
                    <td style="white-space: pre-wrap;">{{ Str::limit($item->keterangan, 150) }}</td>
                    <td>
                        @if($item->img)
                        <img src="{{ asset('storage/' . $item->img) }}" alt="img" style="width:120px; height:auto;">
                        @else
                        <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.program.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                        <form action="{{ route('admin.program.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"> <i class="fas fa-trash-alt"></i></button>
                        </form>

                        <a href="{{ route('admin.program.show', $item->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection