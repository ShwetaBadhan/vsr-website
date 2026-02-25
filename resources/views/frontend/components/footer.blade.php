    <!--==============================
    Subscribe Area
    ==============================-->
    <div class="subscribe-layout1">
        <div class="container">
            <div class="subscribe-style1">
                <div class="container">
                    <div class="row gx-0 align-items-center justify-content-between z-index-common ">
                        <div class="col-lg-6">
                            <div class="subscribe-inner">
                                <span class="subscribe-icon"><i class="fab fa-telegram-plane"></i></span>
                                <div class="subscribe-title">
                                    <h2 class="sec-title">Newsleteer</h2>
                                    <p class="sec-subtitle">Enter your email address and get new updates</p>
                                </div>
                            </div>
                            
                            <form class="newsletter-form">
                                <div class="search-btn">
                                    <input class="form-control" type="email" placeholder="Ener your email address....">
                                    <button type="submit" class="vs-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="subscribe-img">
                                <img src="assets/img/bg/subscribe-img1.png" alt="subscribe-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper  footer-layout2" data-bg-src="assets/img/bg/footer-bg-1-1.jpg">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo">
                                    <a href="{{ route('home') }}"><img src="assets/img/logo-2.png" alt="logo"></a>
                                </div>
                                <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore et dolo aliqua.</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Company</h3>
                            <ul>
                                <li><a href="{{ route('about-us') }}">About</a></li>
                                <li><a href="#">Our products</a></li>
                                <li><a href="{{ route('services') }}">Our cases</a></li>
                                <li><a href="{{ route('blogs') }}">News & events</a></li>
                                <li><a href="{{ route('blogs') }}">Organic Product</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="{{ route('about-us') }}">Microgreen</a></li>
                                <li><a href="{{ route('services') }}">Agricultural products</a></li>
                                <li><a href="{{ route('blogs') }}">Crops farming</a></li>
                                <li><a href="{{ route('blogs') }}">Uncategorized</a></li>
                                <li><a href="{{ route('blogs') }}">Agriculture Staff</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="widget widget_newsletter footer-widget">
                            <h4 class="widget_title">Contact</h4>
                            <div class="footer-media">
                                <div class="media-style1">
                                    <div class="media-icon"><img src="assets/img/icon/icon-1-1.png" alt="icon"></div>
                                    <div class="media-body">
                                        <p class="media-info"><a href="tel:+88013004451">+88 013 00 44 51</a> <br> Mon - Sat: 09.00 to 06.00</p>
                                    </div>
                                </div>
                                <div class="media-style1">
                                    <div class="media-icon"><img src="assets/img/icon/icon-1-3.png" alt="icon"></div>
                                    <div class="media-body">
                                        <p class="media-info">5919 Trussville Crossings Pkwy, Birmingham, United Kingdom</p>
                                    </div>
                                </div>
                                <div class="media-style1">
                                    <div class="media-icon"><img src="assets/img/icon/icon-1-2.png" alt="icon"></div>
                                    <div class="media-body">
                                        <p class="media-info"><a href="mailto:example@domain.com">example@domain.com</a> <br> <a href="mailto:officename@example.com">officename@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-center align-items-center">
                    <div class="col-auto">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <?php echo date('Y')?> <a href="{{ route('home') }}">Farmix</a>. All Rights Reserved By <a href="#">Vibrantick Infotech Solutions</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="copyright-menu">
                            <ul class="list-unstyled">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> 