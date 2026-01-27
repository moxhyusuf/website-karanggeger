@extends('layouts.app')

@section('title', 'Tambah Data Kependudukan')
@section('page-title', 'Tambah Data Kependudukan')

@section('content')
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">

<div class="card">
<div class="card-header">
    <a href="{{ route('admin.kependudukan.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</div>

<form action="{{ route('admin.kependudukan.store') }}" method="POST">
@csrf

<div class="card-body">

{{-- Kelompok --}}
<div class="form-group">
    <label>Kelompok</label>
    <select name="kelompok" id="kelompok" class="form-control" required>
        <option value="">-- Pilih Kelompok --</option>
        <option value="gender">Jenis Kelamin</option>
        <option value="usia">Struktur Usia</option>
        <option value="pekerjaan">Pekerjaan</option>
        <option value="tenaga_kerja">Tenaga Kerja</option>
        <option value="agama">Agama</option>
        <option value="pendidikan">Pendidikan</option>
        <option value="tamat_sekolah">Tamat Sekolah</option>
    </select>
</div>

{{-- Label otomatis --}}
<div class="form-group">
    <label>Keterangan</label>
    <select name="label" id="label" class="form-control" required>
        <option value="">-- Pilih Keterangan --</option>
    </select>
</div>

{{-- Jumlah --}}
<div class="form-group">
    <label>Jumlah</label>
    <input type="number" name="jumlah" class="form-control" min="0" required>
</div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">
        Simpan
    </button>
</div>

</form>
</div>

</div>
</div>
</div>
</section>

{{-- SCRIPT LABEL OTOMATIS --}}
<script>
const labelMap = {
    gender: ['Laki-Laki', 'Perempuan'],
    usia: ['0-14', '15-64', '>65'],
    pekerjaan: [
        'Belum Kerja','Buruh','Petani','Nelayan','Dagang','PNS','Pensiunan',
        'TNI/POLRI','Guru','Karyawan Swasta','Karyawan BUMN','Honorer',
        'Wiraswasta','Pelajar/Mahasiswa','Lain-lain'
    ],
    tenaga_kerja: ['Produktif (15-55)', 'Tidak Produktif'],
    agama: ['Islam','Katholik','Protestan','Hindu','Budha'],
    pendidikan: [
        'Tidak/Belum Sekolah','Belum Tamat SD','SD','SLTP','SLTA',
        'D1/D2','D3','S1','S2'
    ],
    tamat_sekolah: [
        'Tidak/Belum Sekolah','Belum Tamat SD','Tamat SD',
        'Tamat SLTP','Tamat SLTA','D3','S1/D4','S2','S3'
    ]
};

document.getElementById('kelompok').addEventListener('change', function () {
    const labelSelect = document.getElementById('label');
    labelSelect.innerHTML = '<option value="">-- Pilih Keterangan --</option>';

    (labelMap[this.value] || []).forEach(item => {
        labelSelect.innerHTML += `<option value="${item}">${item}</option>`;
    });
});
</script>
@endsection
