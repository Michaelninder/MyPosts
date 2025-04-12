@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-4 bg-light p-4 rounded shadow">
        <h1 class="text-center mb-4">Login</h1>
        <form action="{{ route('auth.login.post') }}" method="POST">
            @csrf
            <div class="mb-3 position-relative">
                <input type="text" name="username" class="form-control ps-5" placeholder="Username" value="{{ old('username') }}">
                <i class="bi bi-person position-absolute top-50 start-0 translate-middle-y ms-2" style="font-size: 1.2rem; line-height: 1;"></i>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" name="password" class="form-control ps-5" id="password-login" placeholder="Password">
                <i class="bi bi-key position-absolute top-50 start-0 translate-middle-y ms-2" style="font-size: 1.2rem; line-height: 1;"></i>
                <button type="button" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 p-0" onclick="showPassword('password-login', 'toggle-password-login')" style="width: 32px; height: 32px; border: none; background: transparent;">
                    <i id="toggle-password-login" class="bi bi-eye" style="font-size: 1.2rem; color: black;"></i>
                </button>
            </div>
            <button type="submit" class="btn btn-primary w-100">Log in</button>
        </form>
    </div>
</div>
@endsection
