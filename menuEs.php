<!--<section id="asideMenu" class="aside-menu">
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
</section>-->
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

        <div id="navOne" class="navbar navbar-wp" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!--                    <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                                            <i class="fa fa-outdent icon-custom"></i>
                                        </button>-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" title="Boomerang | One template. Infinite solutions">
                        <img src="images/logo.png" alt="Boomerang | One template. Infinite solutions">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About us: One</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Elements</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Shortcodes</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="wp-sc-accordion.html">Accordion</a></li>
                                        <li><a tabindex="-1" href="wp-sc-alerts.html">Alerts</a></li>
                                        <li><a tabindex="-1" href="wp-sc-buttons.html">Buttons</a></li>
                                        <li><a tabindex="-1" href="wp-sc-carousels.html">Carousels</a></li>
                                        <li><a tabindex="-1" href="wp-sc-columns.html">Columns</a></li>
                                        <li><a tabindex="-1" href="wp-sc-boxes.html">Content boxes</a></li>
                                        <li><a tabindex="-1" href="wp-sc-callout.html">Callout boxes</a></li>
                                        <li><a tabindex="-1" href="wp-sc-gmap.html">Google maps</a></li>
                                        <li><a tabindex="-1" href="wp-sc-lists.html">Lists</a></li>
                                        <li><a tabindex="-1" href="wp-sc-pagination.html">Pagination</a></li>
                                        <li><a tabindex="-1" href="wp-sc-tabs.html">Tabs</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Sliders</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="slider-layer.html">Layer Slider</a></li>
                                        <li><a tabindex="-1" href="slider-fraction.html">Fraction Slider</a></li>
                                        <li><a tabindex="-1" href="slider-bootstrap.html">Bootstrap Carousel</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Headers</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="header-example1.html">Header: One</a></li>
                                        <li><a tabindex="-1" href="header-example2.html">Header: Two</a></li>
                                        <li><a tabindex="-1" href="header-example3.html">Header: Three</a></li>
                                        <li><a tabindex="-1" href="header-example4.html">Header: Four</a></li>
                                    </ul>
                                </li>
                                <li><a href="wp-typography.html">Typography</a></li>
                                <li><a href="wp-features.html">Features</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Portfolio</a>
                            <ul class="dropdown-menu dropdown-megamenu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Gallery n/space</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="work12.html">Two columns boxed</a></li>
                                        <li><a tabindex="-1" href="work10.html">Three columns boxed</a></li>
                                        <li><a tabindex="-1" href="work11.html">Four columns boxed</a></li>
                                        <li><a tabindex="-1" href="work7.html">Three columns fluid</a></li>
                                        <li><a tabindex="-1" href="work8.html">Four columns fluid</a></li>
                                        <li><a tabindex="-1" href="work9.html">Five columns fluid</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Gallery w/space</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="work6.html">Two columns</a></li>
                                        <li><a tabindex="-1" href="work.html">Three columns</a></li>
                                        <li><a tabindex="-1" href="work2.html">Four columns</a></li>
                                        <li><a tabindex="-1" href="work3.html">Three columns w/header</a></li>
                                        <li><a tabindex="-1" href="work4.html">Four columns w/header</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Single project</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="work-project.html">Single project fluid</a></li>
                                        <li><a tabindex="-1" href="work-project2.html">Single project vertical</a></li>
                                    </ul>
                                </li>
                                <li><a tabindex="-1" href="#">Make your own</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-grid.html">Blog: Grid Large</a></li>
                                <li><a href="blog-grid2.html">Blog: Grid Medium</a></li>
                                <li><a href="blog-list.html">Blog: List</a></li>
                                <li><a href="blog-masonry.html">Blog: Masonry </a></li>
                                <li><a href="blog-post.html">Post: Standard</a></li>
                                <li><a href="blog-post2.html">Post: Fluid</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Homepage</a></li>
                                <li><a href="shop-products.html">All products</a></li>
                                <li><a href="shop-product.html">Single product</a></li>
                                <li><a href="shop-cart.html">Cart</a></li>
                                <li><a href="shop-account.html">Account</a></li>
                                <li><a href="shop-profile.html">User profile</a></li>
                                <li><a href="shop-order-history.html">Order history</a></li>
                                <li><a href="shop-wishlist.html">Whishlist</a></li>
                                <li><a href="shop-invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Contact</a>
                            <ul class="dropdown-menu">
                                <li><a href="contact.html">Contact: One</a></li>
                                <li><a href="contact2.html">Contact: Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown animate-click" data-animate="animated fadeInUp" style="z-index:500;">
                            <a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu dropdown-menu-user animate-wr">
                                <li id="dropdownForm">
                                    <div class="dropdown-form">
                                        <form class="form-default form-inline p-15">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="What do you want to find?">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-two" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--                        <li class="hidden-xs">
                                                    <a href="#" id="cmdAsideMenu" class="dropdown-toggle dropdown-form-toggle" title="Open sidebar">
                                                        <i class="fa fa-outdent"></i>
                                                    </a>
                                                </li>-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

    </header>