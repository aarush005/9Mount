<?php include 'header.php'; ?>


<style>
    #mainNav {
        padding-top: 1rem;
        padding-bottom: 1rem;
        background-color: #212529;
    }

    #mainNav .navbar-toggler {
        padding: 0.75rem;
        font-size: 0.75rem;
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        text-transform: uppercase;
        font-weight: 700;
    }

    #mainNav .navbar-brand {
        color: #ffc800;
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-weight: 700;
        letter-spacing: 0.0625em;
        text-transform: uppercase;
    }

    #mainNav .navbar-brand img {
        height: 1.5rem;
    }

    #mainNav .navbar-nav .nav-item .nav-link {
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 0.95rem;
        color: #fff;
        letter-spacing: 0.0625em;
    }

    #mainNav .navbar-nav .nav-item .nav-link.active,
    #mainNav .navbar-nav .nav-item .nav-link:hover {
        color: #ffc 800;
    }

    @media (min-width: 992px) {
        #mainNav {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            border: none;
            background-color: transparent;
            transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
        }

        #mainNav .navbar-brand {
            font-size: 1.5em;
            transition: font-size 0.3s ease-in-out;
        }

        #mainNav .navbar-brand img {
            height: 2rem;
            transition: height 0.3s ease-in-out;
        }

        #mainNav.navbar-shrink {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: #212529;
        }

        #mainNav.navbar-shrink .navbar-brand {
            font-size: 1.25em;
        }

        #mainNav.navbar-shrink .navbar-brand svg,
        #mainNav.navbar-shrink .navbar-brand img {
            height: 1.5rem;
        }

        #mainNav .navbar-nav .nav-item {
            margin-right: 1rem;
        }

        #mainNav .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }
    }
</style>

<script>
    window.addEventListener('DOMContentLoaded', event => {

        // Navbar shrink function
        var navbarShrink = function() {
            const navbarCollapsible = document.body.querySelector('#mainNav');
            if (!navbarCollapsible) {
                return;
            }
            if (window.scrollY === 0) {
                navbarCollapsible.classList.remove('navbar-shrink')
            } else {
                navbarCollapsible.classList.add('navbar-shrink')
            }

        };

        // Shrink the navbar 
        navbarShrink();

        // Shrink the navbar when page is scrolled
        document.addEventListener('scroll', navbarShrink);

        //  Activate Bootstrap scrollspy on the main nav element
        const mainNav = document.body.querySelector('#mainNav');
        if (mainNav) {
            new bootstrap.ScrollSpy(document.body, {
                target: '#mainNav',
                rootMargin: '0px 0px -40%',
            });
        };

        // Collapse responsive navbar when toggler is visible
        const navbarToggler = document.body.querySelector('.navbar-toggler');
        const responsiveNavItems = [].slice.call(
            document.querySelectorAll('#navbarResponsive .nav-link')
        );
        responsiveNavItems.map(function(responsiveNavItem) {
            responsiveNavItem.addEventListener('click', () => {
                if (window.getComputedStyle(navbarToggler).display !== 'none') {
                    navbarToggler.click();
                }
            });
        });

    });
</script>


<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #ff4500;">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <!-- <img src="images/logo.png" alt=""> -->
                        <span>
                            9Mount
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars ms-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item-dark"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item-dark"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item-dark"><a class="nav-link" href="product.php">Product</a></li>
                            <li class="nav-item-dark"><a class="nav-link" href="contact.php">Contact us</a></li>
                            <li class="nav-item-dark"><a class="nav-link" href="login.php">Login</a></li>
                        </ul>
                    </div>
                    <div class="quote_btn-container-dark ">
                        <a href="">
                            <div class="cart_number">
                                <img src="images/cart.png" alt="">
                                0
                            </div>
                        </a>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div class="design-box">
            <img src="images/design-1.png" alt="">
        </div>
        <div class="slider_number-container d-none d-md-block">
            <div class="number-box">
                <span>
                    01
                </span>
                <hr>
                <span class="jwel">
                    9 <br>
                    M <br>
                    O <br>
                    U <br>
                    N <br>
                    T

                </span>
                <hr>
                <span>
                    02
                </span>
            </div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h2>
                                        <span> New Product</span>
                                        <hr>
                                    </h2>
                                    <h1>
                                        Corn Oil
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                                        aptent taciti sociosqu ad litora torquent per conubia nostra
                                    </p>
                                    <div>
                                        <a href="">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="img/corn/item.png" alt="" style="width: 470px" height="445px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h2>
                                        <span> New Product</span>
                                        <hr>
                                    </h2>
                                    <h1>
                                        Corn Oil
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                                        aptent taciti sociosqu ad litora torquent per conubia nostra
                                    </p>
                                    <div>
                                        <a href="">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="img/corn/item.png" alt="" style="width: 470px" height="445px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h2>
                                        <span> New Product</sspan>
                                            <hr>
                                    </h2>
                                    <h1>
                                        Corn Oil
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                                        aptent taciti sociosqu ad litora torquent per conubia nostra
                                    </p>
                                    <div>
                                        <a href="">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="img/corn/item.png" alt="" style="width: 470px" height="445px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end slider section -->
</div>




<!-- Carousel Start -->
<!-- <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/corn/carousel 1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome to 9Mount</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best Corn Oil Manufacturer</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-warning py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/corn/carousel 1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome to 9Mount</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best Corn Oil Manufacturer</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-warning py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/corn/carousel 1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome to 9Mount</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best Corn Oil Manufacturer</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-warning py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Carousel End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-check fa-2x text-warning"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">01</h1>
                </div>
                <h5>Food Experts</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fa-2x text-warning"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">02</h1>
                </div>
                <h5>Quality Products</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-drafting-compass fa-2x text-warning"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">03</h1>
                </div>
                <h5>Free Consultation</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                        <i class="fa fa-headphones fa-2x text-warning"></i>
                    </div>
                    <h1 class="display-1 text-light mb-0">04</h1>
                </div>
                <h5>Customer Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->



<!-- About Start -->
<div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <center>
            <header>
                <h1 class="display-5 mb-4">About Us</h1>
            </header>
        </center>
        <div class="row g-0 mx-lg-0">
            <div class="col-md-6 ps-lg-0" style="min-height: 600px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-70 h-100" src="img/corn/about2.png" style=" margin-right:20px; margin-left: 15px;
    border-radius: 15px;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 px-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-2 px-4">
                    <!-- <div class="section-title text-start">
                            <h1 class="display-5 mb-4">About Us</h1>
                        </div> -->
                    <p class="mb-4 pb-2 px-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <div class="row g-4 mb-4 pb-2 px-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-users fa-2x text-warning"></i>
                                </div>
                                <div class="ms-3 px-4">
                                    <h2 class="text-warning mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="fw-medium mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn px-4" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-check fa-2x text-warning"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-warning mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="fw-medium mb-0">Projects Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-warning py-3 px-4 rounded-pill">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Product Start -->
<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Products</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/corn/product.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Corn Oil</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid h-18" src="img/corn/product.jpg" alt="" >
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Corn Oil</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/corn/product.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Corn Oil</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/corn/product.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Corn Oil</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/corn/product.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Corn Oil</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/corn/product.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Corn Oil</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Product End -->
<!-- product start -->

<div class="product_header">
    <center>


        <h1 class="display-5 mb-4" style="margin-top:50px;">Our Products</h1>
    </center>
</div>

<div class="row " style="margin-bottom:-387px;">
    <div class="col md-3">



        <div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="img/corn/item.png" width="300">

                </div>


                <div class="about-product text-center">

                    <h3>Corn oil</h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>


                </div>

            </div>

        </div>
    </div>
    <div class="col md-3">



        <div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="img/corn/item.png" width="300">

                </div>


                <div class="about-product text-center">

                    <h3>Corn oil</h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>


                </div>

            </div>

        </div>
    </div>
    <div class="col md-3">



        <div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="img/corn/item.png" width="300">

                </div>


                <div class="about-product text-center">

                    <h3>Corn Oil</h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>


                </div>

            </div>

        </div>
    </div>
</div>

<div class="row ">
    <div class="col md-3 ">



        <div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="img/corn/item.png" width="300">

                </div>


                <div class="about-product text-center">

                    <h3>Corn oil</h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>


                </div>

            </div>

        </div>
    </div>
    <div class="col md-3">



        <div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="img/corn/item.png" width="300">

                </div>


                <div class="about-product text-center">

                    <h3>Corn oil</h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>


                </div>

            </div>

        </div>
    </div>
    <div class="col md-3">



        <div class="wrapper">

            <div class="card text-center">

                <div class="image">


                    <img src="img/corn/item.png" width="300">

                </div>


                <div class="about-product text-center">

                    <h3>Corn oil </h3>

                    <h4>$99.<small>99</small></h4>

                    <button class="btn btn-success buy-now">Buy Now</button>


                </div>

            </div>

        </div>
    </div>
</div>



<!-- product end -->


<!-- Feature Start -->
<!-- <div class="container-fluid bg-white overflow-hidden my-5 px-lg-12">
        <div class="container feature px-lg-4"> 
            <center><header><h1 class="display-5 mb-4">Why Choose Us</h1></header></center>
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                       
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-warning"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-warning"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Creative</p>
                                        <h5 class="mb-0">Designers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-warning"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Free</p>
                                        <h5 class="mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-warning"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Customer</p>
                                        <h5 class="mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 600px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/corn/Us.jpg" style="object-fit: cover; border-radius:30px; " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Feature End -->


<!-- Projects Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">General Carpentry</li>
                        <li class="mx-2" data-filter=".second">Custom Carpentry</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-warning fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-warning fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-warning fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-warning fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-warning fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-warning fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Projects End -->


<!-- Quote Start -->
<!-- <div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <center>
            <header>
                <h1 class="display-5 mb-4">Subscribe to Our Newsletter</h1>
            </header>
        </center>
        <div class="row g-0 mx-lg-0" style="margin-left: 20px;">

            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0"> -->
<!-- <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Free Quote</h1>
                        </div> -->
<!-- <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 2</option>
                                    <option value="3">Service 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-0 px-4" style="min-height: 300px;">
                <div class="position-relative h-100">
                    <img class="position-absolute  w-100 h-100 px-4" src="img/corn/Quote.png" style=" border-radius: 30px" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Quote End -->

<!-- Newsletter -->







<!-- Team Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-5 border-light border-top-0 p-4">
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Team Members</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-1.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-2.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle " src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3 rounded-circle" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <!-- <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p> -->
                    <h5 class="mb-1">Name</h5>
                    <span class="fst-italic">Designation</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<?php include 'footer.php'; ?>
<!-- Footer End-->
</body>

</html>