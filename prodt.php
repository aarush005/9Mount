<?php include 'heamenue.php'; ?>
<!-- Page Header Start -->
<!-- <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div> -->
<!-- Page Header End -->

<!-- <style>
    .slide{
        margin-left: 50px;
    }
    .box-minmax {
        margin-top: 30px;
        width: 298px;
        display: flex;
        justify-content: space-between;
        font-size: 20px;
        color: #ffffff;
    }

    .box-minmax span:first-child {
        margin-left: 10px;
    }

    .range-slider {
        /* margin-top: 30vh; */
    }

    .rs-range {
        margin-top: 29px;
        width: 300px;
        -webkit-appearance: none;
    }

    .rs-range:focus {
        outline: none;
    }

    .rs-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 1px;
        cursor: pointer;
        box-shadow: none;
        background: #ffffff;
        border-radius: 0px;
        border: 0px solid #010101;
    }

    .rs-range::-moz-range-track {
        width: 100%;
        height: 1px;
        cursor: pointer;
        box-shadow: none;
        background: #ffffff;
        border-radius: 0px;
        border: 0px solid #010101;
    }

    .rs-range::-webkit-slider-thumb {
        box-shadow: none;
        border: 0px solid #ffffff;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
        height: 42px;
        width: 22px;
        border-radius: 22px;
        background: white;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -20px;
    }

    .rs-range::-moz-range-thumb {
        box-shadow: none;
        border: 0px solid #ffffff;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
        height: 42px;
        width: 22px;
        border-radius: 22px;
        background: white;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -20px;
    }

    .rs-range::-moz-focus-outer {
        border: 0;
    }

    .rs-label {
        position: relative;
        transform-origin: center center;
        display: block;
        width: 74px;
        height: 74px;
        background: transparent;
        border-radius: 50%;
        line-height: 30px;
        text-align: center;
        font-weight: bold;
        padding-top: 22px;
        box-sizing: border-box;
        border: 2px solid #fff;
        margin-top: 20px;
        margin-left: -38px;
        left: attr(value);
        color: #fff;
        font-style: normal;
        font-weight: normal;
        line-height: normal;
        font-size: 36px;
    }

    .rs-label::after {
        content: "kg";
        display: block;
        font-size: 20px;
        letter-spacing: 0.07em;
        margin-top: -2px;
    }
</style>

<div class="row shop-sidebar d-flex">
    <div class="sidebar  d-none d-xl-block tbay-sidebar-shop col-12 col-xl-3 bg-success ">


        <div class="side_redraw_zone" data-side-ver="3.3.0">


            <div data-css-class="side_price_search_container" class="side_price_search_container side_container side_price_filter">
                <div class="side_container_overlay_item"></div>
                <div class="side_container_inner">
                    <div class=" widget_price_filter">
                        <h4>
                            Price </h4>

                        <form method="get" action="">
                            <div class="price_slider_wrapper">
                                <div class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                   
                                        <div class="slide">


                                        <div class="range-slider">
                                            <span id="rs-bullet" class="rs-label">0</span>
                                            <input id="rs-range-line" class="rs-range" type="range" value="0" min="0" max="200">

                                        </div>

                                        <div class="box-minmax">
                                            <span>0</span><span>200</span>
                                        </div>
                                        </div>


                                    <script>
                                        var rangeSlider = document.getElementById("rs-range-line");
                                        var rangeBullet = document.getElementById("rs-bullet");

                                        rangeSlider.addEventListener("input", showSliderValue, false);

                                        function showSliderValue() {
                                            rangeBullet.innerHTML = rangeSlider.value;
                                            var bulletPosition = (rangeSlider.value / rangeSlider.max);
                                            rangeBullet.style.left = (bulletPosition * 578) + "px";
                                        }
                                    </script>
                                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0"    class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                                </div>
                                <div class="price_slider_amount">
                                    <input type="text" id="min_price" name="min_price" value="10" data-min="10" placeholder="Min price" style="display: none;">
                                    <input type="text" id="max_price" name="max_price" value="46" data-max="46" placeholder="Max price" style="display: none;">
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label" style="">
                                        Price:
                                        <span class="from">$10</span> — <span class="to">$46</span>
                                    </div>






                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>

    </div>
</div> -->

<style>
    /*

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

---------------------------------------------
Table of contents
------------------------------------------------
1. Typography
2. General
3. Nav
4. Hero Carousel
5. Accordion
6. Shop
7. Product
8. Carousel Hero
9. Carousel Brand
10. Services
11. Contact map
12. Footer
13. Small devices (landscape phones, 576px and up)
14. Medium devices (tablets, 768px and up)
15. Large devices (desktops, 992px and up)
16. Extra large devices (large desktops, 1200px and up)
--------------------------------------------- */




    /* Typography */
    body,
    ul,
    li,
    p,
    a,
    label,
    input,
    div {
        font-family: 'Roboto', sans-serif;
        font-size: 18px !important;
        font-weight: 300 !important;
    }

    .h1 {
        font-family: 'Roboto', sans-serif;
        font-size: 48px !important;
        font-weight: 200 !important;
    }

    .h2 {
        font-family: 'Roboto', sans-serif;
        font-size: 30px !important;
        font-weight: 300;
    }

    .h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 22px !important;
    }

    /* General */
    .logo {
        font-weight: 500 !important;
    }

    .text-warning {
        color: #ede861 !important;
    }

    .text-muted {
        color: #bcbcbc !important;
    }

    .text-success {
        color: #59ab6e !important;
    }

    .text-light {
        color: #cfd6e1 !important;
    }

    .bg-dark {
        background-color: #212934 !important;
    }

    .bg-light {
        background-color: #e9eef5 !important;
    }

    .bg-black {
        background-color: #1d242d !important;
    }

    .bg-success {
        background-color: #59ab6e !important;
    }

    .btn-success {
        background-color: #59ab6e !important;
        border-color: #56ae6c !important;
    }

    .pagination .page-link:hover {
        color: #000;
    }

    .pagination .page-link:hover,
    .pagination .page-link.active {
        background-color: #69bb7e;
        color: #fff;
    }

    /* Nav */
    #templatemo_nav_top {
        min-height: 40px;
    }

    #templatemo_nav_top * {
        font-size: .9em !important;
    }

    #templatemo_main_nav a {
        color: #212934;
    }

    #templatemo_main_nav a:hover {
        color: #69bb7e;
    }

    #templatemo_main_nav .navbar .nav-icon {
        margin-right: 20px;
    }

    /* Hero Carousel */
    #template-mo-zay-hero-carousel {
        background: #efefef !important;
    }

    /* Accordion */
    .templatemo-accordion a {
        color: #000;
    }

    .templatemo-accordion a:hover {
        color: #333d4a;
    }

    /* Shop */
    .shop-top-menu a:hover {
        color: #69bb7e !important;
    }

    /* Product */
    .product-wap {
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.10);
    }

    .product-wap .product-color-dot.color-dot-red {
        background: #f71515;
    }

    .product-wap .product-color-dot.color-dot-blue {
        background: #6db4fe;
    }

    .product-wap .product-color-dot.color-dot-black {
        background: #000000;
    }

    .product-wap .product-color-dot.color-dot-light {
        background: #e0e0e0;
    }

    .product-wap .product-color-dot.color-dot-green {
        background: #0bff7e;
    }

    .card.product-wap .card .product-overlay {
        background: rgba(0, 0, 0, .2);
        visibility: hidden;
        opacity: 0;
        transition: .3s;
    }

    .card.product-wap:hover .card .product-overlay {
        visibility: visible;
        opacity: 1;
    }

    .card.product-wap a {
        color: #000;
    }

    #carousel-related-product .slick-slide:focus {
        outline: none !important;
    }

    #carousel-related-product .slick-dots li button:before {
        font-size: 15px;
        margin-top: 20px;
    }

    /* Brand */
    .brand-img {
        filter: grayscale(100%);
        opacity: 0.5;
        transition: .5s;
    }

    .brand-img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    /* Carousel Hero */
    #template-mo-zay-hero-carousel .carousel-indicators li {
        margin-top: -50px;
        background-color: #59ab6e;
    }

    #template-mo-zay-hero-carousel .carousel-control-next i,
    #template-mo-zay-hero-carousel .carousel-control-prev i {
        color: #59ab6e !important;
        font-size: 2.8em !important;
    }

    /* Carousel Brand */
    .tempaltemo-carousel .h1 {
        font-size: .5em !important;
        color: #000 !important;
    }

    /* Services */
    .services-icon-wap {
        transition: .3s;
    }

    .services-icon-wap:hover,
    .services-icon-wap:hover i {
        color: #fff;
    }

    .services-icon-wap:hover {
        background: #69bb7e;
    }

    /* Contact map */
    .leaflet-control a,
    .leaflet-control {
        font-size: 10px !important;
    }

    .form-control {
        border: 1px solid #e8e8e8;
    }

    /* Footer */
    #tempaltemo_footer a {
        color: #dcdde1;
    }

    #tempaltemo_footer a:hover {
        color: #68bb7d;
    }

    #tempaltemo_footer ul.footer-link-list li {
        padding-top: 10px;
    }

    #tempaltemo_footer ul.footer-icons li {
        width: 2.6em;
        height: 2.6em;
        line-height: 2.6em;
    }

    #tempaltemo_footer ul.footer-icons li:hover {
        background-color: #cfd6e1;
        transition: .5s;
    }

    #tempaltemo_footer ul.footer-icons li:hover i {
        color: #212934;
        transition: .5s;
    }

    #tempaltemo_footer .border-light {
        border-color: #2d343f !important;
    }

    /*
// Extra small devices (portrait phones, less than 576px)
// No media query since this is the default in Bootstrap
*/
    /* Small devices (landscape phones, 576px and up)*/
    .product-wap .h3,
    .product-wap li,
    .product-wap i,
    .product-wap p {
        font-size: 12px !important;
    }

    .product-wap .product-color-dot {
        width: 6px;
        height: 6px;
    }

    @media (min-width: 576px) {
        .tempaltemo-carousel .h1 {
            font-size: 1em !important;
        }
    }

    /*// Medium devices (tablets, 768px and up)*/
    @media (min-width: 768px) {
        #templatemo_main_nav .navbar-nav {
            max-width: 450px;
        }
    }

    /* Large devices (desktops, 992px and up)*/
    @media (min-width: 992px) {
        #templatemo_main_nav .navbar-nav {
            max-width: 550px;
        }

        #template-mo-zay-hero-carousel .carousel-item {
            min-height: 30rem !important;
        }

        .product-wap .h3,
        .product-wap li,
        .product-wap i,
        .product-wap p {
            font-size: 18px !important;
        }

        .product-wap .product-color-dot {
            width: 12px;
            height: 12px;
        }
    }

    /* Extra large devices (large desktops, 1200px and up)*/
    @media (min-width: 1200px) {}
</style>


<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Gender
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Men</a></li>
                        <li><a class="text-decoration-none" href="#">Women</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Sale
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Sport</a></li>
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Product
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseThree" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Bag</a></li>
                        <li><a class="text-decoration-none" href="#">Sweather</a></li>
                        <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <select class="form-control">
                            <option>Featured</option>
                            <option>A to Z</option>
                            <option>Item</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>


<!-- Footer starts -->
<?php include 'footer.php'; ?>

</body>

</html>