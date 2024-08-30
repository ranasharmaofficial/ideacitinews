<div class="preloader">
    <button class="th-btn preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>
<div class="popup-subscribe-area">
    <div class="container">
        <div class="popup-subscribe">
            <div class="box-img">
                <img src="{{ static_asset('assets/assets_web/img/normal/popup_subscribe.jpg') }}" alt="Image" />
            </div>
            <div class="box-content">
                <button class="simple-icon popupClose">
                    <i class="fal fa-times"></i>
                </button>
                <div class="widget newsletter-widget footer-widget">
                    <h3 class="widget_title">Subscribe</h3>
                    <p class="footer-text">
                        Sign up to get update about us. Don't be hasitate your email is safe.
                    </p>
                    <form class="newsletter-form">
                        <input class="form-control" type="email" placeholder="Enter Email" required="" />
                        <button type="submit" class="icon-btn">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                    <div class="mt-30">
                        <input type="checkbox" id="destroyPopup" />
                        <label for="destroyPopup">I don't want to see this popup again.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sidemenu-wrapper sidemenu-1 d-none d-md-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
        </button>
        <div class="widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="home-newspaper.html"><img class="light-img" src="{{ static_asset('assets/assets_web/img/logo-footer-black.svg') }}" alt="Tnews" /></a><a href="home-newspaper.html"><img class="dark-img" src="{{ static_asset('assets/assets_web/img/logo-footer.svg') }}" alt="Tnews" /></a>
                </div>
                <p class="about-text">
                    Magazines cover a wide subjects, including not limited to fashion, lifestyle, health, politics, business, Entertainment, sports, science,
                </p>
                <div class="th-social style-black">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="widget">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="{{ static_asset('assets/assets_web/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="hover-line" href="blog-details.html">Fitness: Your journey to Better, stronger you.</a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>21 June, 2023</a>
                        </div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="{{ static_asset('assets/assets_web/img/blog/recent-post-1-2.jpg') }}" alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="hover-line" href="blog-details.html">Embrace the game Ignite your sporting</a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June, 2023</a>
                        </div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="{{ static_asset('assets/assets_web/img/blog/recent-post-1-3.jpg') }}" alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="hover-line" href="blog-details.html">Revolutionizing lives Through technology</a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>23 June, 2023</a>
                        </div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="{{ static_asset('assets/assets_web/img/blog/recent-post-1-4.jpg') }}" alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="hover-line" href="blog-details.html">Enjoy the Virtual Reality embrace the</a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>25 June, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget newsletter-widget">
            <h3 class="widget_title">Subscribe</h3>
            <p class="footer-text">
                Sign up to get update about us. Don't be hasitate your email is safe.
            </p>
            <form class="newsletter-form">
                <input class="form-control" type="email" placeholder="Enter Email" required="" />
                <button type="submit" class="icon-btn">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
            <div class="mt-30">
                <input type="checkbox" id="Agree2" />
                <label for="Agree2">I have read and accept the <a href="about.html">Terms & Policy</a></label>
            </div>
        </div>
    </div>
</div>
<div class="sidemenu-wrapper cart-side-menu d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
        </button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ static_asset('assets/assets_web/img/product/product_thumb_1_1.png') }}" alt="Cart Image" />Car Safety Seat</a>
                        <span class="quantity">
                            1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ static_asset('assets/assets_web/img/product/product_thumb_1_2.png') }}" alt="Cart Image" />Bus Safety Hammer</a>
                        <span class="quantity">
                            1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ static_asset('assets/assets_web/img/product/product_thumb_1_3.png') }}" alt="Cart Image" />Car Steering Wheel</a>
                        <span class="quantity">
                            1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ static_asset('assets/assets_web/img/product/product_thumb_1_4.png') }}" alt="Cart Image" />Transponder Car Key</a>
                        <span class="quantity">
                            1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ static_asset('assets/assets_web/img/product/product_thumb_1_5.png') }}" alt="Cart Image" />Safety Hand Glove</a>
                        <span class="quantity">
                            1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn wc-forward">View cart</a>
                    <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?" />
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="home-newspaper.html"><img src="{{ static_asset('assets/assets_web/img/logo.svg') }}" alt="Tnews" /></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="home-newspaper.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="home-newspaper.html">Home Newspaper</a></li>
                        <li><a href="home-magazine.html">Home Magazine</a></li>
                        <li><a href="home-sports.html">Home Sports</a></li>
                        <li><a href="home-movie.html">Home Movie</a></li>
                        <li><a href="home-gadget.html">Home Gadget</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Category</a>
                    <ul class="sub-menu">
                        <li><a href="category.html">Category</a></li>
                        <li><a href="blog-three-column.html">Three Column</a></li>
                        <li>
                            <a href="blog-three-column-sidebar.html">Three Column Sidebar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="author.html">Author</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog Standard</a></li>
                        <li><a href="blog-masonary.html">Blog Masonary</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li>
                            <a href="blog-details-video.html">Blog Details Video</a>
                        </li>
                        <li>
                            <a href="blog-details-audio.html">Blog Details Audio</a>
                        </li>
                        <li>
                            <a href="blog-details-nosidebar.html">Blog Details Nosidebar</a>
                        </li>
                        <li>
                            <a href="blog-details-full-img.html">Blog Details Full Image</a>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<header class="th-header header-layout3">
    <div class="header-top dark-theme">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-9">
                    <div class="news-area">
                        <div class="title">Breaking News :</div>
                        <div class="news-wrap">
                            <div class="row slick-marquee">
                                <div class="col-auto">
                                    <a href="blog-details.html" class="breaking-news">Relaxation redefined, your beach resort sanctuary.</a>
                                </div>
                                <div class="col-auto">
                                    <a href="blog-details.html" class="breaking-news">From health to fashion, lifestyle news curated.</a>
                                </div>
                                <div class="col-auto">
                                    <a href="blog-details.html" class="breaking-news">Sun, sand, and luxury at our resort</a>
                                </div>
                                <div class="col-auto">
                                    <a href="blog-details.html" class="breaking-news">Relaxation redefined, your beach resort sanctuary.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 text-end d-none d-xl-block">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-sm-inline-block"><i class="far fa-user"></i><a href="blog.html">Login</a></li>
                            <li>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-inline-block">
                    <div class="header-logo">
                        <a href="home-newspaper.html"><img class="light-img" src="{{ static_asset('assets/assets_web/img/logo.svg') }}" alt="Tnews" /></a><a href="home-newspaper.html"><img class="dark-img" src="{{ static_asset('assets/assets_web/img/logo-white.svg') }}" alt="Tnews" /></a>
                    </div>
                </div>
                <div class="col text-end d-none d-md-block">
                    <div class="header-ads">
                        <a href="https://themeforest.net/user/themeholy/portfolio"><img src="{{ static_asset('assets/assets_web/img/ads/ads_banner_2.jpg') }}" alt="ads" /></a>
                    </div>
                </div>
                <div class="col-auto text-center text-md-end ms-xl-3">
                    <div class="header-icon">
                        <div class="theme-switcher">
                            <button>
                                <span class="dark"><i class="fas fa-moon"></i></span>
                                <span class="light"><i class="fas fa-sun-bright"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="header-links">
                        <ul>
                            <li><i class="fal fa-calendar-days"></i><a href="blog.html">Monday 20 August, 2023</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto d-lg-none d-block">
                        <div class="header-logo">
                            <a href="home-newspaper.html"><img class="light-img" src="{{ static_asset('assets/assets_web/img/logo.svg') }}" alt="Tnews" /></a><a href="home-newspaper.html"><img class="dark-img" src="{{ static_asset('assets/assets_web/img/logo-white.svg') }}" alt="Tnews" /></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="home-newspaper.html">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="home-newspaper.html">Home Newspaper</a>
                                        </li>
                                        <li><a href="home-magazine.html">Home Magazine</a></li>
                                        <li><a href="home-sports.html">Home Sports</a></li>
                                        <li><a href="home-movie.html">Home Movie</a></li>
                                        <li><a href="home-gadget.html">Home Gadget</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Category</a>
                                    <ul class="sub-menu">
                                        <li><a href="category.html">Category</a></li>
                                        <li>
                                            <a href="blog-three-column.html">Three Column</a>
                                        </li>
                                        <li>
                                            <a href="blog-three-column-sidebar.html">Three Column Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li>
                                                    <a href="shop-details.html">Shop Details</a>
                                                </li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="author.html">Author</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog Standard</a></li>
                                        <li><a href="blog-masonary.html">Blog Masonary</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li>
                                            <a href="blog-details-video.html">Blog Details Video</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-audio.html">Blog Details Audio</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-nosidebar.html">Blog Details Nosidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-full-img.html">Blog Details Full Image</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="header-button">
                            <button type="button" class="simple-icon searchBoxToggler">
                                <i class="far fa-search"></i>
                            </button>
                            <button type="button" class="simple-icon d-none d-lg-block cartToggler">
                                <i class="far fa-cart-shopping"></i>
                                <span class="badge">5</span>
                            </button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
