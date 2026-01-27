@extends('layouts.app')

@section('title', 'Visi & Misi')
@section('page-title', 'Visi & Misi')

@section('content')
<div class="card">
    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Diubah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($vismis as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td style="white-space: pre-wrap;">{{ $item->visi }}</td>
                    <td style="white-space: pre-wrap;">{{ $item->misi }}</td>
                    <td>{{ $item->updated_at?->format('Y-m-d H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.vismis.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    
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