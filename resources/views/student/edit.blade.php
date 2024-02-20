@extends('layouts.partial.maindash')

@section('content')
    
    <div class="container">
    <h1>New Data Student</h1>
        <form method="post" action="/student/update/{{$student->id}} ">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="number" class="form-control" required id="nis" name="nis" value="{{ $student->nis}}" >
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" required id="nama" name="nama" value="{{  $student->nama }}" >
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select class="form-control" required id="kelas" name="kelas_id">
                    @foreach($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $student->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" required id="tgl_lahir" name="tgl_lahir" value="{{ $student->tgl_lahir }}" >
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" required id="alamat" name="alamat" value="{{ $student->alamat }}" >
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection