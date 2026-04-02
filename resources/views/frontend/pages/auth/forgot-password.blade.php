@extends('frontend.layout.master')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{ url('assets/img/breadcrumb/breadcumb-bg.png') }}">
    <div class="container">
        <h1 class="breadcumb-title">Forgot Password</h1>
    </div>
</div>

<section class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="auth-wrapper">
                    <div class="text-center mb-4">
                        <i class="fas fa-key fa-3x text-primary mb-3"></i>
                        <h3>Reset Password</h3>
                        <p class="text-muted">Enter your email to receive a reset link</p>
                    </div>
                    
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" 
                                   value="{{ old('email') }}" required autofocus>
                        </div>
                        <button type="submit" class="vs-btn w-100">Send Reset Link</button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('login') }}" class="text-muted">
                            <i class="fas fa-arrow-left me-1"></i>Back to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection