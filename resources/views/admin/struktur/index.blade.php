@extends('layouts.app')

@section('title', 'Struktur')
@section('page-title', 'Struktur Organisasi')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse($struktur as $i)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        @if($i->gambar)
                                            <img src="{{ asset('storage/' . $i->gambar) }}" alt="struktur" width="150">
                                        @else
                                            <span class="text-muted">Tidak ada gambar</span>
                                        @endif
                                    </td>

                                    <td>
                                         <a href="{{ route('admin.struktur.edit', $i->id) }}" 
                                            class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan="3">Belum ada data struktur</td>
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
