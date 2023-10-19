<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
<div class="firstsection">
<div class="navbar">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about-us') }}">About Us</a>
    <a href="{{ url('/worship-service') }}">Worship Services</a>
    <a href="{{ url('/ministry') }}">Ministries</a>
    <a href="{{ url('/events') }}">Events</a>
    <a href="{{ url('/contact-us') }}">Contact Us</a>
    <a href="{{ url('/members') }}">Members</a>
</div>
@yield('content')

</div>
<div class="footer">
©️ CMS|All rights reserved
</div>
<div class="secondsetion">
    <div class="image-container">
        <img src="{{ asset('images/sda.png') }}" alt="sda.jpg" class="fit-image">
    </div>
</div>


            
</body>
</html>