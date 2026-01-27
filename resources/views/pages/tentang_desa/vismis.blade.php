@extends('layout.app')

@section('title', 'Visi & Misi')
@section('content')

<style>
    /* ================= VISI MISI ================= */
.visi-card, .misi-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 28px;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    height: 100%;
}

.visi-card p {
    line-height: 1.9;
    font-size: 15px;
}

.misi-list {
    padding-left: 20px;
}

.misi-list li {
    margin-bottom: 12px;
    line-height: 1.8;
    text-align: justify;
    font-size: 15px;
}

</style>
<section id="visi" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Visi dan Misi</h2>
    </div>

    <div class="container">
        <div class="row gy-4">

            <!-- VISI -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 border rounded shadow-sm bg-light h-100">
                    <h3 class="text-center mb-3"><strong>Visi</strong></h3>
                    <p style="text-align: justify;">
                        {!! $vismis->visi !!}
                    </p>
                </div>
            </div>

            <!-- MISI -->
           <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
    <div class="misi-card">
        <h3 class="text-center mb-3 fw-bold">Misi</h3>

        <ol class="misi-list">
            @foreach(preg_split('/\d+\.\s*/', strip_tags($vismis->misi), -1, PREG_SPLIT_NO_EMPTY) as $item)
                <li>{{ trim($item) }}</li>
            @endforeach
        </ol>

    </div>
</div>


        </div>
    </div>
</section>

@endsection
