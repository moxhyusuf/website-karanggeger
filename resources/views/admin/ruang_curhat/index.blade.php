@extends('layouts.app')

@section('title', 'Data Kesan & Pesan')

@section('content')

<div class="container-fluid mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Kesan & Pesan Warga</h3>
            <small class="text-muted">Daftar pengaduan dan masukan warga</small>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            {{-- Search --}}
            <div class="d-flex justify-content-end mb-3">
                <form action="{{ route('admin.ruang_curhat.index') }}" method="GET">
                    <div class="input-group" style="width: 280px;">
                        <span class="input-group-text bg-light">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" name="search" class="form-control"
                               placeholder="Cari nama / isi..."
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
                            <th>Status</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Waktu</th>
                            <th>Pengaduan</th>
                            <th width="90">Foto</th>
                            <th width="90" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($data as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <span class="badge bg-secondary">
                                    {{ $p->status_pelapor }}
                                </span>
                            </td>

                            <td>{{ $p->nama_lengkap }}</td>

                            <td>{{ $p->nomor_hp }}</td>

                            <td>
                                <small class="text-muted">
                                    {{ $p->created_at->format('d M Y') }}
                                </small>
                            </td>

                            <td>
                                <small>
                                    {{ Str::limit($p->isi_pengaduan, 45) }}
                                </small>
                            </td>

                            <td>
                                @if($p->foto_pendukung)
                                    <img src="{{ asset('uploads/kesan_pesan/'.$p->foto_pendukung) }}"
                                         class="rounded"
                                         width="50">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <td class="text-center">
                                <a href="{{ route('admin.ruang_curhat.show', $p->id) }}"
                                   class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-muted">
                                Tidak ada data pengaduan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="mt-3">
                {{ $data->withQueryString()->links() }}
            </div>

        </div>
    </div>

</div>

@endsection
