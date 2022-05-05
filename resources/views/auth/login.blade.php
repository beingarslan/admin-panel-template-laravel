


@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
        <!-- Login basic -->
        <div class="card mb-0">
            <div class="card-body">
                <a href="#" class="brand-logo">
                    <h2 class="brand-text text-primary ms-1">{{config('app.name')}}</h2>
                </a>

                <h4 class="card-title mb-1">Welcome to {{config('app.name')}}! 👋</h4>
                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

                <form class="auth-register-form mt-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-1">
                        <label for="login-email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" placeholder="Email" aria-describedby="login-email" tabindex="1" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="login-password">Password</label>
                            <a href="{{url('auth/forgot-password-basic')}}">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" id="login-password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="form-check">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember-me" tabindex="3" />
                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
                </form>

                <p class="text-center mt-2">
                    <span>New on our platform?</span>
                    <a href="/register">
                        <span>Create an account</span>
                    </a>
                </p>


            </div>
        </div>
        <!-- /Login basic -->
    </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/auth-login.js'))}}"></script>
@endsection
