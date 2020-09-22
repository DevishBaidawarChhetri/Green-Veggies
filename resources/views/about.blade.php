@extends('layout')
@section('title', 'About')

@section('main-section')
    <div class="inner-register">
        <div class="overlay-inner">
            <h3 class="tittle-wthree text-center">About Us</h3>
        </div>
    </div>
    <!-- About Us Start -->
    <div class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree text-center">About Us</h3>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                    Green Veggies is the local company in Lalitpur that delivers fresh fruits and vegetables from tens and hundreds of hard working farmer. As a pioneer groceries delivery service provider, we are making life easier through online ordering.
                    <br>
                    We know that your time is valuable and sometimes every minute in the day counts. That’s why we deliver! So you can spend more time doing the things you love. You can get anything from fruits to vegetables by placing a simple order online through our website. Then just sit back, relax, and wait for your order to arrive. Cheers!!!
                    <br>
                    - Green Veggies
                </p>
            </div>
        </div>
    </div>
    <!-- About Us End -->
    <!-- Services Start -->
    <div class="services text-center py-5" id="services">
        <div class="container py-md-5">
            <h3 class="tittle-wthree text-center">Our Services</h3>
            <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">We do our best to provide our customer a great satisfaction.</p>
            <div class="row ser-sec-1">
                <div class="col-md-6 ser-w3pvt-gd-wthree">
                    <div class="icon">
                        <span class="far fa-comment-dots s1"></span>
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5> Online Chat</h5>
                        <p class="serp">
                            You can ask for help through our online chat feature.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 ser-w3pvt-gd-wthree">
                    <div class="icon">

                        <i class="fas fa-cookie"></i>
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Fresh Products</h5>
                        <p class="serp">
                            The products you see here is 100% locally grown with care.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row ser-sec-1">
                <div class="col-md-4 ser-w3pvt-gd-wthree border-bottom-0 bottom-vj-gds">
                    <div class="icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Call Support</h5>
                        <p class="serp">
                            For more details on products you can directly call to our number.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-w3pvt-gd-wthree border-bottom-0 bottom-vj-gds">
                    <div class="icon">
                        <i class="far fa-question-circle"></i>
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Queries to admins</h5>
                        <p class="serp">
                            If you have any doubt, you can sent your queries to our admins.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ser-w3pvt-gd-wthree border-bottom-0 bottom-vj-gds">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Subscription</h5>
                        <p class="serp">
                            You can subscribe to our mail for more informations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
