<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <style>
        body{
            width: 100%;
            background: #D3D3D3;
        }
        .firstsection{
            width: 90%;
            height: auto;
            flex-shrink: 0;
            background: #D9D9D9;
            margin-right:1%;
            float:left;
        }
        .secondsetion{
            float:left;
            width:20%;
            height: 100%;
            background: #2F557F;           
        }
        a{
            width: 112px;
            height: 18px;
            flex-shrink: 0;
            color: #2F557F;
            text-align: center;
            font-family: Advent Pro;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-decoration: none;
        }
        p{
            width: 100%;
            /* height: 441px; */
            flex-shrink: 0;
            color: #000;
            text-align: justify;
            font-family: Aclonica;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .footer{
            color: #D9A401;
            font-family: Advent Pro;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        button{
            width: 77px;
            height: 22px;
            flex-shrink: 0;
            border-radius: 5px;
            background: #2F557F;
        }

    </style>
</head>
<body>
@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="firstsection">
                <a href="">Home</a>
                <a href="">About Us</a>
                <a href="">Worship Services</a>
                <a href="">Ministries</a>
                <a href="">Events</a>
                <a href="">Contact Us</a>
                <p>
                About Us Section:
Text: Test SDA Church is a loving and diverse congregation that has been serving our local community for [insert number of years] years. Our mission is to spread the love of God and serve others with compassion and purpose. We are part of the global family of Seventh-day Adventists, sharing the hope of Christ's return.
Worship Services Section:
Service Times: Join us for our Sabbath worship services every Saturday at [insert time]. We gather to praise, pray, and study God's Word together.
Live Streaming: Can't make it to the church in person? Watch our services online through our live streaming platform [insert link].
Sermon Archive: Catch up on past sermons and messages by visiting our sermon archive [insert link].
Ministries Section:
List of Ministries: Explore our ministries, each dedicated to fulfilling a unique purpose within our church community.
Brief Descriptions: Our ministries include the Youth Ministry, Women's Ministry, Men's Ministry, Outreach Programs, Music Ministry, and more. Get involved and grow with us.
Call to Action: Discover how you can contribute to our vibrant church community. Join one of our ministries to share your gifts and talents with us.
Events Section:
Upcoming Events: Stay up to date with our upcoming events, special services, and community activities. Join us in fellowship and service.
Event Calendar: Explore our event calendar for a complete list of activities and their respective dates [insert link].
Contact Us Section:
Contact Information: Reach out to us with any questions or concerns. We are located at [insert address], or you can call us at [insert phone number].
Contact Form: You can also send us a message through the form below, and we'll respond as soon as possible.
Map: Find us on the map below, and plan your visit to Test SDA Church.
Login and Register Section:
Member Login: For existing church members, please log in to access exclusive member resources and updates.
New Member Registration: New to Test SDA Church? We welcome you to register below and become a part of our church family.
                </p>
                <button><a href="{{ route('register') }}"style= "color:#D9A401;">Login</a></button>
            <button><a href="{{ route('register') }}"style= "color:#D9A401;">Register</a></button>
<div class="footer">
©️ CMS|All rights reserved
</div>
            </div>
            
  
            <div class="secondsection">
                
Test background

            </div>
</body>
</html>
