<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('guitars.index')}}">Guitars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.contact')}}">Contact</a>
                </li>
            </ul>
        </div>

    </nav>

   @yield('content')

</body>

</html>