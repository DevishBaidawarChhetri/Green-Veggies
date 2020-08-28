@extends('layout')
@section('title', 'Checkout')

@section('main-section')
    {{--    Show alert messages--}}
    @if(Session::has('success-message'))
        <p class="container mt-3 alert col-md-7 text-center {{ Session::get('alert-class', 'alert-info') }}"><i class="fas fa-check-circle"></i> {{ Session::get('success-message') }}</p>
    @endif

    @if(Session::has('error-message'))
        <p class="container mt-3 alert col-md-7 text-center {{ Session::get('alert-class', 'alert-info') }}"><i class="fas fa-times-circle"></i> {{ Session::get('error-message') }}</p>
    @endif
    <div class="inner-register">
        <div class="overlay-inner">
            <h3 class="tittle-wthree text-center">Cart Checkout</h3>
        </div>
    </div>
    <div class="about py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-2 contact-info-left"></div>
                <div class="col-lg-8 contact-right-wthree-info pt-3">
                    <div class="login-wrapper">
                        <div id="particles-js"></div>
                        <div class="icon-area">
                            <span><i class="fab fa-opencart"></i></span>
                            <h3 class="tittle-wthree text-center">Checkout</h3>
                        </div>
                        <div class="login-area">
                            <form method="POST" action="{{ route('checkout') }}" enctype="multipart/form-data">
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

                                        <select class="form-control @error('paymentType') is-invalid @enderror" name="paymentType" autofocus>
                                            <option selected value="">Select Payment Type</option>
                                            <option value="eWallet">E-Wallet</option>
                                            <option value="cash on delivery">Cash on Delivery</option>
                                            <option value="credit or debit card">Credit / Debit Card</option>
                                        </select>
                                        @error('paymentType')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                <div class="form-group row mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-area" style="border-radius: 50px;">
                                            {{ __('Checkout') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <h5>Your total: रू. {{ $total }}</h5>
                        </div>
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
                <div class="col-lg-2 contact-info-left"></div>
            </div>
        </div>
    </div>
@endsection
