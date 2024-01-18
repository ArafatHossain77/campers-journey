<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campers Journey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Merriweather:wght@300;400;700;900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Merriweather:wght@300;400;700;900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:wght@400;500;600;700;800&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap"
        rel="stylesheet">
</head>
<body>
<!--header start-->
<header>
    <div class="container">
        <nav class="navbar bg-dark navbar-fixed-top" data-bs-theme="dark">
            <div class="container-fluid ">
                <div class="logo-text">
                    <h2>Campers <span>Journey</span></h2>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    {{--    <nav>--}}
    {{--        <div class="logo">--}}
    {{--            <div class="logo-img"><img src="styles/images/Group 40071 (2).png" alt=""></div>--}}
    {{--            <div class="logo-text">--}}
    {{--                <h2>Campers <span>Journey</span></h2>--}}
    {{--            </div>--}}

    {{--        </div>--}}

    {{--        <ul>--}}
    {{--            <li><a href="">Home</a></li>--}}
    {{--            <li><a href="">Packages</a></li>--}}
    {{--            <li><a href="">Testimonial</a></li>--}}
    {{--            <li><a href="">Blog</a></li>--}}
    {{--            <li><a href="">Contact</a></li>--}}
    {{--        </ul>--}}

    {{--    </nav>--}}
</header>
<!--header end-->
<main>
    <!--banner start-->
    <section class="banner">
        <div class="banner-contain">
            <h2 class="banner-titel">Explore Your Travel</h2>
            <p class="primary-pera">Discover seamless travel experiences with our dedicated service, where every detail
                is tailored to ensure your journey is not just a trip but a collection of unforgettable moments crafted
                with care and expertise.</p>
        </div>
        <div class="banner-input">
            <input type="text" placeholder="Where go">
            <input type="text" placeholder="When">
            <input type="text" placeholder="Select Type">
            <button><i class="fa-solid fa-magnifying-glass"></i>Find Now</button>
        </div>
    </section>
    <!--banner end-->
    <!--popular tour start-->
    <section class="popular-tour">
        <div class="tour-contain">
            <h3 class="tour-titel">Our Popular Tours</h3>
            <p class="tour-pera">Embark on extraordinary adventures with our popular tours, carefully curated to
                showcase the most enchanting destinations and immersive experiences.</p>
            <ul class="tour-pera">
                <li>Our popular tours take you to some of the most captivating and sought-after destinations around the
                    globe.
                </li>
                <li>Explore the world with confidence, knowing that each tour is expertly curated to deliver exceptional
                    experiences.
                </li>
                <li> Join us on our popular tours and create lasting memories. Whether it's a cultural discovery, an
                    adrenaline-pumping adventure.
                </li>
            </ul>
            <p class="tour-pera">From cultural odysseys to thrilling escapades, our collection of tours promises
                unforgettable moments and unparalleled exploration. Join us as we unveil the world's wonders and create
                memories that will last a lifetime.
            </p>
            <button>Read More</button>
        </div>
        <div class="tour-img">
            <img src="styles/images/Rectangle 4 (2).png" alt="">
        </div>
    </section>
    <!--popular tour end-->

    <!--destination start-->
    <section class="destination">
        <h2 class="destination-titel">Choose Your Destination</h2>
        <p class="destination-pera">Choose your destination from our diverse selection of travel experiences, ranging
            from exotic beach getaways to culturally rich city explorations. </p>

        <div class="first-row">
            <div class="box1 box-text"><h2>Maldives</h2></div>
            <div class="box2 box-text"><h2>Indonesia</h2></div>
        </div>

        <div class="secound-row">
            <div class="box3 box-text"><h2>Srilanka</h2></div>
            <div class="box4 box-text"><h2>North America</h2></div>
            <div class="box5 box-text"><h2>Kashmir</h2></div>

        </div>
        <div class="third-row">
            <div class="box6 box-text"><h2>Bangladesh</h2></div>
            <div class="box7 box-text"><h2>Bandarban</h2></div>
        </div>
    </section>
    <!--destination end-->

    <!--choose us start-->
    <section class="choose-us">
        <h3 class="choose-titel">Why Choose Us</h3>
        <p class="choose-pera">Choose us for an unparalleled level of service. Our commitment to excellence ensures that
            every aspect of your journey is meticulously planned and executed, providing you with a seamless and
            memorable travel experience.</p>
        <div class="card-row">
            <div class="hotels">
                <img src="styles/images/hotel 1.jpg" alt="">
                <h3 class="card-titel">Handpicked Hotels</h3>
                <p class="card-pera"> Our handpicked hotels represent the pinnacle of comfort and luxury. We
                    meticulously select each accommodation to ensure a stay that transcends expectations, offering a
                    harmonious blend of elegance, amenities, and exceptional service. </p>
            </div>
            <div class="service">
                <img src="styles/images/map 1.jpg" alt="">
                <h3 class="card-titel">World Class Service</h3>
                <p class="card-pera"> Experience world-class service that goes above and beyond expectations. Our
                    commitment to exemplary hospitality ensures that every guest is treated with the utmost care and
                    attention, creating an atmosphere of warmth and comfort. </p>
            </div>
        </div>
        <div class="guarantee">
            <img src="styles/images/price-tag 1.jpg" alt="">
            <h3 class="card-titel">Best Price Guarantee</h3>
            <p class="card-pera">Our best price guarantee comes with transparent pricing policies. You can trust that
                the prices quoted are fair, comprehensive, and reflective of the outstanding quality and value we strive
                to deliver in every aspect of our services. </p>
        </div>

    </section>
    <!--choose us end-->
    <!--Deals start-->
    <section class="deals">
        <h3 class="deals-titel">Deals & Discounts</h3>
        <p class="deals-pera">Dolor sit amet consectetur. Diam volutpat neque habitasse pharetra odio sit massa. Sodales
            dictumst nec nibh pellentesque.</p>
        <div class="deals1">
            <div class="deal-img">


                <div class="deal-text">
                    <ul>
                        <li><i class="fa-solid fa-clock orange"></i>7 Day / 6 Night</li>
                        <li><i class="fa-solid fa-user-group orange"></i>Max : 10</li>
                        <li><i class="fa-solid fa-location-dot orange"></i>Malaysia</li>
                    </ul>
                    <h2 class="deal-text-titel">Tour To Satorini</h2>
                    <p class="deal-text-pera">A tour to Santorini promises a captivating journey to one of the most
                        picturesque and enchanting destinations in the Aegean Sea. Renowned for its stunning landscapes.
                    </p>
                    <h2 class="deal-text-price">Price: $1300-$1500</h2>
                    <button> Book Now</button>
                </div>
            </div>
        </div>
        <div class="deals1">
            <div id="deal-img">


                <div id="deal-text">
                    <ul>
                        <li><i class="fa-solid fa-clock orange"></i>7 Day / 6 Night</li>
                        <li><i class="fa-solid fa-user-group orange"></i>Max : 10</li>
                        <li><i class="fa-solid fa-location-dot orange"></i>Malaysia</li>
                    </ul>
                    <h2 class="deal-text-titel">Tour To Satorini</h2>
                    <p class="deal-text-pera">A tour to Santorini promises a captivating journey to one of the most
                        picturesque and enchanting destinations in the Aegean Sea. Renowned for its stunning landscapes.
                    </p>
                    <h2 class="deal-text-price">Price: $1300-$1500</h2>
                    <button> Book Now</button>
                </div>
            </div>
        </div>
        <div class="deals1">
            <div class="deal-img">


                <div class="deal-text">
                    <ul>
                        <li><i class="fa-solid fa-clock orange"></i>7 Day / 6 Night</li>
                        <li><i class="fa-solid fa-user-group orange"></i>Max : 10</li>
                        <li><i class="fa-solid fa-location-dot orange"></i>Malaysia</li>
                    </ul>
                    <h2 class="deal-text-titel">Tour To Satorini</h2>
                    <p class="deal-text-pera">A tour to Santorini promises a captivating journey to one of the most
                        picturesque and enchanting destinations in the Aegean Sea. Renowned for its stunning landscapes.
                    </p>
                    <h2 class="deal-text-price">Price: $1300-$1500</h2>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

    </section>
    <!--Deals end-->
    <!--perfect place start-->
    <section class="perfect-place">
        <div class="perfect-text">
            <h3 class="perfect-titel">A Simple Perfect Place <br> To Get Lost</h3>
            <p class="perfect-pera">Discover the allure of a simple, perfect place to get lost—an idyllic destination
                where every winding path, unexplored corner invites a sense of adventure. </p>
            <ul>
                <li>
                    Mowdok Mual: It is the highest peak in Bangladesh, situated in the Bandarban district. While its
                    elevation is modest compared to mountains in other parts of the world.
                </li>
                <li>
                    Tazing Dong: Also located in the Bandarban district, Tazing Dong is another notable hill that offers
                    panoramic views of the lush greenery and the Sangu River.
                </li>
            </ul>
            <button>See More</button>
        </div>

        <div class="perfect-video">
            <iframe class="responsive-iframe" width="100%" height="315"
                    src="https://www.youtube.com/embed/Cn4G2lZ_g2I?si=FnF5aUrQ1c8HfGXS" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
    </section>
    <!--perfect place end-->
    <!--News & Blog start-->
    <section class="blog">
        <h3 class="blog-titel">News & Blog</h3>
        <p class="blog-pera">Stay informed about the ever-evolving world of travel through our News & Blog section. </p>
        <div class="card-container">
            <div class="card">
                <img src="styles/images/Paharpur_Buddhist_Bihar.jpg" alt="">
                <h3>Paharpur</h3>
                <p>Paharpur, also known as Somapura Mahavihara, is an ancient Buddhist monastery located in the
                    northwest part of Bangladesh. Designated as a UNESCO World Heritage Site, Paharpur is one of the
                    most important archaeological sites in the country.</p>
                <button>Read More</button>
            </div>
            <div class="card">
                <img src="styles/images/mosjid.jpg" alt="">
                <h3>Sixty Dome Mosque</h3>
                <p>The Sixty Dome Mosque, also known as Shait Gumbad Mosque or Shait Gambuj Mosque, is an ancient mosque
                    located in Bagerhat, Bangladesh. Built during the Bengal Sultanate in the 15th century by Ulugh Khan
                    Jahan, a governor of the Sundarbans region.</p>
                <button>Read More</button>
            </div>
            <div class="card">
                <img src="styles/images/lalbag.jpg" alt="">
                <h3>Lalbagh Fort</h3>
                <p>Lalbagh Fort, situated in the heart of Dhaka, Bangladesh, is a historic fortification that bears
                    witness to the architectural grandeur of the Mughal era. Commissioned in 1678 by Prince Muhammad
                    Azam, the son of Emperor Aurangzeb.</p>
                <button>Read More</button>
            </div>
        </div>
    </section>
    <!--News & Blog end-->

    <!--news letter start-->
    <section class="news-letter">
        <div class="news-letter-text">
            <h3 class="news-letter-titel">Newsletter</h3>
            <p class="news-letter-pera">Get your daily dose of travel news & tips. Sign up today!</p>
            <hr class="news-letter-hr">
            <input type="text" value="" name="" placeholder="Enter your first name">
            <input type="text" value="" name="" placeholder="Enter your last name">
            <input type="email" value="" name="" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </div>
        <div class="news-letter-img">
            <img src="styles/images/Rectangle 8 (1).png" alt="">
            <div class="discount">
                <h2 class="discount-titel">Travel.com</h2>
                <p class="discount-pera">Save up to 70%</p>
            </div>
        </div>
    </section>
    <!--news letter end-->

</main>
<footer>
    <section class="footer-part">
        <div class="footer-logo">
            <img src="styles/images/Group 40071 (2).png" alt="">
            <h2 class="logo-text1">Campers <span>Journey</span></h2>
        </div>
        <p class="footer-pera">
            Discover seamless travel experiences with our dedicated service, where every detail is tailored to ensure
            your journey is not just a trip but a collection of unforgettable moments crafted with care and expertise.
        </p>
        <div class="social-icon">

            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>


        </div>
        <hr class="footer-hr">
        <p class="copy-right">@CopyRight 2024 reserve CodeSparks</p>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
