
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="Farmix"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('home') }}">Home</a>
                       
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('services') }}">Service</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('services') }}">Service</a></li>
                            <li><a href="{{ route('service-details') }}">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('blogs') }}">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children mega-menu-wrap">
                        <a href="#">Products</a>
                        <ul class="mega-menu">
                            <li><a href="{{ route('products') }}">Product 1</a>
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
                    <li>
                        <a href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>