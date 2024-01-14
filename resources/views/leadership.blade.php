


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leadership</title>
    <link rel="stylesheet" href="{{ asset('css/leadership.css') }}">
    
</head>
<body>


@extends('layouts.app')

@section('title', 'Ministry')

@section('content')
  <h1>The leadership of the church</h1>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Leadership</title>
</head>
<body>

<div class="container" onclick="openPopup()">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Caption for Your Image</div>
</div>

<div id="popup" class="popup">
    <img src="{{ asset('images/icon.png') }}" alt="Larger Image" class="popup-image">
    <p class="popup-description">This is the descriptionThis is the descriptionThis is the descriptionThis is the description
    This is the descriptionThis is the descriptionThis is the description
    This is the descriptionThis is the descriptionThis is the description
    This is the descriptionThis is the description
    </p>
    <span class="close-btn" onclick="closePopup()">&times;</span>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 001</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 002</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 003</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>

<div class="container">
    <img src="{{ asset('images/icon.png') }}" alt="Your Image" class="image">
    <div class="image-caption">Leader 004</div>
</div>






<script>
    function openPopup() {
        document.getElementById("popup").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>


 
@endsection


            
</body>
</html>