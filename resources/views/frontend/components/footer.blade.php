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
        <h2 class="sec-title">Newsletter</h2>
        <p class="sec-subtitle">Enter your email address and get new updates</p>
    </div>
</div>

<!-- Add an ID to the form and the feedback message area -->
<form class="newsletter-form" id="newsletterForm" action="{{ route('subscribe') }}" method="POST">
    @csrf
    <div class="search-btn">
        <input class="form-control" type="email" name="email" id="newsletterEmail"
            placeholder="Enter your email address...." required>
        <button type="submit" class="vs-btn" id="subscribeBtn">Subscribe</button>
    </div>
    <!-- Hidden feedback message -->
    <p id="formMessage" class="mt-2 text-white" style="display:none; font-size: 14px;"></p>
</form>
                        </div>
                        <div class="col-lg-6">
                            <div class="subscribe-img">
                                <img src="{{ url('assets/img/bg/subscribe-img1.png') }}" alt="subscribe-img">
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
    <footer class="footer-wrapper  footer-layout2" data-bg-src="{{ url('assets/img/bg/footer-bg-1-1.jpg') }}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo">
                                    @php
                                        $image = is_object($settings)
                                            ? $settings->white_logo ?? ($settings['white_logo'] ?? null)
                                            : $settings['white_logo'] ?? null;
                                    @endphp

                                    <a href="{{ route('home') }}">
                                        <img src="{{ $image ? $image : asset('assets/img/product/product-1-1.png') }}"
                                           
                                        alt="product"
                                        style="max-height: 50px; width: auto;">
                                         </a>
                                </div>
                                <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor in cididunt ut labore et dolo aliqua.</p>
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
                            <h3 class="widget_title">Quick Links</h3>
                            <ul>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('products') }}">Our products</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ route('blogs') }}">News & Blogs</a></li>
                             
                            </ul>
                        </div>
                    </div>
                       <div class="col-xl-3">
                        <div class="widget widget_newsletter footer-widget">
                            <h4 class="widget_title">Contact</h4>
                            <div class="footer-media">
                                <div class="media-style1">
                                    <div class="media-icon"><img src="{{ url('assets/img/icon/icon-1-1.png') }}"
                                            alt="icon"></div>
                                    <div class="media-body">
                                        <p class="media-info"><a href="tel:+88013004451">+88 013 00 44 51</a> <br> Mon -
                                            Sat: 09.00 to 06.00</p>
                                    </div>
                                </div>
                                <div class="media-style1">
                                    <div class="media-icon"><img src="{{ url('assets/img/icon/icon-1-3.png') }}"
                                            alt="icon"></div>
                                    <div class="media-body">
                                        <p class="media-info">5919 Trussville Crossings Pkwy, Birmingham, United Kingdom
                                        </p>
                                    </div>
                                </div>
                                <div class="media-style1">
                                    <div class="media-icon"><img src="{{ url('assets/img/icon/icon-1-2.png') }}"
                                            alt="icon"></div>
                                    <div class="media-body">
                                        <p class="media-info"><a href="mailto:example@domain.com">example@domain.com</a>
                                            <br> <a href="mailto:officename@example.com">officename@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Legal</h3>
                            <ul>
                                  <li><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('accessibility') }}">Accessibility</a></li>
                                <li><a href="{{ route('shipping-policy') }}">Consent Preferences</a></li>
                                <li><a href="{{ route('cancel-refund-policy') }}">Cancellation & Refund Process</a></li>
                                <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                                <li><a href="{{ route('shipping-policy') }}">Shipping Policy</a></li>
                                <li><a href="{{ route('grievance-redressal') }}">Grievance Redressal</a></li>
                             
                            </ul>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-center align-items-center">
                    <div class="col-auto">
                     @php
                            $settings = $settings ?? null;
                            $companyName = $settings?->company_name ?? $settings['company_name'] ?? 'VSR';
                        @endphp
                        

                        <p class="copyright-text"> <i class="fal fa-copyright"></i> <?php echo date('Y'); ?> <a
                                href="{{ route('home') }}">{{ $companyName }}</a>. All Rights Reserved By <a
                                href="#">Vibrantick Infotech Solutions</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="copyright-menu">
                            <ul class="list-unstyled">
                                {{-- <li><a href="#">Sitemap</a></li> --}}
                                
                                {{-- <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
<!-- Add this Script -->
<script>
    document.getElementById('newsletterForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Stop page reload
        
        const form = this;
        const btn = document.getElementById('subscribeBtn');
        const message = document.getElementById('formMessage');
        const emailInput = document.getElementById('newsletterEmail');
        
        // Show loading state
        btn.textContent = 'Subscribing...';
        btn.disabled = true;
        message.style.display = 'none';

        // Send data via AJAX
        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-Requested-With': 'XMLHttpRequest' // Laravel needs this for JSON responses
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                message.style.color = '#00ff00'; // Green
                message.textContent = data.message;
                emailInput.value = ''; // Clear input
            } else {
                message.style.color = '#ff4d4d'; // Red
                message.textContent = data.message;
            }
            message.style.display = 'block';
        })
        .catch(error => {
            message.style.color = '#ff4d4d';
            message.textContent = 'Network error. Please try again.';
            message.style.display = 'block';
        })
        .finally(() => {
            btn.textContent = 'Subscribe';
            btn.disabled = false;
        });
    });
</script>