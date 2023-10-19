@extends('layouts/app')

@section('content')
<div class="slideshow-container">
    <div class="mySlides">
        <img src="{{ asset('images/church001.jpeg') }}" alt="church image" class="fit-image">
    </div>
    <div class="mySlides">
        <img src="{{ asset('images/church002.png') }}" alt="church image" class="fit-image">
    </div>
    <div class="mySlides">
        <img src="{{ asset('images/church003.jpg') }}" alt="church image" class="fit-image">
    </div>
    <div class="mySlides">
        <img src="{{ asset('images/church004.png') }}" alt="church image" class="fit-image">
    </div>
    <div class="mySlides">
        <img src="{{ asset('images/church005.jpg') }}" alt="church image" class="fit-image">
    </div>
    <!-- Add more slides as needed -->

    <!-- Navigation buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
    let slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

// Automatic slideshow
setInterval(function () {
    plusSlides(1); // Go to the next slide
}, 5000); // Change slide every 5 seconds (5000 milliseconds)

</script>
<div class="container">
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>Card Title</h2>
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
            This is some information about the topic you want to display in the card.
        </div>
    </div>
    </div>

            
@endsection

