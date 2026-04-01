   <!--==============================
    Header Area
    ==============================-->
   <header class="vs-header header-layout3">
       <div class="header-top">
           <div class="container">
               <div class="row justify-content-between align-items-center">
                   <div class="col-auto">
                       <div class="header-links">
                           <ul>
                               <li><i class="far fa-map-marker-alt"></i>California, TX 70240</li>
                               <li><i class="far fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a>
                               </li>
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
                           <div class="col-auto d-lg-block d-none">
                               <div class="main-menu2">
                                   <div class="header-icons">
                                       <a href="#" class="vs-menu-toggle">
                                           <p class="bar-btn">
                                               <span class="bar"></span>
                                               <span class="bar bar2"></span>
                                               <span class="bar"></span>
                                           </p>menu
                                       </a>
                                       <a href="#" class="link-btn searchBoxTggler"><i
                                               class="far fa-search"></i>Search</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col text-center">
                              <div class="header-logo">
    @php
        $settings = $settings ?? null;
        $whiteLogo = $settings?->white_logo ?? $settings['white_logo'] ?? null;
        $blackLogo = $settings?->black_logo ?? $settings['black_logo'] ?? null;
        $fallback = asset('assets/img/logo-2.png');
    @endphp

    <a class="logo1" href="{{ route('home') }}">
        <img src="{{ $whiteLogo ?? $fallback }}" 
             alt="{{ $settings?->company_name ?? 'Logo' }}" 
             style="max-height: 50px; width: auto;">
    </a>
    
    <a class="logo2" href="{{ route('home') }}">
        <img src="{{ $blackLogo ?? $fallback }}" 
             alt="{{ $settings?->company_name ?? 'Logo' }}" 
             style="max-height: 50px; width: auto;">
    </a>
</div>
                           </div>
                           <div class="col-auto d-lg-none">
                               <button class="vs-menu-toggle d-inline-block">
                                   <i class="fal fa-bars"></i>
                               </button>
                           </div>
                           <div class="col-auto d-lg-block d-none">
                               <div class="header-icons">
                                   <a href="#" class="link-btn"><i class="fal fa-user"></i>Login</a>
                                   <a href="{{ route('wishlist') }}" class="icon-btn"><i class="far fa-heart"></i></a>
                                   <a href="#" class="icon-btn style2 sideCartToggler">
                                       <i class="fal fa-shopping-cart"></i>
                                       <!-- ✅ Added ID for JavaScript targeting -->
                                       <span class="badge" id="cartCountBadge">
                                           {{ array_sum(array_column(session('cart', []), 'quantity')) }}
                                       </span>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!--==============================
