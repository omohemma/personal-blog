@extends('layouts.auth')

@section('title') Signup @endsection
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h1 class="display-4 mb-10 text-center">Sign up for free</h1>
                                <p class="mb-30 text-center">Create your account and start your free trial today</p>

                                <div class=" form-group">
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus placeholder="Name"
                                           type="text">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required placeholder="Email"
                                           type="email">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required placeholder="Password" type="password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required placeholder="Confirm Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i
                                                            data-feather="eye-off"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                    <label class="custom-control-label font-14" for="same-address">I have read and agree
                                        to the <a href=""><u>term and conditions</u></a></label>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                                <div class="option-sep">or</div>

                                <p class="text-center">Already have an account? <a href="{{route('login')}}">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->
@endsection






