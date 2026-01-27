@extends('layouts.app')

@section('title', 'Kependudukan Rekap')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h4>Data Kependudukan Rekap</h4>
        <a href="{{ route('admin.kependudukan.create') }}" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kelompok</th>
                <th>Label</th>
                <th>Jumlah</th>
                <th>Persentase</th>
                <th width="120">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->kelompok }}</td>
                <td>{{ $item->label }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->persentase ?? '-' }}</td>
                <td>
                    <a href="{{ route('admin.kependudukan.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                    <form action="{{ route('admin.kependudukan.destroy', $item->id) }}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                           <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
