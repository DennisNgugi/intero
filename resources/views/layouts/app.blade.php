<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Intero</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/app.css">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">



        <!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">
                    <p><span class="icon-music"></span>For any query?</p>
                    <ul>

                        <li>info@intero.com</li>

                    </ul>
                </div>
                <div class="top-style2-right">

                    <ul class="topbar-social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Top Bar style2 -->

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index-2.html">
                        <img src="/images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">Home</a>
                                </li>
                                <li class="dropdown"><a href="services.html">Shop by Department</a>
                                    <ul>
                                        <li><a href="services.html">View All Services</a></li>
                                        <li><a href="ser-concept-designs.html">Concept Designs</a></li>
                                        <li><a href="ser-project-designs.html">Project Designs</a></li>
                                        <li><a href="ser-make-overs.html">Make Overs</a></li>
                                        <li><a href="ser-consulting.html">Consulting</a></li>
                                        <li><a href="ser-glass-wrought.html">Glass & Wrought</a></li>
                                        <li><a href="ser-space-planning.html">Space Planning</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="project.html">Find a Pro</a>
                                    <ul>
                                        <li><a href="project.html">Classic View 01</a></li>
                                        <li><a href="project-v2.html">Classic View 02</a></li>
                                        <li><a href="project-v3.html">Modern View 01</a></li>
                                        <li><a href="project-v4.html">Modern View 02</a></li>
                                        <li><a href="project-v5.html">Fullwidth 01</a></li>
                                        <li><a href="project-v6.html">Fulldwidth 02</a></li>
                                        <li><a href="project-single.html">Projects Single</a></li>
                                    </ul>
                                </li>

                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        <!-- <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div> -->
                        <div class="cart-box">
                            <a href="shoping-cart.html"><span class="icon-bag"><span class="number">0</span></span></a>
                        </div>
                        <div class="button">
                            <a class="btn-one" href="#">Join as a vendor<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->
        @yield('content')

                <!--Start footer area Style4-->
                <footer class="footer-area style4">
                    <div class="container">
                        <div class="row">
                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mr-3">
                                <div class="single-footer-widget marbtm50-s4">
                                    <div class="our-info-box">
                                        <div class="footer-logo">
                                            <a href="index-2.html">
                                                <img src="/images/footer/footer-logo.png" alt="Awesome Logo">
                                            </a>
                                        </div>
                                        <!-- <div class="text">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the blinded by desiremoment.</p>
                                        </div> -->
                                        <div class="follow-us-social-links clearfix">
                                            <span>Follw Us On:</span>
                                            <ul>
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                <div class="single-footer-widget s4">
                                    <div class="title-style2">
                                        <h3>Usefull Links</h3>
                                    </div>
                                    <div class="usefull-links">
                                        <ul class="float-left">
                                            <li><a href="#">Company</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="#">Get a Quote</a></li>
                                        </ul>
                                        <ul class="float-left borders-left">
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            End single footer widget-->
                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                                <div class="single-footer-widget pdtop50-s4">
                                    <div class="title-style2">
                                        <h3>Subscribe Us</h3>
                                    </div>
                                    <div class="subscribe-box">
                                        <form class="subscribe-form" action="#">
                                            <input type="email" name="email" placeholder="Your Email">
                                            <button class="btn-one" type="submit">Subscribe<span class="flaticon-next"></span></button>
                                        </form>
                                        <div class="text">
                                            <p><span>*</span>Subscribe us and get latest news and updates</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                        </div>
                    </div>
                </footer>
                <!--End footer area style4-->


                <!--Start footer bottom area-->
                <section class="footer-bottom-area style3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="copyright-text text-center">
                                    <!-- <p><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End footer bottom area-->

            </div>


            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



            <script src="/js/jquery.js"></script>
            <script src="/js/appear.js"></script>
            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/bootstrap-select.min.js"></script>
            <script src="/js/isotope.js"></script>
            <script src="/js/jquery.bootstrap-touchspin.js"></script>
            <script src="/js/jquery.countTo.js"></script>
            <script src="/js/jquery.easing.min.js"></script>
            <script src="/js/jquery.enllax.min.js"></script>
            <script src="/js/jquery.fancybox.js"></script>
            <script src="/js/jquery.mixitup.min.js"></script>
            <script src="/js/jquery.paroller.min.js"></script>
            <script src="/js/owl.js"></script>
            <script src="/js/validation.js"></script>
            <script src="/js/wow.js"></script>

            <!---
        <script src="js/gmaps.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
        <script src="js/mapapi.js"></script>
        --->
        <script src="/js/app.js"></script>
            <script src="/js/map-helper.js"></script>

            <script src="/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
            <script src="/assets/timepicker/timePicker.js"></script>
            <script src="/assets/html5lightbox/html5lightbox.js"></script>

            <!--Revolution Slider-->
            <script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
            <script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
            <script src="/js/main-slider-script.js"></script>

            <!-- thm custom script -->
            <script src="/js/custom.js"></script>



        </body>


        <!-- index-2 06:43:55 GMT -->
        </html>
