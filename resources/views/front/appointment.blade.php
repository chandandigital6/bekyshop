@extends('layout.mai')
@section('title', 'Appointment ')
@section('content')



    <!-- Main Content Start -->
    <div class="main-content">


        <!-- Heading Content Start-->


        <div class="heading-all">
            <div class="heading-all-content">
                <h1>Booking</h1>
                <p><a href="/">Home</a> / <a href="/pages">Pages</a> / <a href="/service">Service</a></p>
            </div>
        </div>

        <!--  Heading Content End-->

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
                    <form>
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="datetime-local" name="date-time" required>
                        <select name="no-of-people" required>
                            <option value="1">People 1</option>
                            <option value="2">People 2</option>
                            <option value="3">People 3</option>
                            <option value="4">People 4</option>
                        </select>
                        <textarea name="special-request" placeholder="Special Request"></textarea>
                        <button type="submit">BOOK NOW</button>
                    </form>
                </div>
            </div>
        </div>


        <!--Reservation Section End-->



    </div>


    <!-- Main Content End -->

@endsection
