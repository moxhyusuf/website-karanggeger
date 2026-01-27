@extends('layout.app')

@section('title', $umkm->nama)

@section('content')

<div class="page-title" data-aos="fade-down">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/umkm') }}">UMKM Desa</a></li>
                <li class="current">{{ $umkm->nama }}</li>
            </ol>
        </nav>
    </div>
</div>

<section class="section mt-4">
    <div class="container">

        <div class="row g-5">

            {{-- GALERI GOJEK STYLE --}}
            <div class="col-md-5" data-aos="fade-right">

                <div class="product-gallery">

                    {{-- FOTO UTAMA --}}
                    <div class="main-image">
                        <img id="mainPreview"
                             src="{{ $umkm->media->count()
                                    ? asset('storage/'.$umkm->media->first()->file_path)
                                    : asset('storage/'.$umkm->image) }}">
                    </div>

                    {{-- THUMBNAIL --}}
                    <div class="thumbnail-row">
                        @forelse ($umkm->media as $img)
                            <img src="{{ asset('storage/'.$img->file_path) }}"
                                 onclick="changeImage(this)">
                        @empty
                            <img src="{{ asset('storage/'.$umkm->image) }}">
                        @endforelse
                    </div>

                </div>
            </div>

            {{-- DETAIL PRODUK --}}
            <div class="col-md-7" data-aos="fade-left">

                <div class="product-detail-card">
                    <h2 class="product-title">{{ $umkm->nama }}</h2>

                    <h3 class="product-price">
                        Rp{{ number_format($umkm->harga, 0, ',', '.') }}
                    </h3>

                    <p class="product-desc">
                        {{ $umkm->deskripsi }}
                    </p>

                    @if ($umkm->alamat)
                        <p class="product-location">
                            <i class="bi bi-geo-alt"></i> {{ $umkm->alamat }}
                        </p>
                    @endif

                    <a href="https://wa.me/{{ $umkm->wa }}?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20{{ urlencode($umkm->nama) }}"
                       target="_blank"
                       class="btn-wa-gojek">
                        <i class="bi bi-whatsapp"></i> Hubungi Penjual
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

{{-- ================= CSS GOJEK STYLE ================= --}}
<style>
.product-gallery{
    background:#fff;
    padding:14px;
    border-radius:18px;
    box-shadow:0 6px 18px rgba(0,0,0,.15);
}

.main-image img{
    width:100%;
    height:300px;
    object-fit:cover;
    border-radius:14px;
}

.thumbnail-row{
    display:flex;
    gap:10px;
    margin-top:12px;
    overflow-x:auto;
}

.thumbnail-row img{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:12px;
    cursor:pointer;
    opacity:.75;
    transition:.3s;
    border:2px solid transparent;
}

.thumbnail-row img:hover{
    opacity:1;
    transform:scale(1.05);
}

.thumbnail-row img.active{
    border-color:#25D366;
    opacity:1;
}

.product-detail-card{
    background:#fff;
    padding:22px;
    border-radius:20px;
    box-shadow:0 6px 18px rgba(0,0,0,.15);
}

.product-title{
    font-size:26px;
    font-weight:700;
}

.product-price{
    color:#f39c12;
    font-weight:700;
    margin:10px 0;
}

.product-desc{
    line-height:1.8;
    color:#444;
}

.product-location{
    color:#777;
    margin-top:10px;
}

.btn-wa-gojek{
    display:inline-flex;
    align-items:center;
    gap:8px;
    background:#25D366;
    color:#fff;
    padding:14px 22px;
    border-radius:14px;
    font-weight:600;
    margin-top:18px;
    text-decoration:none;
    transition:.3s;
}

.btn-wa-gojek:hover{
    background:#1ebe57;
    transform:translateY(-2px);
}

/* MOBILE */
@media(max-width:768px){
    .main-image img{height:240px;}
    .product-title{font-size:22px;}
}
</style>

{{-- ================= JS ================= --}}
<script>
function changeImage(el){
    document.getElementById('mainPreview').src = el.src;

    document.querySelectorAll('.thumbnail-row img')
        .forEach(img => img.classList.remove('active'));

    el.classList.add('active');
}
</script>

@endsection
