<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sidebar with Bootstrap</title>
{{--    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>--}}

    {{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            position: fixed;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar h2, .sidebar a {
            color: white;
            text-align: center;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 200px;
            padding: 20px;
            width: calc(100% - 200px);
        }
    </style>
</head>
<body>
<div class="sidebar">
    <h2>Sidebar Title</h2>
    <nav class="nav flex-column">

        <a class="nav-link" href="{{route('about.index')}}">About</a>
        <a class="nav-link" href="{{route('menu.index')}}">Menu</a>
        <a class="nav-link" href="{{route('team.index')}}">Team</a>
        <a class="nav-link" href="{{route('auth.logout')}}t">logout</a>

    </nav>
</div>
<div class="content">
    @yield('content')
{{--    <h1>Welcome to My Website</h1>--}}
{{--    <p>This is the main content area. Click on the links in the sidebar to navigate.</p>--}}
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
