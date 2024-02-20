@extends('layouts.partial.maindash')

@section('content')
@if(auth()->check())
<h4>                Hi, {{ auth()->user()->name }}
</h4>
                @else
            <a class="nav-link" href="/login/index">Login</a>
   @endif
@endsection
