@extends('layouts.app')
  
@section('title', 'Detail ALternatif')
  
@section('contents')
    <h1 class="mb-0">Detail Alternatif</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Alternatif</label>
            <input type="text" name="nama_alternatif" class="form-control" placeholder="Nama alternatif" value="{{ $alternatif->nama_alternatif}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Alternatif</label>
            <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode Alternatif" value="{{ $alternatif->kode_alternatif }}" readonly>
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $alternatif->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $alternatif->updated_at }}" readonly>
        </div>
    </div>
@endsection
