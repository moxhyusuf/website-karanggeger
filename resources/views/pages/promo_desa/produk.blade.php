@extends('layout.app')

@section('title', 'geografis')
@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="current">Produk Unggulan</li>
            </ol>
        </nav>
    </div>
</div>

<section id="produk_unggulan" class="about section">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>PRODUK UNGGULAN DESA</h2>
        </div>

        <div class="produk-grid">

            @foreach ($item as $row)
            <div class="produk-card">

                <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->nama_produk }}">

                <div class="produk-info">
                    <h3>{{ $row->nama_produk }}</h3>

                    @if(!empty($row->harga))
                    <p class="harga">Rp{{ number_format($row->harga, 0, ',', '.') }}</p>
                    @endif

                    @if(!empty($row->deskripsi))
                    <p class="desc">{{ $row->deskripsi }}</p>
                    @endif

                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</section>

<style>
    .produk-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .produk-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        transition: 0.3s;
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .produk-card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .produk-info {
        padding: 15px;
        background: #fff;
        color: #333;
    }

    .produk-info h3 {
        margin: 0 0 10px;
        font-size: 18px;
        font-weight: bold;
        color: #1a237e;
    }

    .produk-info .harga {
        margin: 5px 0;
        font-weight: bold;
        color: #f39c12;
    }

    .produk-info .desc {
        font-size: 14px;
        margin-bottom: 8px;
        line-height: 1.4;
    }

    @media (max-width: 1024px) {
        .produk-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .produk-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

@endsection