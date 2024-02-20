@extends('layouts.main')

@section('content')
<div class="container">



    <table class="table">   
        <thead>
            <tr>
                <th>Nama</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $kelasItem)
                <tr>
                    <td>{{ $kelasItem->nama }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection