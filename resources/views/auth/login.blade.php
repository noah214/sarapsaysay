@extends('layouts.app')

@section('title', 'Log in - SarapSaysay')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <h2 class="mb-1">Welcome back</h2>
            <p class="text-muted mb-4">Log in to your culinary journal.</p>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3" id="authTab" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link active w-100" id="login-tab" data-bs-toggle="pill"
                            data-bs-target="#login-pane" type="button">Log in</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="register-tab" data-bs-toggle="pill"
                            data-bs-target="#register-pane" type="button">Register</button>
                </li>
            </ul>

            <div class="tab-content">

                <!-- Log in form -->
                <div class="tab-pane fade show active" id="login-pane">
                    <form method="POST" action="{{ url('/login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-uppercase small fw-bold">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-uppercase small fw-bold">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-brand w-100">Log in</button>
                        <div class="text-center mt-3">
                            <a href="#" class="small">Forgot password?</a>
                        </div>
                    </form>
                </div>

                <!-- Register form -->
                <div class="tab-pane fade" id="register-pane">
                    <form method="POST" action="{{ url('/register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-uppercase small fw-bold">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-uppercase small fw-bold">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-uppercase small fw-bold">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-uppercase small fw-bold">Confirm password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-brand w-100">Create account</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
