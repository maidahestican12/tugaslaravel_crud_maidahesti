@extends('layouts.main')

@section('content')

<div class="d-flex align-items-center justify-content-center vh-50">
    <div class="text-center" style="max-width: 400px;">
        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
        <form class="form-signin" method="POST" action="{{ route('signupR') }}">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                <label for="name">Your Name</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <label for="email">Email Address</label>
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
                <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember" checked>
                <label class="form-check-label" for="remember"> Remember me</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
        </form>
        <p class="mt-3 mb-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>

@endsection