<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?

use fw\core\base\View;

 View::getMeta();?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/burger/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    
    <link rel="stylesheet" href="/burger/css/bootstrap.min.css">
    <link rel="stylesheet" href="/burger/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/burger/css/magnific-popup.css">
    <link rel="stylesheet" href="/burger/css/font-awesome.min.css">
    <link rel="stylesheet" href="/burger/css/themify-icons.css">
    <link rel="stylesheet" href="/burger/css/nice-select.css">
    <link rel="stylesheet" href="/burger/css/flaticon.css">
    <link rel="stylesheet" href="/burger/css/animate.css">
    <link rel="stylesheet" href="/burger/css/slicknav.css">
    <link rel="stylesheet" href="/burger/css/style.css">
    <link rel="stylesheet" href="/burger/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.html">home</a></li>
                                            <li><a href="Menu.html">Menu</a></li>
                                            <li><a class="active" href="about.html">About</a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-img">
                                    <a href="index.html">
                                        <img src="/burger/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                                <div class="book_room">
                                    <div class="socail_links">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="book_btn d-none d-xl-block">
                                        <a class="#" href="#">+10 367 453 7382</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

  <!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg_1 overlay">
    <h3>about</h3>
</div>
<!-- bradcam_area_end -->
<!-- about_area_start -->
<div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumb2">
                        <div class="img_1">
                            <img src="/burger/img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="/burger/img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Best Burger <br>
                                    in your City</h3>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                        <div class="img_thumb">
                            <img src="/burger/img/jessica-signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- gallery_start -->
  
<?$this->getPart('inc/sidebar');?>
    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Testimonials</span>
                        <h3>Happy Customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="/burger/img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="/burger/img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="/burger/img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- testimonial_area_ned  -->

<!-- instragram_area_start -->
<div class="instragram_area">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="/burger/img/instragram/1.png" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="/burger/img/instragram/2.png" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="/burger/img/instragram/3.png" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="/burger/img/instragram/4.png" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- instragram_area_end -->

<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h3 class="footer_title pos_margin">
                                    New York
                            </h3>
                            <p>5th flora, 700/D kings road, <br> 
                                    green lane New York-1782 <br>
                                    <a href="#">info@burger.com</a></p>
                            <a class="number" href="#">+10 378 483 6782</a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h3 class="footer_title pos_margin">
                                California
                            </h3>
                            <p>5th flora, 700/D kings road, <br> 
                                    green lane New York-1782 <br>
                                    <a href="#">info@burger.com</a></p>
                            <a class="number" href="#">+10 378 483 6782</a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Stay Connected
                                    </h3>
                                    <form action="#" class="newsletter_form">
                                        <input type="text" placeholder="Enter your mail">
                                        <button type="submit">Sign Up</button>
                                    </form>
                                    <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="socail_links text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS here -->
    <script src="/burger/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/burger/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/burger/js/popper.min.js"></script>
    <script src="/burger/js/bootstrap.min.js"></script>
    <script src="/burger/js/owl.carousel.min.js"></script>
    <script src="/burger/js/isotope.pkgd.min.js"></script>
    <script src="/burger/js/ajax-form.js"></script>
    <script src="/burger/js/waypoints.min.js"></script>
    <script src="/burger/js/jquery.counterup.min.js"></script>
    <script src="/burger/js/imagesloaded.pkgd.min.js"></script>
    <script src="/burger/js/scrollIt.js"></script>
    <script src="/burger/js/jquery.scrollUp.min.js"></script>
    <script src="/burger/js/wow.min.js"></script>
    <script src="/burger/js/nice-select.min.js"></script>
    <script src="/burger/js/jquery.slicknav.min.js"></script>
    <script src="/burger/js/jquery.magnific-popup.min.js"></script>
    <script src="/burger/js/plugins.js"></script>

    <!--contact js-->
    <script src="/burger/js/contact.js"></script>
    <script src="/burger/js/jquery.ajaxchimp.min.js"></script>
    <script src="/burger/js/jquery.form.js"></script>
    <script src="/burger/js/jquery.validate.min.js"></script>
    <script src="/burger/js/mail-script.js"></script>

    <script src="/burger/js/main.js"></script>

</body>

</html>