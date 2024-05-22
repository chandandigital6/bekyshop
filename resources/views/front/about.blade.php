@extends('layout.mai')
@section('title', 'About')
@section('content')


    <!-- Main Content Start -->
    <div class="main-content">

        <!-- Heading Content Start-->


        <div class="heading-all">
            <div class="heading-all-content">
                <h1>About Us</h1>
                <p><a href="/">Home</a> / <a href="/pages">Pages</a> / <a href="/service">Service</a></p>
            </div>
        </div>

        <!--  Heading Content End-->


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
    </div>



@endsection
