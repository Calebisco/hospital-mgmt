<?php
session_start();
require_once 'myFunction.php';
require_once 'dal/DB.php';
require_once 'dal/dalPatien.php';
require_once 'dal/dalSpecialty.php';
require_once 'dal/dalAppointment.php';
require_once 'dal/dalFrontnotice.php';
require_once 'dal/dalFeedback.php';
require_once 'dal/dalNotice.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script>
            if (typeof (console.log) === "function")
                (document.title);
        </script>

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets-front/images/favicon.ico"/>

        <!-- CSS
        ================================================== -->       
        <!-- Bootstrap css file-->
        <link href="assets-front/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font awesome css file-->
        <link href="assets-front/css/font-awesome.min.css" rel="stylesheet">       
        <!-- Default Theme css file -->
        <link id="switcher" href="assets-front/css/themes/default-theme.css" rel="stylesheet">   
        <!-- Slick slider css file -->
        <link href="assets-front/css/slick.css" rel="stylesheet"> 
        <!-- Photo Swipe Image Gallery -->     
        <link rel='stylesheet prefetch' href='assets-front/css/photoswipe.css'>
        <link rel='stylesheet prefetch' href='assets-front/css/default-skin.css'>    

        <!-- Main structure css file -->
        <link href="assets-front/style.css" rel="stylesheet">

        <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
        <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
        <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

        <script src="assets-front/js/jquery.js"></script> 
    </head>
    <body>  


        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
        <!-- END SCROLL TOP BUTTON -->

        <!--=========== BEGIN HEADER SECTION ================-->
        <header id="header">
            <!-- BEGIN MENU -->
            <div class="menu_area">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
                    <div class="container">
                        <div class="navbar-header">
                            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- LOGO -->
                            <style>.logo{font-family: Arial; line-height: 100%} .logo.size{height: 50px; width: 50px; float: left; line-height: 100%; margin-right: 5px;}</style>
                            <a class="navbar-brand logo" href="index.html"><img class="modal-content logo size" src="assets-front/images/logo.png" alt="logo"> IDB <span>Hospital</span></a>    
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?u=pharmacy-front">Our pharmacy </a></li>
                                        <li><a href="medical-research.html">Pathology diagnostic </a></li>
                                        <li><a href="blood-bank.html">Hospitality</a></li>
                                        <li><a href="blood-bank.html">Ambulance service</a></li>
                                        <li><a href="blood-bank.html">Canteen Facility</a></li>
                                        <li><a href="medical-counseling.html">Medical Counseling</a></li>
                                        <li><a href="medical-research.html">Medical Research</a></li>
                                        <li><a href="blood-bank.html">Blood Bank</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index.php?u=notice-front">Notice</a></li>         
                                    </ul>
                                </li>
                                <li><a href="index.php?u=frontend-feedback-view">Feedback</a></li>
                                <?php
                                if (isset($_SESSION['myid'])) {
                                    
                                    echo '<li><a href="logout.php">Logout</a></li>';
                                } else {

                                    echo '<li><a href="login.php">Login</a></li>';
                                }
                                ?>

                            </ul>           
                        </div><!--/.nav-collapse -->
                    </div>     
                </nav>  
            </div>
            <!-- END MENU -->    
        </header>
        <!--=========== END HEADER SECTION ================-->   

        <!--=========== BEGIN SLIDER SECTION ================-->
        <?php
        if (file_exists("view/" . $_GET['v'] . "-idb.php")) {
            require_once "view/" . $_GET['v'] . "-idb.php";
        } else if (file_exists("user/" . $_GET['u'] . "-idb.php")) {
            require_once "user/" . $_GET['u'] . "-idb.php";
        } else {
            require_once "view/home-idb.php";
        }
        ?>
        <!--=========== Start Footer SECTION ================-->
        <footer id="footer">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single-footer-widget">
                                <div class="section-heading">
                                    <h2>About Us</h2>
                                    <div class="line"></div>
                                </div>           
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single-footer-widget">
                                <div class="section-heading">
                                    <h2>Our Service</h2>
                                    <div class="line"></div>
                                </div>
                                <ul class="footer-service">
                                    <li><a href="#"><span class="fa fa-check"></span>Service 1</a></li>
                                    <li><a href="#"><span class="fa fa-check"></span>Service 2</a></li>
                                    <li><a href="#"><span class="fa fa-check"></span>Service 3</a></li>
                                    <li><a href="#"><span class="fa fa-check"></span>Service 4</a></li>
                                    <li><a href="#"><span class="fa fa-check"></span>Service 5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single-footer-widget">
                                <div class="section-heading">
                                    <h2>Tags</h2>
                                    <div class="line"></div>
                                </div>
                                <ul class="tag-nav">
                                    <li><a href="#">Dental</a></li>
                                    <li><a href="#">Surgery</a></li>
                                    <li><a href="#">Pediatric</a></li>
                                    <li><a href="#">Cardiac</a></li>
                                    <li><a href="#">Ophthalmology</a></li>
                                    <li><a href="#">Diabetes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single-footer-widget">
                                <div class="section-heading">
                                    <h2>Contact Info</h2>
                                    <div class="line"></div>
                                </div>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <address class="contact-info">
                                    <p><span class="fa fa-home"></span>305 Intergraph Way
                                        Madison, AL 35758, USA</p>
                                    <p><span class="fa fa-phone"></span>1.256.730.2000</p>
                                    <p><span class="fa fa-envelope"></span>info@wpfmedinova.com</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Middle -->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-copyright">
                                <p>&copy; Copyright <a href="index.html">WpF Medinova</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-social">              
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Designed By <a href="http://www.wpfreeware.com/">WpFreeware</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=========== End Footer SECTION ================-->

        <!-- jQuery Library  -->

        <!-- Bootstrap default js -->
        <script src="assets-front/js/bootstrap.min.js"></script>
        <!-- slick slider -->
        <script src="assets-front/js/slick.min.js"></script>    
        <script type="text/javascript" src="assets-front/js/modernizr.custom.79639.js"></script>      
        <!-- counter -->
        <script src="assets-front/js/waypoints.min.js"></script>
        <script src="assets-front/js/jquery.counterup.min.js"></script>
        <!-- Doctors hover effect -->
        <script src="assets-front/js/snap.svg-min.js"></script>
        <script src="assets-front/js/hovers.js"></script>
        <!-- Photo Swipe Gallery Slider -->
        <script src='assets-front/js/photoswipe.min.js'></script>
        <script src='assets-front/js/photoswipe-ui-default.min.js'></script>    
        <script src="assets-front/js/photoswipe-gallery.js"></script>

        <!-- Custom JS -->
        <script src="assets-front/js/custom.js"></script>

    </body>
</html>
