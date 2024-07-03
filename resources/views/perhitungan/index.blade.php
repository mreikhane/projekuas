@extends('layouts.app')

@section('title', 'Perhitungan')

@section('contents')
    <div class="content-wrapper">
        <div class="container-fluid">
            <h2>Perhitungan</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Jumlah Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sumbobot as $item)
                        <tr>
                            <td>{{ $item->total_bobot }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Alternatif</th>
                        <th>Nilai Normalisasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriteria as $index => $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $normalisasi[$index]->nilai_normalisasi ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
