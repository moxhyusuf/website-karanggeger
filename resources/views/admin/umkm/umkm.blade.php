@extends('layouts.app')

@section('title', 'Data UMKM')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('admin.umkm.create') }}" class="btn btn-primary">+ Tambah UMKM</a>
    </div>

    <div class="card">
        <div class="card-body p-3">

            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Alamat</th>
                        <th>WhatsApp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($umkms as $item)
                    <tr>
                          <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>

                        <td>
    @if ($item->media->count() > 0)
        <img src="{{ asset('storage/'.$item->media->first()->file_path) }}"
             alt="{{ $item->nama }}"
             width="80"
             class="rounded border">
    @else
        <span class="text-danger">Tidak ada gambar</span>
    @endif
</td>


                        <td>{{ $item->alamat ?? '-' }}</td>

                        <td>
                            <a href="https://wa.me/{{ $item->wa }}"
                                target="_blank"
                                class="btn btn-success btn-sm">
                                WA
                            </a>
                        </td>

                        <td>

                            <a href="{{ route('admin.umkm.show', $item->id) }}"
                                class="btn btn-info btn-sm mb-1"><i class="bi bi-eye"></i></a>

                            <a href="{{ route('admin.umkm.edit', $item->id) }}"
                                class="btn btn-warning btn-sm mb-1"><i class="fas fa-edit"></i></a>

                            <form action="{{ route('admin.umkm.destroy', $item->id) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>

                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Belum ada data UMKM</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection