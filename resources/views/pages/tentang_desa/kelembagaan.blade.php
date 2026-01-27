@extends('layout.app')

@section('title', 'Kelembagaan Desa')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="current">Kelembagaan Desa</li>
                </ol>
            </nav>
        </div>
    </div>

</main>

<section id="kelembagaan" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>KELEMBAGAAN DESA</h2>
    </div>

    <div class="container">
        <table style="
            width:100%; 
            border-collapse:collapse; 
            background:#fff; 
            border-radius:10px; 
            overflow:hidden; 
            box-shadow:0 3px 8px rgba(0,0,0,0.1);
        ">
            <thead style="background:#3b82f6; color:#fff;">
                <tr>
                    <th style="padding:10px;">No</th>
                    <th>Nama Lembaga</th>
                    <th>Laki-laki</th>
                    <th>Perempuan</th>
                    <th>Total</th>
                    <th>Visual</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($kelembagaans as $item)
                <tr>
                    <td style="padding:8px; text-align:center;">{{ $loop->iteration }}</td>
                    <td>{{ $item->lembaga }}</td>
                    <td>{{ $item->l }}</td>
                    <td>{{ $item->p }}</td>
                    <td>{{ $item->jumlah }}</td>

                    <td>
                        @php
                            // menentukan panjang progress bar
                            $max = 50; // maksimal biar proporsional
                            $persen = $item->jumlah > 0 ? ($item->jumlah / $max) * 100 : 0;
                            if ($persen > 100) $persen = 100;
                        @endphp

                        <div style="background:#eee; border-radius:10px; overflow:hidden; height:12px;">
                            <div style="width:{{ $persen }}%; background:#3b82f6; height:12px;"></div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center; padding:20px;">
                        <em>Belum ada data kelembagaan</em>
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</section>

@endsection
