@extends('layouts.app')
  
@section('title', 'Alternatif')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Alternatif</h1>
        <a href="{{ route('alternatifs.create') }}" class="btn btn-primary">Tambah Alternatif</a>
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
                <th>Kode Alternatif</th>
                <th>Nama Alternatif</th>
                <th>Fasilitas</th>
                <th>Harga</th>
                <th>Keamanan</th>
                <th>Kebersihan</th>
                <th>Jarak</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($alternatif->count() > 0)
                @foreach($alternatif as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $item->kode }}</td>
                        <td class="align-middle">{{ $item->nama }}</td>
                        <td class="align-middle">{{ $item->fasilitas }}</td>
                        <td class="align-middle">{{ $item->harga }}</td>
                        <td class="align-middle">{{ $item->keamanan }}</td>
                        <td class="align-middle">{{ $item->jarak }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('alternatifs.show', $item->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('alternatifs.edit', $item->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('alternatifs.destroy', $item->id) }}" method="POST" class="p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0   ">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Alternatif tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
