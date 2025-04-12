@extends('layouts.main')

@section('title', 'Register')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-4 bg-light p-4 rounded shadow">
        <h1 class="text-center mb-4">Register</h1>
        <form action="{{ route('auth.register.post') }}" method="POST">
            @csrf
            <div class="mb-3 position-relative">
                <input type="text" name="username" class="form-control ps-5" placeholder="Username" value="{{ old('username') }}">
                <i class="bi bi-person position-absolute top-50 start-0 translate-middle-y ms-2" style="font-size: 1.2rem; line-height: 1;"></i>
            </div>
            <div class="mb-3 position-relative">
                <input type="email" name="email" class="form-control ps-5" placeholder="Email" value="{{ old('email') }}">
                <i class="bi bi-envelope position-absolute top-50 start-0 translate-middle-y ms-2" style="font-size: 1.2rem; line-height: 1;"></i>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" name="password" class="form-control ps-5" id="password-register" placeholder="Password">
                <i class="bi bi-key position-absolute top-50 start-0 translate-middle-y ms-2" style="font-size: 1.2rem; line-height: 1;"></i>
                <button type="button" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 p-0" onclick="showPassword('password-register', 'toggle-password-register')" style="width: 32px; height: 32px; border: none; background: transparent;">
                    <i id="toggle-password-register" class="bi bi-eye" style="font-size: 1.2rem; color: black;"></i>
                </button>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" name="password_confirmation" class="form-control ps-5" id="password-confirmation" placeholder="Confirm Password">
                <i class="bi bi-key position-absolute top-50 start-0 translate-middle-y ms-2" style="font-size: 1.2rem; line-height: 1;"></i>
                <button type="button" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 p-0" onclick="showPassword('password-confirmation', 'toggle-password-confirmation')" style="width: 32px; height: 32px; border: none; background: transparent;">
                    <i id="toggle-password-confirmation" class="bi bi-eye" style="font-size: 1.2rem; color: black;"></i>
                </button>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>
@endsection
