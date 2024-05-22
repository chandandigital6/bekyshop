@extends('layout.mai')
@section('title', 'Menu')
@section('content')


    <!-- Main Content Start -->
    <div class="main-content">

        <!-- Heading Content Start-->


        <div class="heading-all">
            <div class="heading-all-content">
                <h1>Food Menu</h1>
                <p><a href="/">Home</a> / <a href="/pages">Pages</a> / <a href="/service">Service</a></p>
            </div>
        </div>

        <!--  Heading Content End-->

        <!--Menu Section Start-->

        <div class="menu-container-main">
            <div class="menu-container">
                <div class="heading">
                    <h2>Food Menu</h2>
                    <h1>Most Popular Items</h1>
                    <nav class="menu-text-icon">
                        <ul>
                            <li><i class="material-icons">breakfast_dining</i> Popular Breakfast</li>
                            <li><i class="material-icons">lunch_dining</i> Special Lunch</li>
                            <li><i class="material-icons">dinner_dining</i> Lovely Dinner</li>
                        </ul>
                    </nav>
                </div>
                <div class="menu-list">
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-1.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-2.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-3.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-4.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-5.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-6.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-7.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                    <div class="menu-item">
                        <img src="{{asset('asset/img/menu-8.jpg')}}" alt="Food item">
                        <div class="details">
                            <h3>Chicken Burger</h3>
                            <p>Ipsum ipsum clita erat amet dolor justo diam</p>
                        </div>
                        <div class="price">$115</div>
                    </div>
                </div>
            </div>
        </div>


        <!--Menu Section End-->
    </div>

@endsection
