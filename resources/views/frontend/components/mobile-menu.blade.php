
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
    <div class="mobile-logo">
    @php
        $image = is_object($settings) 
            ? ($settings->white_logo ?? $settings['black_logo'] ?? null)
            : ($settings['black_logo'] ?? null);
    @endphp

    <img src="{{ $image ?   $image : asset('assets/img/product/product-1-1.png') }}"
         alt="product"
         style="max-height: 50px; width: auto;">
</div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('home') }}">Home</a>
                       
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}">About Us</a>
                    </li>
                    {{-- <li class="menu-item-has-children">
                        <a href="{{ route('services') }}">Service</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('services') }}">Service</a></li>
                            <li><a href="{{ route('service-details') }}">Service Details</a></li>
                        </ul>
                    </li> --}}
                     <li class="menu-item-has-children mega-menu-wrap">
                        <a href="{{ route('products') }}">Products</a>
                        {{-- <ul class="mega-menu">
                            <li><a href="{{ route('products') }}">Product 1</a>
                                <ul>
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="{{ route('product-details', $product['slug']) }}">product Details</a></li>
                                    
                                </ul>
                            </li>
                           
                        </ul> --}}
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('blogs') }}">Blogs</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                            <li><a href="">Blog Details</a></li>
                        </ul> --}}
                    </li>
                   
                    <li>
                        <a href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>