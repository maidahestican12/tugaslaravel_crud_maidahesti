@extends('layouts.partial.maindash')

@section('content')
<div class="container">

<a href="{{ route('kelas.addForm') }}" class="btn btn-primary">Add Kelas</a>

    <table class="table">   
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $kelasItem)
                <tr>
                    <td>{{ $kelasItem->nama }}</td>
                    <td>
                        <a href="{{ route('kelas.edit', $kelasItem->id) }}" class="btn btn-warning">Edit</a>
                        <form method="POST" action="{{ route('kelas.destroy', $kelasItem->id) }}" onsubmit="return confirmDelete()">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" style="margin-top: 7px;">Delete</button>
                        </form>
                        <script>
                            function confirmDelete() {
                                return confirm("Apakah Anda yakin ingin menghapus data kelas ini?");
                            }
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection