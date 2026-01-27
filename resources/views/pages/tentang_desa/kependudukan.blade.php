@extends('layout.app')

@section('title', 'Data Kependudukan')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="current">Kependudukan</li>
            </ol>
        </nav>
    </div>
</div>

<section id="kependudukan" class="section">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <h2>📊 Data Statistik Kependudukan</h2>
            <p>Informasi demografi penduduk Desa</p>
        </div>

        <div class="row g-4">

            <!-- JENIS KELAMIN -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Jenis Kelamin</h5>
                    <div class="chart-box">
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- USIA -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Struktur Usia</h5>
                    <div class="chart-box">
                        <canvas id="ageChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- PEKERJAAN -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Jenis Pekerjaan</h5>
                    <div class="chart-box">
                        <canvas id="jobChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- TENAGA KERJA -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Tenaga Kerja</h5>
                    <div class="chart-box">
                        <canvas id="workforceChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- AGAMA -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Agama</h5>
                    <div class="chart-box">
                        <canvas id="religionChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- PENDIDIKAN -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Pendidikan</h5>
                    <div class="chart-box">
                        <canvas id="educationChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- TAMAT SEKOLAH -->
            <div class="col-lg-12" data-aos="fade-up">
                <div class="stat-card">
                    <h5 class="stat-title">Statistik Tamat Sekolah</h5>
                    <div class="chart-box">
                        <canvas id="graduateChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* CARD */
.stat-card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 18px 20px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.05);
    height: 100%;
}

/* TITLE */
.stat-title {
    font-weight: 600;
    font-size: 16px;
    color: #0d6efd;
    margin-bottom: 15px;
    border-left: 4px solid #0d6efd;
    padding-left: 10px;
}

/* CHART */
.chart-box {
    position: relative;
    height: 300px;
}

canvas {
    max-height: 100% !important;
}
</style>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const kependudukan = @json($data ?? []);

function renderChart(canvasId, kelompok, type = 'pie') {
    const el = document.getElementById(canvasId);
    if (!el || !kependudukan[kelompok] || kependudukan[kelompok].length === 0) return;

    const labels = kependudukan[kelompok].map(i => i.label);
    const values = kependudukan[kelompok].map(i => i.jumlah);

    new Chart(el, {
        type: type,
        data: {
            labels: labels,
            datasets: [{
                data: values,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
}

renderChart('genderChart', 'gender');
renderChart('ageChart', 'usia', 'bar');
renderChart('jobChart', 'pekerjaan', 'bar');
renderChart('workforceChart', 'tenaga_kerja');
renderChart('religionChart', 'agama');
renderChart('educationChart', 'pendidikan', 'bar');
renderChart('graduateChart', 'tamat_sekolah', 'bar');
</script>
@endpush

