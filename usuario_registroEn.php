<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido a Mercatodo.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Required -->
        <link href="css/global-style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" href="images/favicon.png" type="image/png">
    </head>
    <body>
        <section id="asideMenu" class="aside-menu">
            <form class="form-inline form-search">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search..." />
                    <span class="input-group-btn">
                        <button id="btnHideAsideMenu" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
                    </span>
                </div>
            </form>
            <h5 class="side-section-title">Social media</h5>
            <div class="social-media">
                <a href="#"><i class="fa fa-facebook facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus google"></i></a>
                <a href="#"><i class="fa fa-twitter twitter"></i></a>
            </div>

            <h5 class="side-section-title">Contact information</h5>
            <div class="contact-info">
                <h5>Address</h5>
                <p>5th Avenue, New York - United States</p>

                <h5>Email</h5>
                <p>hello@webpixels.ro</p>

                <h5>Phone</h5>
                <p>+10 724 1234 567</p>
            </div>
        </section>
        <div class="wrapper">
            <!-- This section is only for demonstration purpose only. Just remove the div "divStyleSwitcher" -->
           
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="aux-text hidden-xs">
                                Welcome to Boomerang: hello@webpixels.ro or +40 724 123 456
                            </span>
                            <nav class="top-header-menu">
                                <ul class="menu">
                                    <li><a href="sign-in.html">Login</a></li>
                                    <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp"><a href="#"><span class="language name">English</span></a>
                                        <ul id="auxLanguages" class="sub-menu animate-wr">
                                            <li><a href="#"><span class="language">German</span></a></li>
                                            <li><span class="language language-active">English</span></li>
                                            <li><a href="#"><span class="language">Greek</span></a></li>
                                            <li><a href="#"><span class="language">Spanish</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="shopping-cart dropdown animate-hover" data-animate="animated fadeInUp">
                                        <a href="shop-cart.html" title="View your shopping cart" style="padding-right:0;"><i class="fa fa-shopping-cart"></i><span class="amount">&pound;0</span></a>

                                        <ul class="sub-menu animate-wr">     
                                            <li>                                      
                                                <div class="dropdown-cart">
                                                    <span class="cart-items">You have <strong>3</strong> items in your cart</span>
                                                    <table class="table table-cart">
                                                        <tbody>
                                                            <tr>
                                                                <th colspan="2">Product</th>
                                                                <th class="text-center">Qty</th>
                                                                <th>Total</th>
                                                            </tr>

                                                            <tr>
                                                                <td><img src="images/prv/product-3.png" class="img-center" alt=""></td>
                                                                <td><a href="">Asus Ultra Notebook</a></td>
                                                                <td class="text-center">2</td>
                                                                <td>$600.99</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="images/prv/product-2.png" class="img-center" alt=""></td>
                                                                <td><a href="">Mouse Microsoft</a></td>
                                                                <td class="text-center">3</td>
                                                                <td>$600.99</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="images/prv/product-4.png" class="img-center" alt=""></td>
                                                                <td><a href="">Samsung Galaxy S4</a></td>
                                                                <td class="text-center">1</td>
                                                                <td>$600.99</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="shop-cart.html" class="btn btn-xs btn-three">Edit cart</a>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-xs btn-two pull-right">Proceed to checkout</a>
                                                            <span class="clearfix"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>                                                                                                    
                                        </ul>                                                                                                          
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header: Logo and Main Nav -->
            <header>    
               <?php include './menuEs.php';?>
            </header>
            <div class="pg-opt pin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Sign up</h2>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Sign up</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <section class="slice bg-3">
                <div class="w-section inverse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>Welcome to Boomerang Bootstrap Template</h2>
                                    <p style="font-size:16px;">
                                        Create your own account and explore more.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                                <div class="w-section inverse">                       
                                    <div class="w-box sign-in-wr bg-5">

                                        <div class="form-header">
                                            <h2>Create your own account</h2>
                                        </div>
                                        <div class="form-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                            </p>
                                            <form class="form-light padding-15">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName">First name</label>
                                                            <input type="text" class="form-control" id="firstName" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName">Last name</label>
                                                            <input type="text" class="form-control" id="lastName" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>  

                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="txtEmail" placeholder="">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pass">Password</label>
                                                            <input type="password" class="form-control" id="pass" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pass2">Confirm password</label>
                                                            <input type="password" class="form-control" id="pass2" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>      
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <input type="text" class="form-control" id="country" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="checkbox persistent"><input type="checkbox"> I accept the <a href="terms.html">terms and conditions of this website.</a></label>                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="btn btn-two pull-right" type="submit">Sign Up</button>                        
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="form-footer">
                                            <p>Already have an account? <a href="sign-in.html">Click here to sign in.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col">
                                <h4>Contact us</h4>
                                <ul>
                                    <li>5th Avenue, New York - United States</li>
                                    <li>Phone: +10 724 1234 567 | Fax: +10 724 1234 567 </li>
                                    <li>Email: <a href="mailto:hello@example.com" title="Email Us">hello@example.com</a></li>
                                    <li>Skype: <a href="skype:my.business?call" title="Skype us">my-business</a></li>
                                    <li>Creating great templates is our passion</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col">
                                <h4>Mailing list</h4>
                                <p>Sign up if you would like to receive occasional treats from us.</p>
                                <form class="form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your email address...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-two" type="button">Go!</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col col-social-icons">
                                <h4>Follow us</h4>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col">
                                <h4>About us</h4>
                                <p>
                                    Boomerang Bootstrap Template is made with love and passion for your own business.
                                    <br><br>
                                    <a href="#" class="btn btn-two">Try it now!</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-9 copyright">
                            2013 © Web Pixels. All rights reserverd. 
                            <a href="#">Terms of use</a> | 
                            <a href="#">Privacy policy</a>
                        </div>
                        <div class="col-lg-3 footer-logo">

                        </div>
                    </div>
                </div>
            </footer></div>

        <!-- JavaScript -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/jquery.easing.js"></script>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- Plugins -->
        <script type="text/javascript" src="assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="assets/masonry/masonry.js"></script>
        <script type="text/javascript" src="assets/page-scroller/jquery.ui.totop.min.js"></script>
        <script type="text/javascript" src="assets/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="assets/mixitup/jquery.mixitup.init.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="assets/easy-pie-chart/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="assets/waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="assets/sticky/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.wp.custom.js"></script>
        <script type="text/javascript" src="js/jquery.wp.switcher.js"></script>
    </body>
</html>