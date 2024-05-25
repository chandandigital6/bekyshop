@extends('layout.mai')
@section('title', 'Home Page')
@section('content')


<div class="main-content">
    <!-- Hero Section End-->
    <section class="hero">
        <div class="container">
            <!-- Hero Content -->
            <div class="hero-content">
                <h1>Enjoy Our Delicious Meal</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat
                    ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <a href="#" class="btn">BOOK A TABLE</a>
            </div>
            <!-- Hero Image -->
            <div class="hero-image">
                <img src="{{asset('asset/img/hero.png')}}" alt="Grilled Food">
            </div>
        </div>
    </section>


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


    <!--About Us Section Start-->


    <div class="about-us-container-main">
        <div class="about-us-container">
            <div class="image-grid">
                <img src="{{asset('asset/img/about-1.jpg')}}" alt="Elegant dining area with modern decor" loading="lazy">
                <img src="{{asset('asset/img/about-2.jpg')}}" alt="Cozy dining area with ambient lighting" loading="lazy">
                <img src="{{asset('asset/img/about-3.jpg')}}" alt="Delicious gourmet dish beautifully presented" loading="lazy">
                <img src="{{asset('asset/img/about-4.jpg')}}" alt="Tasty and colorful dish prepared by our chefs" loading="lazy">
            </div>
            <div class="content">
                <h2>About Us</h2>
                <h1>Welcome to <span class="highlight">Restoran</span></h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat
                    ipsum
                    et lorem et sit, sed stet lorem sit.</p>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat
                    ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="stats">
                    <div class="experience">
                        <span class="number">15</span> Years of <br> EXPERIENCE
                    </div>
                    <div class="chefs">
                        <span class="number">50</span> Popular <br> MASTER CHEFS
                    </div>
                </div>
                <button class="read-more" aria-label="Read more about Restoran">READ MORE</button>
            </div>
        </div>
    </div>


    <!--About Us Section End-->


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


    <!--Reservation Section Start-->

    <div class="reservation-container-main">
        <div class="reservation-container">
            <div class="image-section">
                <img src="{{asset('asset/img/video.jpg')}}" alt="Dining" class="image">
                <div class="play-button">
                    <div class="triangle"></div>
                </div>
            </div>
            <div class="form-section">
                <h2>Reservation</h2>
                <h1>Book A Table Online</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('reservation.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="date_time">Date and Time</label>
                        <input type="datetime-local" name="date_time" class="form-control @error('date_time') is-invalid @enderror" value="{{ old('date_time') }}" required>
                        @error('date_time')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_of_people">Number of People</label>
                        <select name="no_of_people" class="form-control @error('no_of_people') is-invalid @enderror" required>
                            <option value="1" {{ old('no_of_people') == 1 ? 'selected' : '' }}>People 1</option>
                            <option value="2" {{ old('no_of_people') == 2 ? 'selected' : '' }}>People 2</option>
                            <option value="3" {{ old('no_of_people') == 3 ? 'selected' : '' }}>People 3</option>
                            <option value="4" {{ old('no_of_people') == 4 ? 'selected' : '' }}>People 4</option>
                        </select>
                        @error('no_of_people')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea name="msg" placeholder="Special Request" class="form-control @error('msg') is-invalid @enderror">{{ old('msg') }}</textarea>
                        @error('msg')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">BOOK NOW</button>
                </form>
            </div>
        </div>
    </div>


    <!--Reservation Section End-->

    <!--Team Members Our Master Chefs Start-->


    <section class="team-section">
        <h2><span>Team Members</span></h2>
        <h2>Our Master Chefs</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="{{asset('asset/img/team-1.jpg')}}" alt="Chef Image">
                <h4>Full Name</h4>
                <span>Designation</span>
            </div>
            <div class="team-member">
                <img src="{{asset('asset/img/team-2.jpg')}}" alt="Chef Image">
                <h4>Full Name</h4>
                <span>Designation</span>
            </div>
            <div class="team-member">
                <img src="{{asset('asset/img/team-3.jpg')}}" alt="Chef Image">
                <h4>Full Name</h4>
                <span>Designation</span>
            </div>
            <div class="team-member">
                <img src="{{asset('asset/img/team-4.jpg')}}" alt="Chef Image">
                <h4>Full Name</h4>
                <span>Designation</span>
            </div>
        </div>
    </section>

    <!--Team Members Our Master Chefs End-->

    <!--Testimonial Start-->

    <section class="testimonial-section">
        <h2>Testimonial</h2>
        <h3>Our Clients Say!!!</h3>
        <div class="testimonial-container">
            <div class="testimonial-slide">
                <!-- First set of testimonials -->
                <div class="testimonial-group active">
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-1.jpg')}}" alt="Client 1">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-2.jpg')}}" alt="Client 2">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-3.jpg')}}" alt="Client 3">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second set of testimonials -->
                <div class="testimonial-group">
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-4.jpg')}}" alt="Client 4">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-1.jpg')}}" alt="Client 5">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-2.jpg')}}" alt="Client 6">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third set of testimonials -->
                <div class="testimonial-group">
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-3.jpg')}}" alt="Client 7">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-4.jpg')}}" alt="Client 8">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p>“Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                            labore
                            diam.”</p>
                        <div class="client-info">
                            <img src="{{asset('asset/img/testimonial-1.jpg')}}" alt="Client 9">
                            <div>
                                <h4>Client Name</h4>
                                <p>Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indicators">
                <span class="indicator active" data-index="0"></span>
                <span class="indicator" data-index="1"></span>
                <span class="indicator" data-index="2"></span>
            </div>
        </div>
    </section>

    <!--Testimonial End-->
</div>

@endsection
