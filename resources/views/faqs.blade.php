@extends('layout')
@section('title', 'FAQs')

@section('main-section')
    <div class="inner-register">
        <div class="overlay-inner">
            <h3 class="tittle-wthree text-center">FAQ<span class="text-lowercase">s</span></h3>
        </div>
    </div>
    <!-- FAQs Start -->
    <div class="services text-center py-5" id="services">
        <div class="container py-md-5 faqs">
            <div class="container">
                <div class="item"><i class="far fa-question-circle"></i> {{ __('Who are we?') }}</div>
                <div class="item-data">
                    <div>{{ __('We are Green Veggies.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('What do we do?') }}</div>
                <div class="item-data">
                    <div>{{ __('We provide you fresh fruits and vegetables.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('Can you trust us?') }}</div>
                <div class="item-data" >
                    <div>{{ __('Yes, Since we provide locally grown products.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('Why was this web application created?') }}</div>
                <div class="item-data" >
                    <div>{{ __('The main reason is: To promote locally grown product and uplift agriculture.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('What is the benefit of using this application?') }}</div>
                <div class="item-data" >
                    <div>{{ __('Health is wealth. We provide fresh product for you to make healthy.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('How do I order product?') }}</div>
                <div class="item-data" >
                    <div>{{ __('You must reigster an account and login to the system.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('How many days will it take products to be delivered?') }}</div>
                <div class="item-data" >
                    <div>{{ __('Customer who orders their product should except their orders within 30 minutes.  If you experience any delay in the order, you can contact us immediately and we will help to comfirm your order.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('Can I cancel my order?') }}</div>
                <div class="item-data" >
                    <div>{{ __('Yes, only if your order has not been accepted.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('Who will ship my orders?') }}</div>
                <div class="item-data" >
                    <div>{{ __('There are our own staffs for delivering your product. We will send trusted delivery person who will be contacting you before delivering.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('What is the accumulated delivery fee?') }}</div>
                <div class="item-data" >
                    <div>{{ __('During the time of pandemic, we care for our customers. Therefore, we are doing it for free.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('If I want to add my product to your store, can I add?') }}</div>
                <div class="item-data" >
                    <div>{{ __('You cannot add it yourself, but you can contact our admin and we will get back to you as soon as possible.') }}</div>
                </div>

                <div class="item"><i class="far fa-question-circle"></i> {{ __('What are the user features?') }}</div>
                <div class="item-data" >
                    <div>
                        {{ __('User can do the following things inside this application:') }}
                        <ul style="list-style: square outside none;">
                            <li>&raquo; Visit Profile</li>
                            <li>&raquo; Change Password</li>
                            <li>&raquo; Reset Password</li>
                            <li>&raquo; View Products</li>
                            <li>&raquo; Search and Short Product</li>
                            <li>&raquo; Add to cart</li>
                            <li>&raquo; Increase/Decrease/Remove product from cart</li>
                            <li>&raquo; Write a review and rate product by stars</li>
                            <li>&raquo; Track your order status</li>
                            <li>&raquo; View and Print bill after product delivery</li>
                            <li>&raquo; Favourite any product</li>
                            <li>&raquo; Subscribe to newsletter</li>
                            <li>&raquo; Contact Directly to admins</li>
                            <li>or Simply contact us through online chat feature.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

@endsection

