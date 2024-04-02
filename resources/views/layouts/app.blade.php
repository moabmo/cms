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
        <a href="{{ url('/about-us') }}" class="{{ request()->is('about-us') ? 'active' : '' }}">About Us</a>
        <a href="{{ url('/worship-service') }}" class="{{ request()->is('worship-service') ? 'active' : '' }}">Worship Services</a>
        <a href="{{ url('/ministry') }}" class="{{ request()->is('ministry') ? 'active' : '' }}">Ministries</a>
        <a href="{{ url('/events') }}" class="{{ request()->is('events') ? 'active' : '' }}">Events</a>
        <a href="{{ url('/leadership') }}" class="{{ request()->is('leadership') ? 'active' : '' }}">Leadership</a>
        <a href="{{ url('/members') }}" class="{{ request()->is('members') ? 'active' : '' }}">Members</a>
        <a href="{{ url('/contact-us') }}" class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a>
        <a href="{{ url('/giving') }}" class="{{ request()->is('giving') ? 'active' : '' }}">Giving</a>
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
<footer class="footer">
    <div class="footer-section">
        <p>testsda.org is the official website of the Test Seventh-day Adventist Church. <br><br><br><br><br><br><br>
        © 2024, All rights reserved. <br>
        Test Road. City P.O. Box 123456789 <br>
        Tel: +(123) 456-7890 <br>
    </p>
    </div>
    <div class="footer-section-bigger">
        <p><a href="#">Facebook</a><br>
        <a href="#">Twitter</a><br>
        <a href="#">Instagram</a><br>
        <a href="#">LinkedIn</a><br></p>
    </div>
</footer>


<div class="secondsetion">
    <div class="image-container">
        <img src="{{ asset('images/sda.png') }}" alt="sda.jpg" class="fit-image">
    </div>
</div>


            
</body>
</html>