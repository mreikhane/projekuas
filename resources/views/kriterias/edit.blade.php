@extends('layouts.app')

@section('title', 'Edit Kriteria')

@section('contents')
    <h1 class="mb-0">Edit Kriteria</h1>
    <hr />
    <form action="{{ route('kriterias.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria" value="{{ $kriteria->nama_kriteria }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Kriteria</label>
                <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode Kriteria" value="{{ $kriteria->kode_kriteria }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bobot</label>
                <input type="text" name="bobot" class="form-control" placeholder="Bobot" value="{{ $kriteria->bobot }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" required>{{ $kriteria->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection