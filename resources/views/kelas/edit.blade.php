@extends('layouts.partial.maindash')

@section('content')
<div class="container">
    <h1>Edit Kelas</h1>

    <form method="post" action="{{ route('kelas.update', $kelas->id) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $kelas->nama }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection