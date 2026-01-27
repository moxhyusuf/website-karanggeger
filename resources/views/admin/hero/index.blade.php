@extends('layouts.app')

@section('title', 'Data Hero')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Hero</h4>
        <a href="{{ route('admin.hero.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Hero
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <table class="table table-bordered align-middle">
                 <thead class="table-secondary">
                    <tr>
                        <th width="120">Gambar</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th width="120" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($heroes as $hero)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/'.$hero->gambar) }}"
                                     class="img-fluid rounded">
                            </td>
                            <td>{{ $hero->judul_1 }}</td>
                            <td>
                                <span class="badge {{ $hero->aktif ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $hero->aktif ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.hero.edit', $hero->id) }}"
                                   class="btn btn-sm btn-warning me-1">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.hero.destroy',$hero->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Hapus hero ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Data belum ada
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
