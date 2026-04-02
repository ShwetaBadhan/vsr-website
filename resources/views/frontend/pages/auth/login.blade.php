@extends('frontend.layout.master')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="{{ url('assets/img/breadcrumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Login</h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Login Area
============================== -->
<section class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                <div class="auth-wrapper">
                    <div class="auth-header text-center mb-4">
                        <h2>Welcome Back</h2>
                        <p class="text-muted">Login to your account to continue</p>
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   required 
                                   autofocus
                                   placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       id="password" 
                                       name="password" 
                                       required 
                                       placeholder="Enter your password">
                                <button type="button" class="input-group-text bg-white border-start-0" id="togglePassword">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-4 d-flex justify-content-between align-items-center">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember" class="mb-0">Remember Me</label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-muted small">
                                Forgot Password?
                            </a>
                        </div>
                        
                        <button type="submit" class="vs-btn w-100 mb-3" id="loginBtn">
                            <span class="btn-text">Login</span>
                            <span class="btn-loading" style="display:none;">
                                <i class="fas fa-spinner fa-spin me-2"></i>Logging in...
                            </span>
                        </button>
                        
                    </form>
                    
                    <div class="auth-footer text-center">
                        <p class="mb-0">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="text-primary fw-medium">Register Now</a>
                        </p>
                    </div>
                    
                    <!-- Optional: Social Login -->
                    <div class="auth-divider my-4">
                        <span>or continue with</span>
                    </div>
                    
                    <div class="social-login d-flex gap-2 justify-content-center">
                        <a href="{{ route('auth.google') }}" class="social-btn google">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-btn apple">
                            <i class="fab fa-apple"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .auth-wrapper {
        background: #fff;
        border-radius: 12px;
        padding: 40px 30px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.08);
    }
    .auth-header h2 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 8px;
    }
    .form-control {
        border: 1px solid #e0e0e0;
        padding: 12px 16px;
        border-radius: 8px;
        transition: border-color 0.2s;
    }
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }
    .input-group-text {
        cursor: pointer;
        border-radius: 0 8px 8px 0;
    }
    .custom-checkbox input[type="checkbox"] {
        width: 18px;
        height: 18px;
        margin-right: 6px;
        cursor: pointer;
    }
    .auth-divider {
        position: relative;
        text-align: center;
        color: #999;
        font-size: 13px;
    }
    .auth-divider::before,
    .auth-divider::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 40%;
        height: 1px;
        background: #e0e0e0;
    }
    .auth-divider::before { left: 0; }
    .auth-divider::after { right: 0; }
    .social-btn {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e0e0e0;
        color: #666;
        transition: all 0.2s;
        text-decoration: none;
    }
    .social-btn:hover {
        border-color: #3498db;
        color: #3498db;
        transform: translateY(-2px);
    }
    .social-btn.google:hover { color: #db4437; border-color: #db4437; }
    .social-btn.facebook:hover { color: #4267B2; border-color: #4267B2; }
    .social-btn.apple:hover { color: #000; border-color: #000; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // 🔹 Toggle Password Visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    
    togglePassword?.addEventListener('click', function() {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        this.querySelector('i').className = type === 'password' ? 'far fa-eye' : 'far fa-eye-slash';
    });
    
    // 🔹 Form Submission with Loading State
    const loginForm = document.getElementById('loginForm');
    const loginBtn = document.getElementById('loginBtn');
    
    loginForm?.addEventListener('submit', function(e) {
        const btnText = loginBtn.querySelector('.btn-text');
        const btnLoading = loginBtn.querySelector('.btn-loading');
        
        // Show loading state
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline';
        loginBtn.disabled = true;
        
        // Allow form to submit normally (server-side validation)
        // If you want AJAX, preventDefault and use fetch() instead
    });
    
    // 🔹 Show Validation Errors via SweetAlert (Optional Enhancement)
    @if($errors->any())
        @if(session('success'))
            // Success handled by Bootstrap alert above
        @else
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: '{{ $errors->first() }}',
                confirmButtonColor: '#3498db'
            });
        @endif
    @endif
    
});
</script>
@endpush