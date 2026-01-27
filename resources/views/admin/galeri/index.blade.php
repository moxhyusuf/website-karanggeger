@extends('layouts.app')

@section('title', 'Galeri')
@section('page-title', 'Galeri')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
                            Tambah Galeri
                        </a>
                    </div>

                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($galeri as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ Str::limit($item->deskripsi, 40) }}</td>

                                    <td>
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" 
                                                 alt="gambar" width="70" class="img-thumbnail">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.galeri.edit', $item->id) }}" 
                                           class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('admin.galeri.destroy', $item->id) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">Belum ada data galeri</td>
                                </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
