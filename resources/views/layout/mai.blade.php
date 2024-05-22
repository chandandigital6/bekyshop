<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'beky shop')</title>
    <link rel="stylesheet" href="{{asset('asset/styles.css')}}">
    <link rel="stylesheet" href="{{asset('asset/contact_us.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Section Start -->
    @include('layout.header')


    <!-- Main Content Start -->
  @yield('content')

    <!--Footer Section Start-->

 @include('layout.footer')

    <!--Footer Section End-->

    <script src="{{asset('asset/scripts.js')}}"></script>

</body>

</html>
