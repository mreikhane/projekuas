@extends('layouts.app')

@section('title', 'Edit Alternatif')

@section('contents')
    <h1 class="mb-0">Edit Kriteria</h1>
    <hr />
    <form action="{{ route('alternatifs.update', $alternatif->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Alternatif</label>
                <input type="text" name="nama_alternatif" class="form-control" placeholder="Nama Alternatif" value="{{ $alternatif->nama_alternatif }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Alternatif</label>
                <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode Alternatif" value="{{ $alternatif->kode_alternatif }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection