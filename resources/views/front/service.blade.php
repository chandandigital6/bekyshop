@extends('layout.mai')
@section('title', 'Service')
@section('content')


    <!-- Main Content Start -->
    <div class="main-content">

        <!-- Heading Content Start-->


        <div class="heading-all">
            <div class="heading-all-content">
                <h1>Services</h1>
                <p><a href="/">Home</a> / <a href="/pages">Pages</a> / <a href="/service">Service</a></p>
            </div>
        </div>

        <!--  Heading Content End-->

        <!--Service Section Start-->

        <div class="service-container">
            <div class="service-item">
                <img src="{{asset('asset/icons/cooking.png')}}" alt="Master Chefs">
                <h3>Master Chefs</h3>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
            <div class="service-item">
                <img src="{{asset('asset/icons/food.png')}}" alt="Quality Food">
                <h3>Quality Food</h3>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
            <div class="service-item">
                <img src="{{asset('asset/icons/online-order.png')}}" alt="Online Order">
                <h3>Online Order</h3>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
            <div class="service-item">
                <img src="{{asset('asset/icons/support.png')}}" alt="24/7 Service">
                <h3>24/7 Service</h3>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
        </div>

        <!--Service Section End-->

    </div>
    <!-- Main Content End -->

@endsection
