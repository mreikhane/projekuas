@extends('layouts.app')

@section('title', 'Perangkingan')

@section('contents')
    <div class="content-wrapper">
        <h2 class="text-center mb-3">Perangkingan</h2>
        <div class="container-fluid">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vektorV as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nilai }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
