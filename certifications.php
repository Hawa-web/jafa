
<?php


include 'conn.php';

$sql = "SELECT id, title, image FROM certificates;";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">


<!-- road20:28  -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon-32x32.png">
    <!-- Page Title -->
    <title> JAFFERY ISLAND COAST LINKS LTD</title>
    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/slicknav.min.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- start page-loader -->
    <div class="page-loader">
        <div class="page-loader-inner">
            <div class="inner"></div>
        </div>
    </div>
    <!-- end page-loader -->
   <!-- header-area start -->
   <header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                    <ul class="d-flex account_login-area">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i></i>Mon - Sat : 8.00 am - 6.00 pm, Sunday Closed</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                    <div class="row">
                         <div class="col-lg-7 col-md-6">
                            <ul class="d-flex header-social">
                                <li><a href="https://www.facebook.com/profile.php?id=61566858144347"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/jafferyislandcoastlinks?igsh=MThuYWMxeWU0Z3g2aQ%3D%3D&utm_source=qr"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- <div class="col-lg-5 col-md-6">
                            <ul class="login-r">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </div> --> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top header-top-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-8 col-12">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/wbg.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area header-style-2">
        <div class="header-sub"  id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="nav_mobile_menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <!-- <ul class="submenu">
                                            <li class="active"><a href="index.html">Home One</a></li>
                                            <li><a href="index-3.html">Home Two</a></li>
                                            <li><a href="index-4.html">Home Three</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li  class="active"><a href="service.html">Services</a>
                                        <ul class="submenu">
                                            <li><a href="service.html">Clearing & Forwarding</a></li>
                                            <li><a href="air-frieght.html">Air Freight</a></li>
                                            <li><a href="domestic-transport.html">Domestic Transport</a></li>
                                            <li><a href="sea-frieght.html">Sea Freight</a></li>
                                            <li><a href="warehousing.html">Warehousing services</a></li>
                                            <li><a href="nvocc.html">NVOCC Services</a></li>
                                            <li><a href="custom_clearence.html">Custom clearance</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="certifications.php">Certifications</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog-fullwidth.php">Blog</a>
                                        <!-- <ul class="submenu">
                                            <li><a href="blog.html">Blog with right sidebar</a></li>
                                            <li><a href="blog-right.html">Blog with Left sidebar</a></li>
                                            <li><a href="blog-fullwidth.php">Blog full width</a></li>
                                            <li><a href="blog-details.html">Blog single right sidebar</a></li>
                                            <li><a href="blog-details-right.html">Blog single left sidebar</a></li>
                                            <li><a href="blog-details-fullwidth.html">Blog single fullwidth</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-4 col-sm-4 col-5 search">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul>
                                    <li>
                                        <form action="http://wpocean.com/tf/html/shipter/search">
                                            <input type="text" placeholder="search here..">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                    <!-- <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="btn-style btn-style2"><a href="#">Request a Quote</a></div>
                    </div> -->
                    <div class="col-12 col-sm-4 col-md d-block d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- header-area end -->
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area" style="background: url(assets/images/about/bg4.png) no-repeat center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Certifications</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Certifications</span></li>
                            <!-- <li><span>Air Freight</span></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Certifications -->
     <section style="margin-top: 50px; margin-bottom: 50px;">
     <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {             
                        echo '<div class="container">';
                        echo '<div>" . "<h2 style="text-align: center;">'.$row["title"]. '</h2></div>';
                        echo "<img src='admin/uploads/" . $row["image"] . "' class='rounded mx-auto d-block'>";
                        echo '</div>';
                        
                    }
                    } else {
                    echo "No Certificates found.";
                }
                $conn->close();
                ?>
        
     </section>
    <section class="newsletter-section newsletter-section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscribe to Our Newsletter to get the lates news feed</p>
                </div>
                <div class="col-lg-8">
                    <div class="newsletter">
                        <div class="newsletter-form">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </form> 
                                </div>
                               <!--  <div class="col-lg-4 col-md-4 col-sm-6">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Tracking Number">
                                    </form>
                                </div> -->

                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end track-section -->
    <!-- .footer-area start -->
    <div class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                        <div class="footer-logo">
                            <img src="assets/images/logo/wbg.png" alt="">
                        </div>
                        <p>Jaffery Island Coast Links Ltd is a leading logistics chain provider with over 4 years of experience in East African countries.</p>
                        
                        <div class="social">
                            <ul class="d-flex">
                                <li><a href="https://www.facebook.com/profile.php?id=61566858144347"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/jafferyislandcoastlinks?igsh=MThuYWMxeWU0Z3g2aQ%3D%3D&utm_source=qr"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                        <div class="footer-link">
                            <h3>Quick Link</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <!-- <li><a href="pricing.html">Pricing Table</a></li> -->
                                <li><a href="certifications.php">Certifications</a></li>
                                
                            </ul>
                        </div>
                    </div>
                   <!--  <div class="col-lg-3 col-md-6 col-sm-6 footer-b">
                        <div class="Recent-News-area">
                            <h3>Recent News</h3>
                            <div class="resent-sub">
                                <p>There are many variations of passages of Lorem</p>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> Octobor 10, 2018</span>
                            </div>
                            <p>There are many variations of passages of Lorem</p>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Octobor 10, 2018</span>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                        <div class="footer-link">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="index.html"></i>Tel: +254741733734 | +256743694014</a></li><br>
                                <li><a href="mailto:info@jafferyislandcoastlinks.com">Email: info@jafferyislandcoastlinks.com</a></li><br>
                                <li><a href="index.html">Location: 2544 Kilindini Mombasa, Kenya</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget instagram">
                            <h3>Gallery</h3>
                            <ul class="d-flex">
                                <li><a href="#"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Footer -->
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="row">
                        <!-- <div class="col-12">
                            <span><a target="_blank" href="https://www.templateshub.net"></a></span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer-area end -->
    <!-- All JavaScript files
================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


<!-- road21:01  -->
</html>