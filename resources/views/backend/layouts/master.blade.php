<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}" />
    @include('backend.partials.style')
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <!-- Navbar Start -->
            @include('backend.partials.nav')
            <!-- Navbar End -->
            
            <!-- Main Content Section Start -->
            @yield('content')
            <!-- Main Content Section End -->
            
            <!-- Footer Start -->
            @include('backend.partials.footer')
            <!-- Footer End -->
           
        </div>
    </div>
 @include('backend.partials.script')
</body>
</html>