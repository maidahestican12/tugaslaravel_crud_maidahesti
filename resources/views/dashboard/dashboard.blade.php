@extends('layouts.partial.maindash')

@section('content')
   <h2>Welcome, {{ auth()->user()->name }}</h2> 
@endsection
