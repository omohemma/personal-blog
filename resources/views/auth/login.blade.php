@extends('layouts.auth')

@section('title') Login @endsection
@section('content')

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <header class="d-flex justify-content-end align-items-center">
            <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-outline-secondary">Help</a>
                <a href="#" class="btn btn-outline-secondary">About Us</a>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                            <a class="auth-brand text-center d-block mb-20" href="#">
                                <img class="brand-img" src="{{asset('admin/dist/img/logo-light.png')}}" alt="brand"/>
                            </a>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
                                <p class="text-center mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" type="email">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" type="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i
                                                            data-feather="eye-off"></i></span></span>
                                        </div>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" checked>
                                    <label class="custom-control-label font-14" for="same-address">Keep me logged
                                        in</label>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                <p class="font-14 text-center mt-15">Having trouble logging in? <a href="{{route('password.request')}}">Forgot Password</a></p>
                                <div class="option-sep">or</div>
                                <p class="text-center">Do have an account yet? <a href="{{route('register')}}">Sign
                                        Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

@endsection


