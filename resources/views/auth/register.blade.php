@extends('layout')
@section('title', 'Registration')
@section('main-section')
    @if($errors->any())
        <p class="container mt-3 alert-danger alert"><i class="far fa-times-circle"></i> {{ __('Please fill up the form properly!') }}</p>
    @endif
    <div class="inner-register">
        <div class="overlay-inner">
            <h3 class="tittle-wthree text-center">Registration</h3>
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
                        <h3 class="tittle-wthree text-center">Registration</h3>
                    </div>
                    <div class="login-area">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                                    <input id="name" type="text" class="form-control name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Full Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="name" type="number" class="form-control telephone @error('telephone') is-invalid @enderror" name="telephone" maxlength="10" value="{{ old('telephone') }}" autocomplete="telephone" autofocus placeholder="Phone Number">

                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="name" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus placeholder="Address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender')}} " autocomplete="gender" autofocus>
                                        <option selected value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
                                    <span onclick="showHidePassword();" style="position:absolute;">
                                        <i class="fas fa-eye showPassword" style="bottom: 36px; right: -170px;"></i>
                                        <i class="fas fa-eye-slash hidePassword" style="bottom: 36px; right: -170px;"></i>
                                    </span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password"  placeholder="Confirm Password">

                                    <select class="form-control @error('regType') is-invalid @enderror" name="regType" autofocus>
                                        <option selected value="">Select Registration Type</option>
                                        <option value="buyer">Buyer</option>
                                    </select>
                                    @error('regType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="file" class="@error('profileImage') is-invalid @enderror" id="profileImage" name="profileImage">
                                    @error('profileImage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <button type="submit" class="btn btn-area"  onclick="return registrationValidation()">
                                        {{ __('Register') }}
                                    </button>
                                    <small class="card-text">Already Registered??? Click <a style="text-decoration: underline;" class="text-primary" href="{{ url('/login') }}">here</a> to login!!!</small>

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
