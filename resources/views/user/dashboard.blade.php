<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Espaces Services </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
<style>
   nav.primary-navigation {
	 margin: 0 auto;
	 display: block;
	 padding: 50px 0 0 0;
	 text-align: center;
	 font-size: 23px;
     font-family: "Sen",sans-serif;
}
 nav.primary-navigation ul li {
	 list-style: none;
	 margin: 0 auto;
	 border-left: 2px solid #3ca0e7;
	 display: inline-block;
	 padding: 0 30px;
	 position: relative;
	 text-decoration: none;
	 text-align: center;
	 font-family: arvo;
}
 nav.primary-navigation li a {
	 color: black;
}
 nav.primary-navigation li a:hover {
	 color: #030431;
}
 nav.primary-navigation li:hover {
	 cursor: pointer;
}
 nav.primary-navigation ul li ul {
	 visibility: hidden;
	 opacity: 0;
	 position: absolute;
	 padding-left: 0;
	 left: 0;
	 display: none;
	 background: white;
}
 nav.primary-navigation ul li:hover > ul, nav.primary-navigation ul li ul:hover {
	 visibility: visible;
	 opacity: 1;
	 display: block;
	 min-width: 250px;
	 text-align: left;
	 padding-top: 20px;
	 box-shadow: 0px 3px 5px -1px #ccc;
}
 nav.primary-navigation ul li ul li {
	 clear: both;
	 width: 100%;
	 text-align: left;
	 margin-bottom: 20px;
	 border-style: none;
}
 nav.primary-navigation ul li ul li a:hover {
	 padding-left: 10px;
	 border-left: 2px solid #3ca0e7;
	 transition: all 0.3s ease;
}
 a {
	 text-decoration: none;
}
 a:hover {
	 color: #3ca0e7;
}
 ul li ul li a {
	 transition: all 0.5s ease;
}
 

    </style>
	<!-- CSS here -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/gijgo.css">
	<link rel="stylesheet" href="/assets/css/animate.min.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="/assets/css/themify-icons.css">
	<link rel="stylesheet" href="/assets/css/slick.css">
	<link rel="stylesheet" href="/assets/css/nice-select.css">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <!-- Left Social -->
                    <div class="header-left-social">
                        <ul class="header-social">    
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                
                            <ul>     
                                <img class="ensamlogo"src="/assets/img/ensam.jpg" alt="" >
                                    
                                </ul>
                            </div>
                                <div class="header-info-right">
                                    <ul>     
                                    @if(Auth::check())
                                        <li><a href="#"><i class="ti-user"></i>Welcome   {{ Auth::user()->nom }} </a></li>
                                        <li><a href="{{ route('signout') }}"><i class="ti-lock"></i>Logout</a></li>
                                        @else
                                        <li><a href="{{url('/salut')}}"><i class="ti-user"></i>Login</a></li>
                                        <li><a href="{{url('/salut2')}}"><i class="ti-lock"></i>Register</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                          <a href="index.html"><img style="width:160px;height:32px;"src="/assets/img/es.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.html"><img src="/assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/')}}">About</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="{{url('/')}}">Instructors</a></li>
                                        <li><a href="{{url('/Web_masters')}}">Web Masters</a>
                                            
                                        </li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-search d-none d-lg-block">
                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Search Courses">
                                    <div class="search-icon">
                                        <i class="fas fa-search special-tag"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
       
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        
        <div class="categories-area section-padding30">
        
            <div class="container">
          
            <div class="row justify-content-sm-center">
                    <div class="cl-xl-5 col-lg-4 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-30">
                
                            <h4>Veuillez choisir votre demande</h4>
                        </div> 
                    </div>
                </div>
                <div class="row">
                <nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="#">Services de scolarité &dtrif;</a>
    <ul class="dropdown">
        <li><a href="{{url('/reservationEspace')}}">Réservation d'espace et de matériel</a></li>
        <li><a href="{{url('/reservationTerrain')}}">Réservation de terrain</a></li>
        <li><a href="{{url('/attestationAbsence')}}">Attestation absence de stage</a></li>
   
      </ul>
</li>
    <li><a href="#">Relations extérieures &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Convention de stage</a></li>
        <li><a href="{{url('/demandeStage')}}">Demande de stage</a></li>
        <li><a href="#">Lettre de recommandation</a></li>
   
      </ul>
    </li>
    <li><a href="#">3eme service &dtrif;</a>
    <ul class="dropdown">
        <li><a href="#">Documents concernés</a></li>
     
   
      </ul>
</li>
</li>
   
  </ul>
</nav>
                
               
               
                </div>
                <!-- Section Button -->
              
            </div>
        </div>
        <!-- Categories Area End -->
        <!--? Count Down Start -->
       
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <div class="footer-tittle2">
                                    <h4>Stay Updated</h4>
                                </div>
                                <!-- Form -->
                                <div class="footer-form mb-50">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Subscribe Now
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-tittle2">
                                    <h4>Let’s Get Social</h4>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a  href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <ul>
                                        <li><a href="#">Online Learning</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Press Center</a></li>
                                        <li><a href="#">Become an Instructor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Campus</h4>
                                    <ul>
                                        <li><a href="#">Our Plans</a></li>
                                        <li><a href="#">Free Trial</a></li>
                                        <li><a href="#">Academic Solutions</a></li>
                                        <li><a href="#">Business Solutions</a></li>
                                        <li><a href="#"> Government Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Study</h4>
                                    <ul>
                                        <li><a href="#">Admissions Policy</a></li>
                                        <li><a href="#">Getting Started</a></li>
                                        <li><a href="#">Online Application</a></li>
                                        <li><a href="#">Visa Information</a></li>
                                        <li><a href="#">Tuition Calculator</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Spport</h4>
                                    <ul>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">System Requirements</a></li>
                                        <li><a href="#">Register Activation Key</a></li>
                                        <li><a href="#">Site feedback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        function document()
        {
         document.getElementById('what').innerHTML = 'hello';
         }
    </script>
    </body>
</html>