@extends('layouts.app')

@section('title', 'Edit Alternatif')

@section('contents')
    <h1 class="mb-0">Edit Alternatif</h1>
    <hr />
    <form action="{{ route('alternatifs.update', $alternatif->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Alternatif</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Alternatif" value="{{ $alternatif->nama }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Alternatif</label>
                <input type="text" name="kode" class="form-control" placeholder="Kode Alternatif" value="{{ $alternatif->kode}}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">fasilitas</label>
                <input type="text" name="fasilitas" class="form-control" placeholder="fasilitas" value="{{ $alternatif->fasilitas}}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $alternatif->harga}}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">keamanan</label>
                <input type="text" name="keamanan" class="form-control" placeholder="keamanan" value="{{ $alternatif->keamanan}}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">kebersihan</label>
                <input type="text" name="kebersihan" class="form-control" placeholder="kebersihan" value="{{ $alternatif->kebersihan}}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">jarak</label>
                <input type="text" name="jarak" class="form-control" placeholder="jarak" value="{{ $alternatif->jarak}}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
