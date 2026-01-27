@extends('layouts.app')

@section('title', 'Data Produk')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">+ Tambah Produk</a>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                       
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($produks as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>

                        <td>
                            <img src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->nama_produk }}"
                                width="80" class="rounded">
                        </td>

                        <td>
                           

                            <a href="{{ route('admin.produk.edit', $item->id_produk) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>


                            <form action="#"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>

                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection