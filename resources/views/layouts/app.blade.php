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
<div class="logo">
<a href="{{ url('/') }}">
    <img src="{{ asset('images/header.png') }}" alt="Logo">
</a>
</div>
            <div class="links">
                <a href="{{ url('/about-us') }}">About Us</a>
                <a href="{{ url('/worship-service') }}">Worship Services</a>
                <a href="{{ url('/ministry') }}">Ministries</a>
                <a href="{{ url('/events') }}">Events</a>
                <a href="{{ url('/leadership') }}">Leadership</a>
                <a href="{{ url('/members') }}">Members</a>
                <a href="{{ url('/contact-us') }}">Contact Us</a>
            </div>
</div>
<script>
    // Get the navbar element
const navbar = document.querySelector('.navbar');

// Get the offset position of the navbar
const sticky = navbar.offsetTop;

// Function to handle scroll event
function handleScroll() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add('fixed');
    } else {
        navbar.classList.remove('fixed');
    }
}

// Attach scroll event listener
window.addEventListener('scroll', handleScroll);

</script>




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