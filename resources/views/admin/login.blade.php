
@extends('admin.sections.base')

@section('title')Login @endsection

@section('stylesheets')<link rel="stylesheet" href="{{ asset('css/admin/auth.css') }}"> @endsection


@section('content')
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        {{-- <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo"> --}}
                        <img width="90" height="90" src="https://img.icons8.com/ios-glyphs/90/microsoft-admin--v2.png" alt="microsoft-admin--v2"/>
                        <!-- Flash Messages Section -->
                        @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                        @endif
                    </div>
                    <h3 class="mb-4 text-muted">Login to your Admin account</h3>
                    <br>
                    <form action="{{ route('admin.login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="admin_email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="" id="check1">
                                <label class="form-check-label" for="check1">
                                    Remember me on this device
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary mb-4" style="width:100%">Login</button>
                    </form>
                    {{-- <p class="mb-2 text-muted">Forgot password? <a href="{{ route('admin.forgot-password') }}">Reset</a></p> --}}
                    <p class="mb-0 text-muted">Don't have account yet? <a href="{{ route('admin.signup') }}">Signup</a></p>
                </div>
            </div>
        </div>
@section('js-files')
<script src="{{ asset('jquery/jquery.min.js') }}"></script> @endsection
@endsection
