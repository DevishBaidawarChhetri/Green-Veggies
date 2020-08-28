@extends('layout')
@section('title', 'Login')
@section('main-section')
    <div class="inner-register">
        <div class="overlay-inner">
            <h3 class="tittle-wthree text-center">Login</h3>
        </div>
    </div>
    <div class="about py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-3 contact-info-left"></div>
               <div class="login-wrapper">
                   <div id="particles-js"></div>
                   <div class="icon-area">
                       <span><i class="fa fa-users"></i></span>
                       <h3 class="tittle-wthree text-center">Login</h3>
                   </div>
                   <div class="login-area">
                       <form action="#" method="POST" name="loginValidationForm">
                           @csrf
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus placeholder="Your Email">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your Password">
                           <span onclick="showHidePassword();">
                            <i class="fas fa-eye showPassword"></i>
                            <i class="fas fa-eye-slash hidePassword"></i>
                          </span>
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                               <label class="form-check-label" for="remember">
                                   {{ __('Remember Me') }}
                               </label> <br>
                               @if (Route::has('password.request'))
                                   <a class="btn btn-link text-success" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                   </a>
                               @endif
                           <button type="submit" class="btn btn-area">
                               {{ __('Login') }}
                           </button>
                           <small class="card-text">New User??? Click <a style="text-decoration: underline;" href="{{ url('/register') }}"> here</a> to register!!!</small>
                       </form>
                   </div>
               </div>
                <style>
                    canvas{
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        z-index: -1;
                    }
                    #particles-js{
                        background: none;
                        height: auto;
                        width: auto;
                    }
                </style>
                <div class="col-lg-3 contact-info-left"></div>
            </div>
        </div>
    </div>
@endsection

