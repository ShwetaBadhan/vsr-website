  <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i>California, TX 70240</li>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="far fa-phone-alt"></i><a href="tel:+4733378901">+473 3378 901</a></li>
                                <li><i class="far fa-clock"></i>Mon - Sat: 09.00 to 06.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="social-style1">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ url ('assets/img/logo.png')}}" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about-us') }}">About Us</a>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="#">Products</a>
                                            <ul class="mega-menu">
                                                <li><a href="#">Product 1</a>
                                                    <ul>
                                                        <li><a href="{{ route('products') }}">Products</a></li>
                                                        <li><a href="{{ route('product-details') }}">product Details</a></li>
                                                       
                                                    </ul>
                                                </li>
                                                <li><a href="#">Product 2</a>
                                                    <ul>
                                                     <li><a href="{{ route('products') }}">Products</a></li>
                                                        <li><a href="{{ route('product-details') }}">product Details</a></li>
                                                       
                                                    </ul>
                                                </li>
                                                <li><a href="#">Product 3</a>
                                                    <ul>
                                                       <li><a href="{{ route('products') }}">Products</a></li>
                                                        <li><a href="{{ route('product-details') }}">product Details</a></li>
                                                       
                                                    </ul>
                                                </li>
                                                <li><a href="#">Product 4</a>
                                                    <ul>
                                                        <li><a href="{{ route('products') }}">Products</a></li>
                                                        <li><a href="{{ route('product-details') }}">product Details</a></li>
                                                       
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0)">Service</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('services') }}">Service</a></li>
                                                <li><a href="{{ route('service-details') }}">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0)">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('blogs') }}">Blog</a></li>
                                                <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ route('contact-us') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto d-lg-none">
                                <button class="vs-menu-toggle d-inline-block">
                                    <i class="fal fa-bars"></i>                                           
                               </button>
                            </div>
                            <div class="col-auto d-xl-block d-none">
                                <div class="header-icons">
                                    <a href="#" class="link-btn"><i class="fal fa-user"></i>Login</a>
                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                    <a href="#" class="icon-btn style2 sideCartToggler sideCartToggler">
                                        <i class="fal fa-shopping-cart"></i>
                                        <span class="badge">0</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>