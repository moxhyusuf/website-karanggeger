@extends('layouts.app')

@section('title', 'Edit Data Kependudukan')
@section('page-title', 'Edit Data Kependudukan')

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

<form action="{{ route('admin.kependudukan.update', $data->id) }}" method="POST">
@csrf
@method('PUT')

<div class="card-body">

<div class="form-group">
    <label>Kelompok</label>
    <input type="text" class="form-control" value="{{ $data->kelompok }}" readonly>
    <input type="hidden" name="kelompok" value="{{ $data->kelompok }}">
</div>

<div class="form-group">
    <label>Label</label>
    <input type="text" name="label" class="form-control"
           value="{{ $data->label }}" required>
</div>

<div class="form-group">
    <label>Jumlah</label>
    <input type="number" name="jumlah" class="form-control"
           value="{{ $data->jumlah }}" min="0" required>
</div>

</div>

<div class="card-footer">
    <button class="btn btn-primary">Update</button>
</div>

</form>
</div>

</div>
</div>
</div>
</section>
@endsection
