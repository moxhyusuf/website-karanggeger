@extends('layout.app')

@section('title', 'Geografis Desa')

@section('content')

<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="current">Pembagian Wilayah</li>
            </ol>
        </nav>
    </div>
</div>
<main class="main py-5" style="background: #f0f4f8; min-height: 80vh;">

    <!-- Page Title -->
    <div class="container mb-5" data-aos="fade-up">
        <h2 class="text-center mb-4" style="color:#2c3e50;">🌍 Pembagian Wilayah Desa Karanggeger</h2>
    </div>

    <div class="container">
        <div class="grid" style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        ">
            <!-- Dusun Krajan 1 -->
            <div class="card">
                <h2><span>🏡</span>Dusun Krajan 1</h2>
                <div class="accordion">
                    <button onclick="toggleAccordion(this)">RW</button>
                    <div class="accordion-content">01</div>
                    <button onclick="toggleAccordion(this)">RT</button>
                    <div class="accordion-content">01, 02</div>
                </div>
            </div>

            <!-- Dusun Krajan 2 -->
            <div class="card">
                <h2><span>🏡</span>Dusun Krajan 2</h2>
                <div class="accordion">
                    <button onclick="toggleAccordion(this)">RW</button>
                    <div class="accordion-content">02, 03</div>
                    <button onclick="toggleAccordion(this)">RT</button>
                    <div class="accordion-content">03, 04, 05, 06, 07, 08</div>
                </div>
            </div>

            <!-- Dusun Kramat -->
            <div class="card">
                <h2><span>🏡</span>Dusun Kramat</h2>
                <div class="accordion">
                    <button onclick="toggleAccordion(this)">RW</button>
                    <div class="accordion-content">04</div>
                    <button onclick="toggleAccordion(this)">RT</button>
                    <div class="accordion-content">09, 10, 11</div>
                </div>
            </div>

            <!-- Dusun Blumbang -->
            <div class="card">
                <h2><span>🏡</span>Dusun Blumbang</h2>
                <div class="accordion">
                    <button onclick="toggleAccordion(this)">RW</button>
                    <div class="accordion-content">05</div>
                    <button onclick="toggleAccordion(this)">RT</button>
                    <div class="accordion-content">12, 13, 14, 15</div>
                </div>
            </div>

            <!-- Dusun Noko Tlogo -->
            <div class="card">
                <h2><span>🏡</span>Dusun Noko Tlogo</h2>
                <div class="accordion">
                    <button onclick="toggleAccordion(this)">RW</button>
                    <div class="accordion-content">06</div>
                    <button onclick="toggleAccordion(this)">RT</button>
                    <div class="accordion-content">16, 17</div>
                </div>
            </div>
        </div>
    </div>

</main>

<style>
    .card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        padding: 20px;
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .card h2 {
        font-size: 20px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        color: #34495e;
    }

    .card h2 span {
        margin-right: 10px;
        font-size: 24px;
    }

    .accordion button {
        width: 100%;
        text-align: left;
        padding: 10px;
        border: none;
        outline: none;
        background: #3498db;
        color: #fff;
        border-radius: 8px;
        cursor: pointer;
        margin-bottom: 5px;
        transition: 0.3s;
    }

    .accordion button:hover {
        background: #2980b9;
    }

    .accordion-content {
        display: none;
        padding: 10px;
        background: #ecf0f1;
        border-radius: 8px;
        margin-bottom: 10px;
    }
</style>

<script>
    function toggleAccordion(btn) {
        const content = btn.nextElementSibling;
        content.style.display = content.style.display === "block" ? "none" : "block";
    }
</script>
@endsection
