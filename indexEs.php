<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boomerang - Multipurpose Template: Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Required -->
        <link href="css/global-style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" href="images/favicon.png" type="image/png"><link rel="stylesheet" href="assets/sequence/themes/apple-style/apple-style-theme.css" type="text/css" />

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
                                Bienvenido a mercatodo.com: &nbsp;&nbsp; teddy_cantotu@hotmail.com
                            </span>
                            <nav class="top-header-menu">
                                <ul class="menu">
                                    <li><a href="sign-in.html">Login</a></li>
                                    <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp"><a href="#"><span class="language name">English</span></a>
                                        <ul id="auxLanguages" class="sub-menu animate-wr">
                                            <li><span class="language language-active">English</span></li>
                                            <li><a href="#"><span class="language">Spanish</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="shopping-cart dropdown animate-hover" data-animate="animated fadeInUp">
                                        <a href="shop-cart.html" title="View your shopping cart" style="padding-right:0;"><i class="fa fa-shopping-cart"></i><span class="amount">&pound;0</span></a>
                                        <ul class="sub-menu animate-wr">     
                                            <li>                                      
                                                <div class="dropdown-cart">
                                                    <span class="cart-items">Tienes <strong>3</strong>productos en tu carrito</span>
                                                    <table class="table table-cart">
                                                        <tbody>
                                                            <tr>
                                                                <th colspan="2">Producto</th>
                                                                <th class="text-center">Ctn.</th>
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
            <section id="sequence-theme">
                <div id="sequence">

                    <ul class="controls">
                        <li class="status"></li>
                        <li class="sequence-prev"></li>
                        <li class="sequence-pause"></li>
                        <li class="sequence-next"></li>
                    </ul>

                    <ul class="sequence-canvas">
                        <li class="animate-in">
                            <div class="intro">
                                <h2 class="bg-2">Built using Sequence.js</h2>
                                <h3 class="dark">The Responsive Slider with Advanced CSS3 Transitions</h3>
                            </div>
                            <img class="iphone" src="images/slider/iphone.png" alt="iPhone4" />
                        </li>
                        <li>
                            <img class="ipad" src="images/slider/ipad.png" alt="iPad" />
                            <div class="slide2">
                                <h2 class="bg-2">Creative Control</h2>
                                <p>Create unique sliders using CSS3 transitions</p>
                            </div>
                        </li>
                        <li>
                            <div class="slide3">
                                <h2 class="dark">Cutting Edge</h2>
                                <p>Supports modern browsers, old browsers (IE7+), touch devices and responsive designs</p>
                            </div>
                            <img class="iphone2" src="images/slider/iphone.png" alt="iPhone4" />
                            <img class="iphone2-shadow" src="images/slider/iphone-shadow.png" />
                            <img class="iphone3" src="images/slider/iphone.png" alt="iPhone4" />
                            <img class="iphone3-shadow" src="images/slider/iphone-shadow.png" />
                            <img class="iphone4" src="images/slider/iphone.png" alt="iPhone4" />
                            <img class="iphone4-shadow" src="images/slider/iphone-shadow.png" />
                        </li>
                    </ul>

                </div>
            </section>
            <section class="slice bg-2 p-15">
                <div class="cta-wr">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <h1>
                                   La mejor experiencia en compra y venta de productos.
                                </h1>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-one btn-lg pull-right" title="" href="" target="blank">
                                    <i class="fa fa-shopping-cart"></i> Buy this template
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slice bg-3">
                <div class="w-section inverse">
                    <div class="container">
                        <h3 class="section-title">Nuestros productos</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-1.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">Nikon Coolpix L320</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 hidden-sm">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-2.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">Samsung Galaxy S4</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-3.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">Asus Ultra Notebook</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-4.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">PC mouse Microsoft</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-1.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">Nikon Coolpix L320</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-2.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">Samsung Galaxy S4</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-3.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">Asus Ultra Notebook</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 hidden-sm">
                                <div class="w-box product">
                                    <figure>
                                        <img alt="" src="images/prv/product-4.jpg" class="img-responsive img-center">
                                    </figure>
                                    <h2><a href="">PC mouse Microsoft</a></h2>
                                    <p>
                                        Donec id elit non mi porta gravida at eget metus.
                                    </p>
                                    <div class="w-footer">
                                        <span class="price pull-left">$233.33</span>
                                        <a href="#" class="btn btn-xs btn-two pull-right">Add to cart</a>
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
                                <h4>Contactanos</h4>
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
                                <h4>Siguenos</h4>
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
        <script type="text/javascript" src="js/jquery.wp.switcher.js"></script><script src="assets/sequence/jquery.sequence-min.js"></script>
        <script src="assets/sequence/themes/apple-style/apple-style.js"></script>

    </body>
</html>