@extends('layouts.main')

@section('content')
    <h1>Data Extracurricular!</h1>
    <table class="table table-dark table-striped-columns" style="width: 100%;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pembina</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurriculars as $extracurricular)
                <tr>
                    <td>{{ $extracurricular['nama'] }}</td>
                    <td>{{ $extracurricular['pembina'] }}</td>
                    <td>{{ $extracurricular['deskripsi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
