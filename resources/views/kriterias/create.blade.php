@extends('layouts.app')

@section('title', 'Tambah Kriteria')

@section('contents')
    <h1 class="mb-0">Tambah Kriteria</h1>
    <hr />
    <form action="{{ route('kriterias.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Kriteria</label>
                <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode Kriteria" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bobot</label>
                <input type="text" name="bobot" class="form-control" placeholder="Bobot" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
