
@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
        <!-- Register basic -->
        <div class="card mb-0">
            <div class="card-body">
                <a href="#" class="brand-logo">

                    <h2 class="brand-text text-primary ms-1">{{config('app.name')}}</h2>
                </a>

                <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
                <p class="card-text mb-2">Make your app management easy and fun!</p>
                <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-1">
                        <label for="register-username" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username" name="name" placeholder="Name" aria-describedby="register-username" tabindex="1" autofocus />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="mb-1">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email" name="email" placeholder="Email" aria-describedby="register-email" tabindex="2" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <label for="register-password" class="form-label">Password</label>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control @error('email') is-invalid @enderror form-control-merge" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-1">
                        <label for="register-password" class="form-label">Confirm Password</label>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror form-control-merge" id="register-password" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                            <label class="form-check-label" for="register-privacy-policy">
                                I agree to <a href="#">privacy policy & terms</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" tabindex="5">Sign up</button>
                </form>

                <p class="text-center mt-2">
                    <span>Already have an account?</span>
                    <a href="/login">
                        <span>Sign in instead</span>
                    </a>
                </p>

            </div>
        </div>
        <!-- /Register basic -->
    </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/auth-register.js')}}"></script>
@endsection
