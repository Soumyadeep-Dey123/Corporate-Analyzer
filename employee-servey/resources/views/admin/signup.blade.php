@extends('admin.sections.base')

@section('title')Sign Up @endsection
        
@section('stylesheets')<link rel="stylesheet" href="{{ asset('css/admin/auth.css') }}"> @endsection        
        
@section('content')
        
            <div class="auth-content">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            {{-- <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo"> --}}
                        </div>
                        <h6 class="mb-4 text-muted">Create new Admin account</h6>
                        <form action="{{ route('admin.signup.submit') }}" method="POST">
                            <div class="mb-3 text-start">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="admin_name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="admin_email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="name" class="form-label">Phone</label>
                                <input type="text" name="admin_phone" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password" required>
                            </div>
                            
                            <div class="mb-3 text-start">
                                <div class="form-check">
                                  <input class="form-check-input" name="confirm" type="checkbox" value="" id="check1">
                                  <label class="form-check-label" for="check1">
                                    I agree to the <a href="{{ route('admin.terms') }}" tabindex="-1">terms and policy</a>.
                                  </label>
                                </div>
                            </div>
                            <button class="btn btn-primary mb-4" style="width:100%">Register</button>
                        </form>
                        <p class="mb-0 text-muted">Already have an account? <a href="{{ route('admin.login') }}">Log in</a></p>
                    </div>
                </div>
            </div>
        @endsection
        
    @section('js-files')<script src="{{ asset('jquery/jquery.min.js') }}"></script> @endsection
        
