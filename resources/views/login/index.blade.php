@extends('layouts.main')

@section('content')
<div class="d-flex align-items-center justify-content-center vh-50">
    <div class="text-center" style="max-width: 400px;">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="h3 mb-3 fw-normal">Login to your account</h1>
        <form class="form-signin" method="POST" action="{{ route('loginR') }}">
            @csrf
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                <label for="email">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember"> Remember me</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
        <p class="mt-3 mb-0">Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
    </div>
</div>
@endsection