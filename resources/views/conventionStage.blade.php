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
    
   
<div class="mainn">

    <!-- Sign up form -->
    <section class="signup">
        <div class="containerr">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title" style="text-align: center;">CONVENTION DE STAGE</h2>
                    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                       <strong>Whoops!</strong> Il y a une erreur.<br><br>
                       <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{ route('resTerrains.store') }}" class="register-form" id="register-form" method="POST">
                    @csrf
                        <h4>ETABLISSEMENT D’ENSEIGNEMENT OU ORGANISME DE FORMATION :</h4>
                        <table>
                        <tr>
                        <td><div class="form-group">
                            
                            <label for="Nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="Nom" id="Nom" placeholder="Nom"/>
                        </div></td>
                        <td><div class="form-group">
                            <label for="Adresse"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="Adresse" id="Adresse" placeholder="Adresse"/>
                        </div></td>
                        </tr>

                        <tr>
                        <td><div class="form-group">
                            <label for="Representant"><i class="zmdi zmdi-lock"></i></label>
                            <input type="text" name="Representant" id="Representant" placeholder="Représenté par"/>
                        </div></td>
                        <td><div class="form-group">
                            <label for="Adresse"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="Adresse" id="Adresse" placeholder="En qualité de:"/>
                        </div></td>
                        </tr>
                        <tr>
                        <td><div class="form-group">
                            <label for="Téléphone"><i class="zmdi zmdi-lock"></i></label>
                            <input type="text" name="Téléphone" id="Téléphone" placeholder="Téléphone"/>
                        </div></td>
                        <td><div class="form-group">
                            <label for="Email :"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="Email :" id="Email :" placeholder="Email ::"/>
                        </div></td>
                        </tr>

                        <div class="form-group">
                            <label for="Adresse"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="Adresse" id="Adresse" placeholder="Adresse"/>
                        </div>
                        <div class="form-group">
                            <label for="Email_Representant"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="Email_Representant" id="Email_Representant" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <label for="Téléphone_Representant"><i class="zmdi zmdi-lock"></i></label>
                            <input type="text" name="Téléphone_Representant" id="Téléphone_Representant" placeholder="Téléphone"/>
                        </div>
                        
                        <h4>Date</h4>
                        <div class="form-group">
                            <label for="Date"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="text" name="Date" id="Date" placeholder="Date"/>
                        </div>
                        <h4>Horaires</h4>
                        <div class="form-group">
                            <label for="Horaires"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="text" name="Horaires" id="Horaires" placeholder="Horaires"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                        <a class="btn btn-primary" href="{{ route('resTerrains.index') }}"> Back</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                    
                </div>
                <div class="signup-image">
                    <figure><img  style=" max-width: 100% !important;
                      height: auto !important;" src="/login/images/signup-image.jpg" alt="sing up image"></figure>
                    
                </div>
            </div>
        </div>
    </section>
  
    
  
  </div>
    
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
    
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>
</html>