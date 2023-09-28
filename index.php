<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A CELEBRATION OF AFRO EXCELLENCE | TRACE Festival</title>
    <meta name="description"
          content="3 DAYS TO ENTERTAIN - EMPOWER - ENGAGE | MUSIC - FASHION - MARKETPLACE - CONFERENCES - FOOD & BEVERAGE AND SO MUCH MORE...">
    <meta name="keywords"
          content="TRACE Festival, Afro Excellence, Music, Fashion, Marketplace, Conferences, Food & Beverage">
    <meta name="author" content="Your Name">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="A CELEBRATION OF AFRO EXCELLENCE | TRACE Festival">
    <meta property="og:description"
          content="3 DAYS TO ENTERTAIN - EMPOWER - ENGAGE | MUSIC - FASHION - MARKETPLACE - CONFERENCES - FOOD & BEVERAGE AND SO MUCH MORE...">
    <meta property="og:image" content="https://tracefestival.com/assets/img/favicon.jpg">
    <meta property="og:url" content="https://tracefestival.com">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="A CELEBRATION OF AFRO EXCELLENCE | TRACE Festival">
    <meta name="twitter:description"
          content="3 DAYS TO ENTERTAIN - EMPOWER - ENGAGE | MUSIC - FASHION - MARKETPLACE - CONFERENCES - FOOD & BEVERAGE AND SO MUCH MORE...">
    <meta name="twitter:image" content="https://tracefestival.com/assets/img/favicon.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assetss/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/progressbar-fill-visible/css/progressBar.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
          rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6K6C0DSTMF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-6K6C0DSTMF');
    </script>

    <style>
        /* Add this CSS in your stylesheet or in a separate CSS file */
        .carousel-container {
            overflow: hidden;
            height: 100%; /* Adjust the height as needed */
            position: relative;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease; /* Smooth transition for sliding */
        }

        .controls {
            text-align: center;
            margin-top: 20px; /* Adjust the margin as needed */
        }

        .prev,
        .next {
            background-color: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        .prev {
            position: absolute;
            left: 0;
        }

        .next {
            position: absolute;
            right: 0;
        }


        @media (max-width: 768px) {
            #titles {
                margin-top: -40px !important;
            }

            #titles .imgs {
                padding-top: 230px;
                width: 20%;
            }

            .carousel .col-12 .img-fluid {
                /* Smooth transition for sliding */
            }


            .carousel-container {
                width: 300px;

            }

            #titles .hea {
                font-size: 18px;
                padding-top: 0px;
            }

            #titles h2 {
                font-size: 23px;
            }

            .artist-card h2 {
                font-size: 10px;
            }

            .artist-card p {
                font-size: 16px;
            }
        }

        .image-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .image-container::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #120F10 100%);
        }

        .viewMoreButton {
            cursor: pointer;
            transition: opacity 0.3s ease-in-out;
        }

        .viewMoreButton:hover {
            opacity: 0.7;
        }

        footer {
            text-align: center;
            color: #fff;
            padding: 10px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #partners div div img {
            padding: 30px;
        }

    </style>
</head>
<body>

<div class="image-container">
    <img src="assetss/img/banner_new.jpg" alt="Trace Festival">
</div>

<a href=""
   style="text-decoration: none; position: absolute; top: 4px; left: 20px; padding: 10px 20px; cursor: pointer;"></a>

<div id="titles" style=" margin-top: -100px; text-align: center !important;">
    <img class="imgs" src="assets/img/logo.png" width="20%">

    <p class="hea h1" style="margin-top: 30px;">A CELEBRATION OF AFRO EXCELLENCE</p>

    <h3 class="hea">20 - 22 OCTOBER | KIGALI CONVENTION & EXHIBITION VILLAGE</h3>

    <h2 class="hea">3 DAYS TO ENTERTAIN - EMPOWER - ENGAGE</h2>

    <br>
    <h3 class="hea">MUSIC - FASHION - MARKETPLACE - CONFERENCES - FOOD & BEVERAGE AND SO MUCH MORE...</h3>

    <br>
    <div class="partner-logos">


        <br><br><br>
        <h2 class="section-title"> MAIN STAGE </h2>
        <h3>GET TO MEET</h3>
        <br>
        <br>
        <div class="container">
            <div class="carousel-container">
                <div class="carousel">
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/amutoni.JPG" class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">Angell Mutoni</h2>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/kivumbi.JPG" class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">kivumbi King</h2>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/Mike Kayihura.jpg" class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">Mike Kayihura</h2>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/Benjamin Dube - SA - Headshot 2.jpg"
                             class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">Benjamin Dube</h2>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/Boy Chopper.jpg" class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">Boy Chopper</h2>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/Sema Solé.jpg" class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">Sema Solé</h2>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <br>
                        <img data-aos="zoom-in" src="assetss/img/artists/Tsonpa.jpeg" class="img-fluid">
                        <br><br>
                        <h2 data-aos="zoom-in-up" class="">TSONPA</h2>
                    </div>
                </div>
                <style>

                    /* Add hover effect for images */
                    .carousel-container .carousel img {
                        transition: transform 0.3s ease;
                    }

                    .carousel-container .carousel img:hover {
                        transform: scale(1.11); /* Adjust the scale factor for the desired zoom effect */
                    }
                </style>
            </div>
            <div class="controls">
                <button class="prev btn btn-secondary"><i class="fas fa-chevron-left"></i></button>
                <button class="next btn btn-secondary"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <section class="home-schedule-section  rounded" style="background-color: #120F10;">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">SCHEDULE DETAILS</span>
                            <h3 class="section-title">
                                INFORMATION OF EVENT SCHEDULE !
                            </h3>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="time-circle-wrapper">
                            <div class="time-info">
                                <div class="time-txt">
                                    <h5>20TH OCT</h5>
                                    <span style="font-size: 20px; padding: 8px;">FRIDAY</span><br>
                                    <span style="font-size: 20px; padding: 8px;">2pm - 10 pm</span>
                                </div>
                            </div>
                            <div class="time-info">
                                <div class="time-txt">
                                    <h5>21TH OCT</h5>
                                    <span style="font-size: 20px; padding: 8px;">SATURDAY</span><br>
                                    <span style="font-size: 20px; padding: 8px;">10am - 00pm</span>
                                </div>
                            </div>
                            <div class="time-info">
                                <div class="time-txt">
                                    <h5>22TH OCT</h5>
                                    <span style="font-size: 20px; padding: 8px;">SUNDAY</span> <br>
                                    <span style="font-size: 20px; padding: 8px;">10am - 8pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="col-lg-12">
            <div class="section-head">
                <span class="section-sub-title ">JOIN US !   </span>
                <h2 class="section-title">
                    DISCOVER OUR SPACES
                </h2>
            </div>
        </div>
        <section class="home-gallery">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">TENT KIVU</span>
                            <h2 class="section-title">
                                MARKETPLACE
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                Experience Trace Festival’s universe through a unique cozy and inspiring concept store.
                                We selected the best Afro-creative leads in: Fashion, Home decor, Arts & Crafts, Hair,
                                Make-up & Beauty, Content Creation, and Photography.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="gallery-container">
                    <div class="row grid">
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img6.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/shop.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img19.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/kidsss.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img8.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/Kigali_Arena_Rwanda.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img10.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/shop one.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-gallery">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                Tent Akagera

                                Because what would be a celebration without food? Trace Festival gathered the tastiest
                                food and beverage vendors to accompany your experience. Discover new flavors and cheers
                                to Afro excellence!

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">KID’S ZONE  </span>
                            <h2 class="section-title">

                                KID’S ZONE

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="gallery-container">
                    <div class="row grid">
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img6.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/kids.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img19.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/kidsss.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img8.jpg" data-fancybox="gallery">
                                    <img src="assetss/img/kisss.jpeg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img10.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img20.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-gallery">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">TEST AND LEARN   </span>
                            <h2 class="section-title">

                                TEST AND LEARN

                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                Tent Kigali

                                Are you interested in the music industry, Entrepreneurship, social media, or video
                                production?
                                Get to attend exclusive masterclasses, talks, and workshops. Let’s grow together and
                                showcase creativity, passion and success!


                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="home-gallery">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                Tent Akagera

                                Because what would be a celebration without food? Trace Festival gathered the tastiest
                                food and beverage vendors to accompany your experience. Discover new flavors and cheers
                                to Afro excellence!


                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">FOOD COURT   </span>
                            <h2 class="section-title">

                                FOOD COURT

                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <br>
        <a href="https://bkarena.rw/trace-awards-preregistration/" target="_blank">Get your ticket</a>

        <div class="container">
            <br><br><br>
            <h2>OUR PARTNERS</h2>
            <br>
            <br>
        </div>

        <div class="container" id="partners">
            <div class="row">
                <div class="col-md-3 col-4 col-lg-3  partner-logo">
                    <img src="assets/img/partners/martell.png" class="img-fluid">
                </div>

                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/visit%20rwanda.png" class="img-fluid">
                </div>

                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/rwandair.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/bkarena.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/belaire.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/rba.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/empire.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-4 col-lg-3 partner-logo">
                    <img src="assets/img/partners/pepsi.png" class="img-fluid">
                </div>


                <!-- Add more items as needed -->
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2023 Trace. All rights reserved.</p>
</footer>
<script data-cfasync="false"
        src="https://demo.bosathemes.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/vendors/jquery/jquery.js"></script>
<script src="assets/vendors/waypoint/jquery.waypoints.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
<script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
<script src="assets/vendors/counterup/jquery.counterup.js"></script>
<script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
<script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
<script src="assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/slick-nav/jquery.slicknav.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const carousel = $('.carousel');
        const prevButton = $('.prev');
        const nextButton = $('.next');
        const slideWidth = $('.col-lg-4').outerWidth(true); // Width of one slide including margin

        let currentSlide = 0;

        function goToSlide(slide) {
            if (slide < 0) {
                slide = 0;
            } else if (slide >= carousel.children().length) {
                slide = carousel.children().length - 1;
            }
            currentSlide = slide;
            carousel.css('transform', `translateX(-${slide * slideWidth}px)`);

            // Disable/enable Prev and Next buttons based on the current slide
            prevButton.prop('disabled', currentSlide === 0);
            nextButton.prop('disabled', currentSlide === carousel.children().length - 1);
        }

        // Initial button state
        prevButton.prop('disabled', true);

        prevButton.click(function () {
            goToSlide(currentSlide - 1);
        });

        nextButton.click(function () {
            goToSlide(currentSlide + 1);
        });
    });

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
