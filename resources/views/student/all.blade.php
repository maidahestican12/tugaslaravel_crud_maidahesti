<!-- resources/views/student/all.blade.php -->

@extends('layouts.main')

@section('content')
    <h1> Student</h1>

    
    @if (session()->has('success'))
    <div class ="alert alert-success col-lg-12" role="alert">
        {{session ('success')}}
    </div>
    @endif
       
    <table class="table table-dark table-striped-columns" style="width: 100%;">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['nis'] }}</td>
                    <td>{{ $student['nama'] }}</td>
                    <td>{{ optional($student->kelas)->nama }}</td>
                    <td>{{ $student['tgl_lahir'] }}</td>
                    <td>{{ $student['alamat'] }}</td>
                    <td>
                    
                        <a href="/student/detail/{{ $student->id }}" class="btn btn-primary">Detail</a>
                        
                    <script>
                        function confirmDelete(){
                            return confirm("Apakah Anda Yakin Ingin Menghapus Data Siswa Ini?")
                        }
                    </script>

                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
