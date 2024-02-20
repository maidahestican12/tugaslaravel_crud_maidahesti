@extends('layouts.main')

@section('content')
    <h1>Ini Adalah Halaman About!</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <P>Foto:</P>
    <img src="{{ asset('img/'. $foto) }}" alt="{{ $foto }}">
@endsection