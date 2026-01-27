@extends('layouts.app')

@section('title', 'Data Prestasi Desa')

@section('content')

<div class="container-fluid mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Prestasi Desa</h3>
        <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary">+ Tambah Prestasi</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th width="50">No</th>
                            <th>Judul Prestasi</th>
                            <th>Tanggal</th>
                            <th>Foto Utama</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prestasi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul_prestasi }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_prestasi)->format('d M Y') }}</td>
                                <td>
                                    @if ($item->foto_utama)
                                        <img src="{{ asset('storage/' . $item->foto_utama) }}" alt="foto" 
                                             style="width: 80px; height: 60px; object-fit: cover; border-radius: 5px;">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.prestasi.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.prestasi.destroy', $item->id) }}" 
                                          method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Belum ada data prestasi</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $prestasi->links() }}
            </div>

        </div>
    </div>

</div>

@endsection
