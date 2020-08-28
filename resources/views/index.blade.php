@extends('layout')
@section('title', 'Home')
@section('main-section')
    @if(Session::has('success-message'))
        <p class="container mt-3 alert col-md-7 text-center {{ Session::get('alert-class', 'alert-info') }}"><i class="fas fa-check-circle"></i> {{ Session::get('success-message') }}</p>
    @endif

    @if(Session::has('error-message'))
        <p class="container mt-3 alert col-md-7 text-center {{ Session::get('alert-class', 'alert-info') }}"><i class="fas fa-times-circle"></i> {{ Session::get('error-message') }}</p>
    @endif
    <div class="containerr">
        <video autoplay muted loop id="myVideo" class="video">
            <source src="{{ asset('/videos/backVideo.mp4') }}" type="video/mp4">
        </video>
        <div class="video-button" onclick="myFunction()">
            <i id="myBtn" class="far fa-pause-circle videoPause"  style="visibility: visible;"></i><br>
            <i id="myBtn" class="far fa-play-circle videoPlay" style="visibility: hidden;"></i>
        </div>
        <div class="message-holder">
            <h1 class="text-slide-up-h1">We provide
                <div class="text-slide-up-div">
                    <span class="text-slide-up-span">
                        Fresh Vegetables. <br>
                        Quality Service. <br>
                        Customer Support. <br>
                        Product Delivery. <br>
                        Other Services. <br>
                    </span>
                </div>
                <p style="text-align: center; font-size: 18px; margin-top: 22px;">
                    @if(Auth::check())
                        <a class="custom-btn" href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a class="custom-btn" href="{{ url('/login') }}">Login!</a>
                    @endif
                </p>
            </h1>
        </div>
    </div>
    <div class="section-holder">
        <div class="section">
            <div class="container what-we-do text-center p-4">
                <h3 class="text-center">About Us</h3>
                <p class="p-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima alias perferendis, aliquam ab maxime ipsa natus fuga exercitationem, dolorem nostrum assumenda enim soluta nesciunt reiciendis quis, dicta quod beatae quibusdam. Lorem ipsum dolor sit amet... </p>
                <a class="custom-btn btn-primary" href="{{ url('/about') }}">Read More &raquo;</a>
            </div>
        </div>
    </div>
    <div class="torch-container">
        <div class="torch-image">
            <h3 class="text-white  text-center help-text">Are you looking for a fresh fruits and vegetables?</h3>
        </div>
        <div class="torch">
            <h3 class="particletext-uppercase text-center help-text" style="color:#fff700; text-shadow: 0 0 12px #000;">Congratulations, you came to a right place!</h3>
        </div>
    </div>
    <div class="last-content py-5">
        <div class="container py-md-3 text-center">
            <div class="last-lavi-inner-content px-lg-5">
                @if(Auth::check())
                    <h3 class="mb-4 tittle-wthree">Congratulations! <span>You are </span> Logged in!</h3>
                    <p class="px-lg-5">You are only few steps away from getting your veggies. <br>What are you waiting for click
                        <a href="{{url('/products')}}"> here</a> to see fresh vegetabels.<br></p>
                @else
                    <h3 class="mb-4 tittle-wthree">Get started with <span>Online </span> Ordering !</h3>
                    <p class="px-lg-5">You are only few steps away from getting close to us. <br>If you haven't registered yet, what are you waiting for... Just simply register and order our products online. <br> - Green Veggies</p>
                @endif
                    <div class="buttons mt-md-4 mt-3">
                    @if(Auth::check())
                        <a class="custom-btn" href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a class="custom-btn" href="{{ url('/login') }}">Login!</a> <b>OR</b>
                        <a class="custom-btn" href="{{ url('/register') }}">Register!</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="particle-div">
        <div id="particles-js">
            <h3 class="text-white particle-text text-uppercase">We care for your health.</h3>
        </div>
    </div>
    <div class="latest-product mt-5">
       <div class="container">
           <h2 class="text-center mb-5 text-secondary">--- Recently Added ---</h2>
           <div class="row">
               @foreach($products as $product)
                   <div class=" col-md-6 col-md-3 col-lg-3 d-flex align-items-stretch mb-4">
                       <div class="card card-rad pt-4 mx-auto card-product">
                           <div class="image-holder">
                               <img src="{{ asset('uploads/productImage') }}/{{$product->productImage}}" class="card-img-top pImg" alt="Product Image">
                           </div>
                           <div class="card-body">
                               <h5 class="card-title">{{ \Illuminate\Support\Str::limit($product->productName, 50)  }}</h5>
                               <p>
                               <p class="card-text productDesc">{{$product->productDescription}}</p>

                               <small class="form-text card-text productDesc">Original Price: <strong><strike>रू {{$product->orginalPrice}}</strike></strong> <span class="float-right"><strong>Dis. {{$product->discountRate}}%</strong></span></small>

                               <small class="form-text card-text productDesc mb-4">Discounted Price: <strong>रू {{$product->discountedPrice}}</strong></small>

                               <div class="product-button-holders">
                                   <a href="{{ url('/productDetails')}}/{{$product->id}}/{{$product->id}}" class="btn btn-primary custom-btn" style="border: none;">See More &raquo;</a>
                                   <a href="{{ route('product.addToCart', $product->id) }}"><i class="fas fa-cart-plus add-to-cart"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
    </div>
@endsection
