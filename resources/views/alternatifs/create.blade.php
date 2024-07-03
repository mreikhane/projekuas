@extends('layouts.app')

@section('title', 'Tambah Alternatif')

@section('contents')
    <h1 class="mb-0">Tambah Alternatif</h1>
    <hr />
    <form action="{{ route('alternatifs.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Alternatif</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Alternatif" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Alternatif</label>
                <input type="text" name="kode" class="form-control" placeholder="Kode alternatif" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">fasilitas</label>
                <input type="text" name="fasilitas" class="form-control" placeholder="fasilitas" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">keamanan</label>
                <input type="text" name="keamanan" class="form-control" placeholder="keamanan" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">kebersihan</label>
                <input type="text" name="kebersihan" class="form-control" placeholder="kebersihan" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">jarak</label>
                <input type="text" name="jarak" class="form-control" placeholder="jarak" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
