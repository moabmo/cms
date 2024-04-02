
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leadership</title>
    <link rel="stylesheet" href="{{ asset('css/ministry.css') }}">
    
</head>
<body>



@extends('layouts.app')

@section('title', 'SDA Ministries')

@section('content')
    <section class="firstsection">
        <h1>Seventh-day Adventist Ministries</h1>
        <div class="ministry">
            <h2>Health Ministries</h2>
            <p>Focuses on promoting health and wellness based on Adventist health principles, including vegetarianism, exercise, and preventive care.</p>
        </div>
        <div class="ministry">
            <h2>Children's Ministries</h2>
            <p>Provides programs and activities for children to learn about the Bible, develop spiritually, and participate in service projects.</p>
        </div>
        <div class="ministry">
            <h2>Youth Ministries</h2>
            <p>Engages young people in spiritual growth, service opportunities, and leadership development through various programs, events, and activities.</p>
        </div>
        <div class="ministry">
            <h2>Education Ministries</h2>
            <p>Oversees the operation of Adventist educational institutions, including schools, colleges, and universities, providing holistic education based on Christian principles.</p>
        </div>
        <div class="ministry">
            <h2>Women's Ministries</h2>
            <p>Empowers women to serve, lead, and mentor others through spiritual growth, fellowship, and outreach initiatives.</p>
        </div>
        <div class="ministry">
            <h2>Men's Ministries</h2>
            <p>Equips men to fulfill their roles as spiritual leaders in their families, churches, and communities through Bible study, mentoring, and service.</p>
        </div>
        <div class="ministry">
            <h2>Prison Ministries</h2>
            <p>Offers spiritual support, counseling, and practical assistance to individuals incarcerated in prisons and juvenile detention centers.</p>
        </div>
        <!-- Add more ministries as needed -->
    </section>

    <section class="secondsection">
        <!-- Add sidebar content or additional sections -->
    </section>
@endsection