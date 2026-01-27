@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')

<div class="container-fluid mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Berita</h3>
            <small class="text-muted">Daftar berita terbaru desa</small>
        </div>
        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            {{-- Search --}}
            <div class="d-flex justify-content-end mb-3">
                <form action="{{ route('admin.berita.index') }}" method="GET">
                    <div class="input-group" style="width: 280px;">
                        <span class="input-group-text bg-light">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" name="search" class="form-control"
                               placeholder="Cari judul..."
                               value="{{ request('search') }}">
                    </div>
                </form>
            </div>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-secondary">
                        <tr>
                            <th width="40">No</th>
                            <th>Judul</th>
                            <th width="120">Tanggal</th>
                            <th width="100">Foto</th>
                            <th width="180" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($beritas as $berita)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $berita->judul }}</td>
                            <td>
                                <small class="text-muted">
                                    {{ \Carbon\Carbon::parse($berita->tgl_berita)->format('d M Y') }}
                                </small>
                            </td>
                            <td>
                                @if($berita->image)
                                    <img src="{{ asset('storage/' . $berita->image) }}"
                                         class="rounded"
                                         width="50">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.berita.show', $berita->id_berita) }}"
                                   class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="{{ route('admin.berita.edit', $berita->id_berita) }}"
                                   class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('admin.berita.destroy', $berita->id_berita) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
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
                            <td colspan="5" class="text-center py-4 text-muted">
                                Tidak ada data berita.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="mt-3">
                {{ $beritas->withQueryString()->links() }}
            </div>

        </div>
    </div>

</div>

@endsection
