@extends('layout.mai')
@section('title', 'contact')
@section('content')

    <!-- Main Content Start -->
    <div class="main-content">

        <!-- Heading Content Start-->


        <div class="heading-all">
            <div class="heading-all-content">
                <h1>Contact Us</h1>
                <p><a href="/">Home</a> / <a href="/pages">Pages</a> / <a href="/service">Service</a></p>
            </div>
        </div>

        <!--  Heading Content End-->

        <!--Contact Us Start-->
        <div class="contact_us_main">
            <h1>Contact For Any Query</h1>

            <div class="contact-container">
                <div class="map-container">
                    <img src="{{asset('asset/img/video.jpg')}}" alt="Image Description">
                </div>
                <div class="form-container">
                    <form>
                        <h2>Contact Form</h2>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Contact Us End -->

    </div>
    <!-- Main Content End -->

@endsection
