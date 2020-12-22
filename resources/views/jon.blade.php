@extends('jonmaster')
@section('title', 'Jon Template')
@section('content')
    <div class="page-wrapper">
        <h1 class="d-none">Donald - Responsive eCommerce HTML Template</h1>
        <!-- Start of Header -->
        @include("header")
        <!-- End of Header -->
        <main class="main">
            <div class="page-content">
                <section class="intro-section appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
                    <div class="container">
                        <div class="row grid" style="position: relative; height: 805.5px;">
                            <div class="grid-item col-xl-3 col-lg-4 height-x2 category-list d-lg-block d-none" style="position: absolute; left: 0%; top: 0px;">
                                <ul class="menu menu-options vertical-menu category-menu appear-animate fadeInRightShorter appear-animation-visible" data-animation-options="{
                                &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                &#39;delay&#39;: &#39;.2s&#39;
                            }" style="animation-duration: 1.2s;">
                                    <li><a href="https://d-themes.com/html/donald/demo5-shop.html" class="menu-title">Browse Our Categories</a></li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-camera1"></i>Electronics</a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-officebag"></i>Backpacks &amp;
                                                                                                                                   Fashion bags</a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-gamepad1"></i>Gaming &amp;
                                                                                                                                  Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html">
                                            <i class="d-icon-t-shirt1" style="
                                            font-size: 20px;
                                            margin-left: -1px;
                                            margin-right: .8rem;
                                        "></i>Travel &amp; Clothing</a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-desktop"></i>Computer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-cook"></i>Home &amp; Kitchen</a>
                                    </li>
                                    <li><a href="https://d-themes.com/html/donald/demo5-shop.html" class="menu-title">Today Coupon Deals</a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html">
                                            <i class="d-icon-card"></i>Backpacks &amp; Fashion bags
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/html/donald/demo5-shop.html">
                                            <i class="d-icon-card"></i>Daily Deals
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid-item col-xl-6 col-lg-5 col-md-8 height-x2" style="position: absolute; left: 24.9969%; top: 0px;">
                                <div class="intro-slider owl-carousel owl-theme owl-dot-inner owl-dot-white owl-full-height animation-slider appear-animate owl-loaded owl-drag fadeIn appear-animation-visible" data-animation="{
                                    &#39;name&#39;: &#39;fadeIn&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }" data-owl-options="{
                                    &#39;items&#39;: 1,
                                    &#39;nav&#39;: false,
                                    &#39;dots&#39;: true,
                                    &#39;loop&#39;: true,
                                    &#39;autoplay&#39;: true,
                                    &#39;animateIn&#39;: &#39;fadeInUp&#39;,
                                    &#39;animateOut&#39;: &#39;fadeOutRight&#39;
                                }" style="animation-duration: 1.2s;">


                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1160px, 0px, 0px); transition: all 0s ease 0s; width: 3480px;"><div class="owl-item animated owl-animated-out fadeOutRight cloned" style="width: 580px; left: 435px;"><div class="intro-slide1 banner banner-fixed" data-index="1">
                                                    <figure>
                                                        <img src="./donald_files/1.jpg" width="580" height="502" alt="banner">
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4 class="banner-subtitle text-uppercase mb-2 font-weight-bold text-primary slide-animate" data-animation-options="{&#39;name&#39;: &#39;fadeInLeftShorter&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="">
                                                            Best Selling</h4>
                                                        <h3 class="banner-title font-weight-bold text-secondary ls-m mb-5 slide-animate" data-animation-options="{&#39;name&#39;: &#39;blurIn&#39;, &#39;delay&#39;: &#39;.4s&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="">
                                                            New In <br>Stuff Goods</h3>
                                                        <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-solid btn-primary slide-animate" data-animation-options="{&#39;name&#39;: &#39;fadeInUpShorter&#39;, &#39;delay&#39;: &#39;.7s&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="">Shop
                                                                                                                                                                                                                                                                                                               now</a>
                                                    </div>
                                                </div></div><div class="owl-item cloned animated owl-animated-out fadeOutRight" style="width: 580px; left: 580px;"><div class="intro-slide2 banner banner-fixed" data-index="2">
                                                    <figure>
                                                        <img src="./donald_files/2.jpg" width="580" height="502" alt="banner">
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <div class="slide-animate" data-animation-options="{
                                                &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                                &#39;delay&#39;: &#39;.2s&#39;
                                            }" style="animation-duration: 1.2s; animation-delay: 0.2s;">
                                                            <h4 class="banner-subtitle text-uppercase font-weight-bold text-primary mb-1">
                                                                Up to 50% off</h4>
                                                            <h3 class="banner-title text-dark ls-m mb-6 slide-animate" data-animation-options="{
                                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                                    &#39;delay&#39;: &#39;.2s&#39;
                                                }" style="animation-duration: 1.2s; animation-delay: 0.2s;">New Fashion <br>In Store</h3>
                                                            <a class="btn btn-solid btn-primary" href="https://d-themes.com/html/donald/demo5.html#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item animated owl-animated-in fadeInUp active" style="width: 580px;"><div class="intro-slide1 banner banner-fixed" data-index="1">
                                                    <figure>
                                                        <img src="./donald_files/1.jpg" width="580" height="502" alt="banner">
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4 class="banner-subtitle text-uppercase mb-2 font-weight-bold text-primary slide-animate" data-animation-options="{&#39;name&#39;: &#39;fadeInLeftShorter&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="animation-duration: 1s; animation-delay: 0.2s;">
                                                            Best Selling</h4>
                                                        <h3 class="banner-title font-weight-bold text-secondary ls-m mb-5 slide-animate" data-animation-options="{&#39;name&#39;: &#39;blurIn&#39;, &#39;delay&#39;: &#39;.4s&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="animation-duration: 1s; animation-delay: 0.4s;">
                                                            New In <br>Stuff Goods</h3>
                                                        <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-solid btn-primary slide-animate" data-animation-options="{&#39;name&#39;: &#39;fadeInUpShorter&#39;, &#39;delay&#39;: &#39;.7s&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="animation-duration: 1s; animation-delay: 0.7s;">Shop
                                                                                                                                                                                                                                                                                                                                                             now</a>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 580px;"><div class="intro-slide2 banner banner-fixed" data-index="2">
                                                    <figure>
                                                        <img src="./donald_files/2.jpg" width="580" height="502" alt="banner">
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <div class="slide-animate show-content" data-animation-options="{
                                                &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                                &#39;delay&#39;: &#39;.2s&#39;
                                            }" style="animation-duration: 1.2s; animation-delay: 0.2s;">
                                                            <h4 class="banner-subtitle text-uppercase font-weight-bold text-primary mb-1">
                                                                Up to 50% off</h4>
                                                            <h3 class="banner-title text-dark ls-m mb-6 slide-animate show-content" data-animation-options="{
                                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                                    &#39;delay&#39;: &#39;.2s&#39;
                                                }" style="animation-duration: 1.2s; animation-delay: 0.2s;">New Fashion <br>In Store</h3>
                                                            <a class="btn btn-solid btn-primary" href="https://d-themes.com/html/donald/demo5.html#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item animated owl-animated-out fadeOutRight cloned" style="width: 580px; left: 435px;"><div class="intro-slide1 banner banner-fixed" data-index="1">
                                                    <figure>
                                                        <img src="./donald_files/1.jpg" width="580" height="502" alt="banner">
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4 class="banner-subtitle text-uppercase mb-2 font-weight-bold text-primary slide-animate" data-animation-options="{&#39;name&#39;: &#39;fadeInLeftShorter&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="">
                                                            Best Selling</h4>
                                                        <h3 class="banner-title font-weight-bold text-secondary ls-m mb-5 slide-animate" data-animation-options="{&#39;name&#39;: &#39;blurIn&#39;, &#39;delay&#39;: &#39;.4s&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="">
                                                            New In <br>Stuff Goods</h3>
                                                        <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-solid btn-primary slide-animate" data-animation-options="{&#39;name&#39;: &#39;fadeInUpShorter&#39;, &#39;delay&#39;: &#39;.7s&#39;, &#39;duration&#39;: &#39;1s&#39;}" style="">Shop
                                                                                                                                                                                                                                                                                                               now</a>
                                                    </div>
                                                </div></div><div class="owl-item animated owl-animated-in fadeInUp cloned" style="width: 580px;"><div class="intro-slide2 banner banner-fixed" data-index="2">
                                                    <figure>
                                                        <img src="./donald_files/2.jpg" width="580" height="502" alt="banner">
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <div class="slide-animate" data-animation-options="{
                                                &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                                &#39;delay&#39;: &#39;.2s&#39;
                                            }" style="animation-duration: 1.2s; animation-delay: 0.2s;">
                                                            <h4 class="banner-subtitle text-uppercase font-weight-bold text-primary mb-1">
                                                                Up to 50% off</h4>
                                                            <h3 class="banner-title text-dark ls-m mb-6 slide-animate" data-animation-options="{
                                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                                    &#39;delay&#39;: &#39;.2s&#39;
                                                }" style="animation-duration: 1.2s; animation-delay: 0.2s;">New Fashion <br>In Store</h3>
                                                            <a class="btn btn-solid btn-primary" href="https://d-themes.com/html/donald/demo5.html#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-xs-6 height-x1" style="position: absolute; left: 74.9906%; top: 0px;">
                                <div class="intro-banner intro-banner1 banner banner-fixed left-banner overlay-dark appear-animate fadeInLeftShorter appear-animation-visible" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }" style="animation-duration: 1.2s;">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <figure>
                                            <img src="./donald_files/1(1).jpg" width="280" height="241" alt="banner">
                                        </figure>
                                    </a>
                                    <div class="banner-content y-50">
                                        <h4 class="banner-subtitle mb-1 text-uppercase font-weight-bold ls-s text-secondary">
                                            Summer soon</h4>
                                        <h3 class="banner-title mb-0 ls-m text-white">Swim &amp; Beachwear
                                            <br>Collection 2020</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-xs-6 height-x1" style="position: absolute; left: 74.9906%; top: 268.5px;">
                                <div class="intro-banner intro-banner2 banner banner-fixed left-banner overlay-light appear-animate fadeInLeftShorter appear-animation-visible" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }" style="animation-duration: 1.2s;">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <figure>
                                            <img src="./donald_files/2(1).jpg" width="280" height="241" alt="banner">
                                        </figure>
                                    </a>
                                    <div class="banner-content y-50">
                                        <h3 class="banner-title ls-m text-secondary">New Latest Bag <br>Collection
                                        </h3>
                                        <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-link btn-underline btn-sm mb-1">Shop Now<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-6 col-md-4 height-x1" style="position: absolute; left: 0%; top: 537px;">
                                <div class="intro-banner intro-banner3 banner banner-fixed right-banner overlay-dark appear-animate fadeInUpShorter appear-animation-visible" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInUpShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }" style="animation-duration: 1.2s;">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <figure>
                                            <img src="./donald_files/3.jpg" width="580" height="241" alt="banner">
                                        </figure>
                                    </a>
                                    <div class="banner-content y-50 text-right">
                                        <h4 class="banner-subtitle text-uppercase font-weight-bold ls-m text-primary">Up
                                                                                                                      to 20% off</h4>
                                        <h3 class="banner-title ls-m text-secondary">For Kids Trending<br>Collection
                                        </h3>
                                        <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-link btn-underline btn-sm">Shop Now<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-xs-6 height-x1" style="position: absolute; left: 49.9937%; top: 537px;">
                                <div class="intro-banner intro-banner4 banner banner-fixed h-100 left-banner overlay-light appear-animate fadeInUpShorter appear-animation-visible" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInUpShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }" style="animation-duration: 1.2s;">
                                    <figure style="background-color: #feecd4"></figure>
                                    <div class="banner-content w-100 x-50 y-50 text-center pl-2 pr-2">
                                        <h3 class="banner-title ls-m text-secondary text-uppercase">Our Brands</h3>
                                        <p class="mb-0 text-uppercase ls-m">
                                            <a href="https://d-themes.com/html/donald/demo5.html#">New York</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Paris</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Barcelona</a><br>
                                            <a href="https://d-themes.com/html/donald/demo5.html#">Milan</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Rome</a> - <a href="https://d-themes.com/html/donald/demo5.html#">London</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Dubai</a><br>
                                            <a href="https://d-themes.com/html/donald/demo5.html#">Moscow</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Tokyo</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Shanghai</a><br>
                                            <a href="https://d-themes.com/html/donald/demo5.html#">Mumbai</a> - <a href="https://d-themes.com/html/donald/demo5.html#">Melbourne</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-xs-6 height-x1" style="position: absolute; left: 74.9906%; top: 537px;">
                                <div class="intro-banner intro-banner5 banner banner-fixed right-banner overlay-dark appear-animate fadeInUpShorter appear-animation-visible" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInUpShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }" style="animation-duration: 1.2s;">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <figure>
                                            <img src="./donald_files/4.jpg" width="280" height="241" alt="banner">
                                        </figure>
                                    </a>
                                    <div class="banner-content y-50 text-right">
                                        <h4 class="banner-subtitle text-uppercase font-weight-bold ls-s text-primary">
                                            Only $15</h4>
                                        <h3 class="banner-title ls-m text-secondary">On Sale <br>This Week’s</h3>
                                        <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-link btn-underline btn-sm">Shop Now<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-space col-1" style="position: absolute; left: 0%; top: 805.5px;"></div>
                        </div>
                    </div>
                </section>

                <section class="mt-10 pt-3 mb-8">
                    <div class="container">
                        <h2 class="title title-simple title-center appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">Popular Categories</h2>
                        <div class="owl-carousel owl-theme owl-nav-full owl-loaded owl-drag" data-owl-options="{
                            &#39;nav&#39;: false,
                            &#39;dots&#39;: true,
                            &#39;items&#39;: 4,
                            &#39;loop&#39;: false,
                            &#39;margin&#39;:  20,
                            &#39;responsive&#39;: {
                                &#39;0&#39;: {
                                    &#39;items&#39;: 1
                                },
                                &#39;480&#39;: {
                                    &#39;items&#39;: 2
                                },
                                &#39;768&#39;: {
                                    &#39;items&#39;: 3
                                },
                                &#39;992&#39;: {
                                    &#39;items&#39;: 4,
                                    &#39;dots&#39;: true
                                }
                            }
                        }">




                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1200px;"><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="category category-absolute category-light overlay-dark overlay-zoom appear-animate fadeInRightShorter appear-animation-visible" data-animation-options="{
                                &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                &#39;delay&#39;: &#39;.2s&#39;
                            }" style="animation-duration: 1.2s;">
                                            <a href="https://d-themes.com/html/donald/demo5.html#">
                                                <figure class="category-media">
                                                    <img src="./donald_files/1(2).jpg" alt="category" width="280" height="245">
                                                </figure>
                                            </a>
                                            <div class="category-content">
                                                <h4 class="category-name">Accessories &amp; Jewellery</h4>
                                                <span class="category-count">
                                        <span>47</span> Products
                                    </span>
                                                <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-underline btn-link btn-white">Shop Now</a>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="category category-absolute category-light overlay-dark overlay-zoom appear-animate fadeInRightShorter appear-animation-visible" data-animation-options="{
                                &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                &#39;delay&#39;: &#39;.3s&#39;
                            }" style="animation-duration: 1.2s;">
                                            <a href="https://d-themes.com/html/donald/demo5.html#">
                                                <figure class="category-media">
                                                    <img src="./donald_files/2(2).jpg" alt="category" width="280" height="245">
                                                </figure>
                                            </a>
                                            <div class="category-content">
                                                <h4 class="category-name">Computer &amp; Electronics</h4>
                                                <span class="category-count">
                                        <span>42</span> Products
                                    </span>
                                                <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-underline btn-link btn-white">Shop Now</a>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="category category-absolute category-light overlay-dark overlay-zoom appear-animate fadeInRightShorter appear-animation-visible" data-animation-options="{
                                &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                &#39;delay&#39;: &#39;.4s&#39;
                            }" style="animation-duration: 1.2s;">
                                            <a href="https://d-themes.com/html/donald/demo5.html#">
                                                <figure class="category-media">
                                                    <img src="./donald_files/3(1).jpg" alt="category" width="280" height="245">
                                                </figure>
                                            </a>
                                            <div class="category-content">
                                                <h4 class="category-name">Swim &amp; Beachwear</h4>
                                                <span class="category-count">
                                        <span>6</span> Products
                                    </span>
                                                <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-underline btn-link btn-white">Shop Now</a>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="category category-absolute category-light overlay-dark overlay-zoom appear-animate fadeInRightShorter appear-animation-visible" data-animation-options="{
                                &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                &#39;delay&#39;: &#39;.5s&#39;
                            }" style="animation-duration: 1.2s;">
                                            <a href="https://d-themes.com/html/donald/demo5.html#">
                                                <figure class="category-media">
                                                    <img src="./donald_files/4(1).jpg" alt="category" width="280" height="245">
                                                </figure>
                                            </a>
                                            <div class="category-content">
                                                <h4 class="category-name">Jeans &amp; Shoes</h4>
                                                <span class="category-count">
                                        <span>11</span> Products
                                    </span>
                                                <a href="https://d-themes.com/html/donald/demo5.html#" class="btn btn-underline btn-link btn-white">Shop Now</a>
                                            </div>
                                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                    </div>
                </section>

                <section class="new-arrivals mt-10 pt-3 mb-8 appear-animate fadeIn appear-animation-visible" data-animation-options="{
                    &#39;name&#39;: &#39;fadeIn&#39;,
                    &#39;delay&#39;: &#39;.2s&#39;
                }" style="animation-duration: 1.2s;">
                    <div class="container">
                        <h2 class="title title-simple title-center">New Arrivals</h2>
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/1(3).jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Women's Fashion Comfort</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/2(3).jpg" alt="product" width="180" height="201">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">New</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Water Cooler Reservoir</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/3(2).jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$19.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/4(2).jpg" alt="product" width="180" height="201">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">27% off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Kid's Fashion Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/5.jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/6.jpg" alt="product" width="180" height="201">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">New</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Flash Disk USB 3.0</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/7.jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Women's Fashion Handbag</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$19.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:70%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/8.jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Blue Tea Cup</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/9.jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Fashion Hiking Hat</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:90%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/10.jpg" alt="product" width="180" height="201">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">New</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Cavin Fashion Suede Handbag</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/11.jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Men's Fashion Suede Belt</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$19.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                <div class="product product-classic shadow-media">
                                    <figure class="product-media">
                                        <a href="https://d-themes.com/html/donald/demo5-product.html">
                                            <img src="./donald_files/12.jpg" alt="product" width="180" height="201">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="https://d-themes.com/html/donald/demo5-product.html">Black Comfortable Sandals</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                        <div class="product-action">
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner banner-cta parallax" data-option="{&#39;offset&#39;: -75}" data-image-src="images/demos/demo5/cta.jpg" style="position: relative; overflow: hidden;"><div class="parallax-background" style="background-image: url(&quot;images/demos/demo5/cta.jpg&quot;); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 180%; transform: translate3d(0px, -649.057px, 0px); background-position-x: 50%;"></div>
                    <div class="container text-center">
                        <div class="banner-content appear-animate" data-animation-options="{
                            &#39;name&#39;: &#39;fadeInUpShorter&#39;,
                            &#39;delay&#39;: &#39;.2s&#39;,
                            &#39;duration&#39;: &#39;.75s&#39;
                        }">
                            <h3 class="banner-title mb-2 text-uppercase ls-m">Our Newsletter</h3>
                            <p class="ls-s mb-3">It only takes a second to find out about our latest <br>news and
                                                 promotions...</p>
                            <form action="https://d-themes.com/html/donald/demo5.html#" class="input-wrapper input-wrapper-inline mb-5">
                                <input type="email" class="form-control text-grey bg-white" name="email" id="email" placeholder="Email address here..." required="">
                                <button class="btn btn-sm btn-primary btn-icon-right" type="submit">subscribe<i class="d-icon-arrow-right"></i></button>
                            </form>
                            <div class="social-links">
                                <a href="https://d-themes.com/html/donald/demo5.html#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="https://d-themes.com/html/donald/demo5.html#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="https://d-themes.com/html/donald/demo5.html#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                <a href="https://d-themes.com/html/donald/demo5.html#" class="social-link social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-10 pt-3 mb-8 appear-animate" data-animation-options="{
                    &#39;name&#39;: &#39;fadeIn&#39;,
                    &#39;delay&#39;: &#39;.2s&#39;
                }">
                    <div class="container">
                        <h2 class="title title-simple title-center">Best Selling</h2>
                        <div class="owl-carousel owl-theme owl-nav-full owl-loaded owl-drag" data-owl-options="{
                            &#39;items&#39;: 4,
                            &#39;dots&#39;: true,
                            &#39;nav&#39;: false,
                            &#39;loop&#39;: false,
                            &#39;margin&#39;: 20,
                            &#39;responsive&#39;: {
                                &#39;0&#39;: {
                                    &#39;items&#39;: 2
                                },
                                &#39;768&#39;: {
                                    &#39;items&#39;: 3
                                },
                                &#39;992&#39;: {
                                    &#39;items&#39;: 4,
                                    &#39;nav&#39;: true,
                                    &#39;dots&#39;: false
                                }
                            }
                        }">






                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1800px;"><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="https://d-themes.com/html/donald/demo5-product.html">
                                                    <img src="./donald_files/13.jpg" alt="product" width="180" height="201">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="https://d-themes.com/html/donald/demo5-product.html">Water Cooler Reservoir</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="https://d-themes.com/html/donald/demo5-product.html">
                                                    <img src="./donald_files/14.jpg" alt="product" width="180" height="201">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="https://d-themes.com/html/donald/demo5-product.html">Yellow Overnight Bag</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$35.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="https://d-themes.com/html/donald/demo5-product.html">
                                                    <img src="./donald_files/15.jpg" alt="product" width="180" height="201">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="https://d-themes.com/html/donald/demo5-product.html">Blue Teacup</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$19.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 280px; margin-right: 20px;"><div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="https://d-themes.com/html/donald/demo5-product.html">
                                                    <img src="./donald_files/16.jpg" alt="product" width="180" height="201">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="https://d-themes.com/html/donald/demo5-product.html">Brown Leather Sandals</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 280px; margin-right: 20px;"><div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="https://d-themes.com/html/donald/demo5-product.html">
                                                    <img src="./donald_files/17.jpg" alt="product" width="180" height="201">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="https://d-themes.com/html/donald/demo5-product.html">Blue Jeans Shoes</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 280px; margin-right: 20px;"><div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="https://d-themes.com/html/donald/demo5-product.html">
                                                    <img src="./donald_files/18.jpg" alt="product" width="180" height="201">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="https://d-themes.com/html/donald/shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="https://d-themes.com/html/donald/demo5-product.html">White Leather Shoes</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$35.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="https://d-themes.com/html/donald/product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="https://d-themes.com/html/donald/demo5.html#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                </section>

                <section class="instagram-section mt-9 pb-2 mb-10 appear-animate">
                    <div class="container">
                        <h2 class="title title-simple title-center mb-5">Follow us on instagram</h2>
                        <div class="row grid" style="position: relative; height: 400px;">
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 0%; top: 0px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                    &#39;delay&#39;: &#39;.3s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/1(4).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 16.6646%; top: 0px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/2(4).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 33.3292%; top: 0px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/3(3).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 49.9937%; top: 0px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                    &#39;delay&#39;: &#39;.3s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/4(3).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-4 col-sm-8 height-x2" style="position: absolute; left: 66.6583%; top: 0px;">
                                <div class="testimonial-wrapper">
                                    <h3 class="title title-simple font-secondary text-normal ls-normal mb-5">What they
                                                                                                             say about us</h3>
                                    <div class="owl-carousel owl-theme appear-animate owl-loaded owl-drag" data-animation-options="{
                                        &#39;delay&#39;: &#39;.2s&#39;
                                    }" data-owl-options="{
                                        &#39;items&#39;: 1,
                                        &#39;nav&#39;: false,
                                        &#39;dots&#39;: true,
                                        &#39;loop&#39;: false
                                    }">



                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1140px;"><div class="owl-item active" style="width: 379.987px;"><div class="testimonial testimonial-centered">
                                                        <div class="testimonial-info">
                                                            <figure class="testimonial-author-thumbnail">
                                                                <img src="./donald_files/4(4).jpg" alt="user" width="40" height="40">
                                                            </figure>
                                                            <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                                                                        adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                                                                        urna. In nisi neque ”</blockquote>
                                                            <cite>
                                                                Jenson Gregory
                                                                <span>Customer</span>
                                                            </cite>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 379.987px;"><div class="testimonial testimonial-centered">
                                                        <div class="testimonial-info">
                                                            <figure class="testimonial-author-thumbnail">
                                                                <img src="./donald_files/4(4).jpg" alt="user" width="40" height="40">
                                                            </figure>
                                                            <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                                                                        adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                                                                        urna. In nisi neque ”</blockquote>
                                                            <cite>
                                                                Mary Adams
                                                                <span>Customer</span>
                                                            </cite>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 379.987px;"><div class="testimonial testimonial-centered">
                                                        <div class="testimonial-info">
                                                            <figure class="testimonial-author-thumbnail">
                                                                <img src="./donald_files/5(1).jpg" alt="user" width="40" height="40">
                                                            </figure>
                                                            <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                                                                        adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                                                                        urna. In nisi neque ”</blockquote>
                                                            <cite>
                                                                Owen Hunt
                                                                <span>Customer</span>
                                                            </cite>
                                                        </div>
                                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 0%; top: 200px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                    &#39;delay&#39;: &#39;.3s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/5(2).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 16.6646%; top: 200px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInLeftShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/6(1).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 33.3292%; top: 200px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                    &#39;delay&#39;: &#39;.2s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/7(1).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1" style="position: absolute; left: 49.9937%; top: 200px;">
                                <figure class="instagram appear-animate" data-animation-options="{
                                    &#39;name&#39;: &#39;fadeInRightShorter&#39;,
                                    &#39;delay&#39;: &#39;.3s&#39;
                                }">
                                    <a href="https://d-themes.com/html/donald/demo5.html#">
                                        <img src="./donald_files/8(1).jpg" alt="Instagram" width="180" height="180">
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-space col-1" style="position: absolute; left: 0%; top: 400px;"></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- End of Main -->
    @include("footer")
    <!-- End of Footer -->
    </div>
@endsection

