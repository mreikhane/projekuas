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
                <input type="text" name="nama_Alternatif" class="form-control" placeholder="Nama Alternatif" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Alternatif</label>
                <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode alternatif" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
