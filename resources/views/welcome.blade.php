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
        <h2>Beliefs</h2>
        <p class="card-text">The Seventh-day Adventist Church believes in the inspiration and authority of the Bible as the Word of God. They uphold the fundamental teachings of Christianity, including the Trinity, the divinity of Jesus Christ, salvation by grace through faith, and the hope of eternal life. Additionally, Seventh-day Adventists emphasize the importance of the Sabbath day (Saturday) as the seventh day of the week, in accordance with the fourth commandment of the Ten Commandments. They believe that the Sabbath is a day of rest, worship, and spiritual renewal, and it serves as a sign of their loyalty to God as their Creator and Redeemer.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>History</h2>
        <p class="card-text">The Seventh-day Adventist Church traces its origins to the Millerite movement of the 1830s and 1840s, led by William Miller. Miller and his followers predicted that the Second Coming of Jesus Christ would occur in 1844. When this event, known as the Great Disappointment, did not occur as expected, many followers sought to understand the significance of the event and continued to study the Bible. Out of this movement emerged the Seventh-day Adventist Church, formally organized in 1863 by a group of believers led by James White, Ellen G. White, Joseph Bates, and others. Since then, the church has grown into a global denomination with millions of members worldwide, sharing its message of hope, health, and wholeness.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Mission</h2>
        <p class="card-text">The Seventh-day Adventist Church is dedicated to spreading the gospel message of Jesus Christ and preparing people for His second coming. This mission is based on the belief in the imminent return of Jesus Christ as taught in the Bible. Adventists seek to fulfill this mission through various forms of evangelism, including preaching, teaching, literature distribution, media ministry, and missionary work. They also engage in practical expressions of their faith through healthcare, education, and humanitarian initiatives. Adventist hospitals, schools, universities, and relief agencies operate around the world, providing medical care, education, and assistance to those in need, regardless of their religious affiliation.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Practices</h2>
        <p class="card-text">Seventh-day Adventists observe the Sabbath from Friday sunset to Saturday sunset, following the biblical commandment to remember the Sabbath day and keep it holy. The Sabbath is a time for rest, worship, fellowship, and spiritual renewal. Adventists abstain from certain foods such as pork, shellfish, and other unclean meats as outlined in the Old Testament dietary laws. They also emphasize a holistic approach to health, promoting principles of healthy living that include vegetarianism, regular exercise, adequate rest, and abstinence from harmful substances such as alcohol, tobacco, and illicit drugs. These health principles are based on the belief that the body is the temple of the Holy Spirit and should be cared for accordingly.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Structure</h2>
        <p class="card-text">The Seventh-day Adventist Church operates through a decentralized structure, with local churches organized into conferences, which are further grouped into larger unions and divisions. The General Conference serves as the global administrative body, providing leadership, coordination, and support for the worldwide work of the church. Each level of organization has its own administrative functions, responsibilities, and governance structures. This decentralized model allows for flexibility, adaptability, and local autonomy while ensuring unity of faith, mission, and purpose. It enables Seventh-day Adventists to effectively carry out their mission and ministry in diverse cultural, social, and geographic contexts around the world.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Adventist Education</h2>
        <p class="card-text">Education is an integral part of the Seventh-day Adventist Church's mission. Adventist schools, colleges, and universities around the world provide quality education that emphasizes academic excellence, character development, and spiritual growth. The curriculum integrates faith and learning, incorporating biblical principles into every subject. Adventist education seeks to prepare students for meaningful lives of service to God and humanity, equipping them with the knowledge, skills, and values needed to make a positive difference in the world.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Health Ministries</h2>
        <p class="card-text">Health and wellness are important aspects of Seventh-day Adventist beliefs and practices. Adventists promote a holistic approach to health that addresses physical, mental, and spiritual well-being. They emphasize preventive care, healthy lifestyle choices, and disease prevention. Adventist health ministries include hospitals, clinics, wellness centers, and lifestyle programs that provide medical care, health education, and support services to individuals and communities. These ministries seek to promote healing, wholeness, and hope for a better quality of life.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Community Service</h2>
        <p class="card-text">Seventh-day Adventists are actively involved in community service and outreach programs that address social needs and alleviate human suffering. Adventist community service initiatives include food distribution programs, homeless shelters, disaster relief efforts, literacy programs, and more. These ministries seek to demonstrate Christ's love in practical ways, providing assistance and support to individuals and families in need. Adventists believe in the importance of serving others as an expression of their faith and a reflection of God's compassion and mercy.</p>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <h2>Missionary Work</h2>
        <p class="card-text">Seventh-day Adventists are committed to sharing the gospel message of Jesus Christ with people around the world. They engage in missionary work through evangelism, church planting, literature distribution, medical missions, and other outreach efforts. Adventist missionaries serve in diverse cultural, social, and geographic contexts, reaching out to people of all ages, backgrounds, and beliefs. They seek to meet both the spiritual and physical needs of individuals and communities, sharing the hope and wholeness found in Jesus Christ.</p>
    </div>
</div>
</div>

            
@endsection

