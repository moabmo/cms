@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Get in touch with us</h1>

    <form action="/submit-contact" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="number">Phone Number:</label>
        <input type="number" id="number" name="number" placeholder="2547..." required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
@endsection
