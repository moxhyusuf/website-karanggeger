@extends('layouts.app')

@section('title', 'Sejarah')
@section('page-title', 'Sejarah')

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
                                    <th>Sejarah</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td style="max-width:400px; text-align:justify;">
                                        {{ \Illuminate\Support\Str::limit($item->sejarah, 150, '...') }}
                                    </td>
                                    <td>
                                        @if($item->img)
                                        <img src="{{ asset('storage/'.$item->img) }}" alt="gambar" style="max-width:120px;">
                                        @else
                                        <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.sejarah.edit', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                                       
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Belum ada data</td>
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