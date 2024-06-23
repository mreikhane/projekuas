@extends('layouts.app')
  
@section('title', 'Detail Kriteria')
  
@section('contents')
    <h1 class="mb-0">Detail Kriteria</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria" value="{{ $kriteria->nama_kriteria }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Kriteria</label>
            <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode Kriteria" value="{{ $kriteria->kode_kriteria }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Bobot</label>
            <input type="text" name="bobot" class="form-control" placeholder="Bobot" value="{{ $kriteria->bobot }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" placeholder="Deskripsi" readonly>{{ $kriteria->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kriteria->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kriteria->updated_at }}" readonly>
        </div>
    </div>
@endsection
