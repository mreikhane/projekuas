@extends('layouts.app')
  
@section('title', 'Kriteria')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Kriteria</h1>
        <a href="{{ route('kriterias.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($kriteria->count() > 0)
                @foreach($kriteria as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $item->kode }}</td>
                        <td class="align-middle">{{ $item->nama_kriteria }}</td>
                        <td class="align-middle">{{ $item->bobot }}</td>
                        <td class="align-middle">{{ $item->label }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kriterias.show', $item->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kriterias.edit', $item->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('kriterias.destroy', $item->id) }}" method="POST" class="p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Kriteria tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
