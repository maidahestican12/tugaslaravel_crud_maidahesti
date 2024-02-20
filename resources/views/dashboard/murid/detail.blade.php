@extends('layouts.partial.maindash')

@section('content')
    
<!DOCTYPE html>
<html>
<head>
    <title>Form Detail Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail Siswa</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ $student->nis }}" readonly>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}" readonly>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ optional($student->kelas)->nama }}" readonly>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $student->tgl_lahir }}" readonly>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $student->alamat }}" readonly>
            </div>
            <button type="button" class="btn btn-primary" onclick="history.back()">Back</button>
        </form>
    </div>
</body>
</html>
@endsection
