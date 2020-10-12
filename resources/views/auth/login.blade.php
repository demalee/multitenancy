@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main">
            <div class="row">
                <div class="col-md-12">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <div class="mt-4">
                                <div class="card-body">
                                    <div class="cont ">
                                        <div>
                                            <form method="POST" class="theme-form" action="{{ route('login') }}">
                                                @csrf
                                                <div class="card-header">{{ __('Login') }}</div>


                                                <div class="form-group">
                                                    <label for="email" class="col-md-3 col-form-label ">{{ __('E-Mail ') }}</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="checkbox p-0">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="checkbox1">Remember me</label>
                                                </div>
{{--                                                <div class="form-group form-row mt-3 mb-0">--}}
{{--                                                    <button class="btn btn-primary btn-block" type="submit">LOGIN</button>--}}
{{--                                                </div>--}}


                                                <div class="form-group row mb-0">
                                                        <div class="col-md-8 ">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Login') }}
                                                            </button>

                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                                                   <br><br>
                                            </form>



                                            <div class="sub-cont">
                                            <div class="img">
                                                <div class="img__text m--up">
                                                    <h2>New User?</h2>
                                                    <p>Sign up and start creating your own amazing website!</p>
                                                </div>
                                                <div class="img__text m--in">
                                                    <h2>One of us?</h2>
                                                    <p>If you already has an account, just sign in. We've missed you!</p>
                                                </div>
                                                <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                                                <div class="login-divider"></div> <br><br>
                                            </div>
                                            <div>

                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <h4 class="col-md-4 col-form-label ">Register</h4>
                                                    <h6 class="text-center"></h6>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                                                            <div class="form-group">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-sm-4">
                                                            <button class="btn btn-primary" type="submit">Sign Up</button>
                                                        </div>

                                                        <br><br>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <br><br>  <br><br>  <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login page end-->
    </div>
</div>
@endsection
