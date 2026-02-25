@extends('frontend.layout.master')
@section('content')

 <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{url ('assets/img/breadcrumb/breadcumb-bg.png')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Products</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Products area
    ============================== -->
    <section class="products space">
        <div class="container">
            <div class="vs-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <div class="col-auto">
                            <p class="woocommerce-result-count">Showing 1–12 of 13 results</p>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="row justify-content-center">
                            <div class="col-sm-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-auto">
                                <div class="nav" role="tablist">
                                    <a href="#" class="icon-btn" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-list"></i></a>
                                    <a href="#" class="icon-btn active" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-1.png" alt="product img">
                        </div>
                        <div class="product-meta">30% Off</div>
                        <div class="product-about">
                            <p class="text">800 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Coconut Oil Jar</a></h2>
                            <span class="price"> <del>$18.00</del>$14.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-2.png" alt="product img">
                        </div>
                        <div class="product-meta">30% Off</div>
                        <div class="product-about">
                            <p class="text">800 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">PureFroots Jar</a></h2>
                            <span class="price"> <del>$18.00</del>$14.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-3.png" alt="product img">
                        </div>
                        <div class="product-meta">30% Off</div>
                        <div class="product-about">
                            <p class="text">600 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Nature's Bounty</a></h2>
                            <span class="price"> <del>$12.00</del>$14.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-4.png" alt="product img">
                        </div>
                        <div class="product-meta">32% Off</div>
                        <div class="product-about">
                            <p class="text">900 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Organic Harvest</a></h2>
                            <span class="price"> <del>$16.00</del>$15.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-5.png" alt="product img">
                        </div>
                        <div class="product-meta">40% Off</div>
                        <div class="product-about">
                            <p class="text">700 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Fresh & Rooted</a></h2>
                            <span class="price"> <del>$28.00</del>$19.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-6.png" alt="product img">
                        </div>
                        <div class="product-meta">30% Off</div>
                        <div class="product-about">
                            <p class="text">800 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Froots & Greens</a></h2>
                            <span class="price"> <del>$18.00</del>$14.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-7.png" alt="product img">
                        </div>
                        <div class="product-meta">30% Off</div>
                        <div class="product-about">
                            <p class="text">800 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Earthy Delights</a></h2>
                            <span class="price"> <del>$18.00</del>$14.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-style1">
                        <div class="product-img">
                            <img src="assets/img/product/product-1-8.png" alt="product img">
                        </div>
                        <div class="product-meta">30% Off</div>
                        <div class="product-about">
                            <p class="text">800 ML</p>
                            <h2 class="product-title"><a href="{{ route('product-details') }}">Purely Picked</a></h2>
                            <span class="price"> <del>$18.00</del>$14.00</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-style">
                            <ul>
                                <li>
                                    <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                    <ul class="sub-list">
                                        <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vs-pagination text-center mb-0 mt-4">
                <ul>
                    <li class="arrow"><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">6</a></li>
                    <li class="arrow"><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--==============================
    Offer Area
    ============================== -->
    <div class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="offer-deal">
                    <div class="row gy-5 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row align-items-center" data-bg-src="assets/img/about/about-bg-1-2.jpg">
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="deal-offer white-style">
                                        <span class="offer-subtitle">Enjoy Healthy Food</span>
                                        <h2 class="offer-title h3">Eat Organic</h2>
                                        <p class="offer-text">100% Natural and pure organic products</p>
                                        <span class="price"> <del>$18.00</del>$14.00</span>
                                        <a href="{{ route('blogs') }}" class="vs-btn">Shop Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="offer-img">
                                        <img src="assets/img/about/deal-offer1.png" alt="offer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row align-items-center" data-bg-src="assets/img/about/about-bg-1-1.jpg">
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="deal-offer">
                                        <span class="offer-subtitle">Organic Deal</span>
                                        <h2 class="offer-title h3">Pack of 2</h2>
                                        <p class="offer-text">100% Natural and pure organic products</p>
                                        <span class="price"> <del>$18.00</del>$14.00</span>
                                        <a href="{{ route('blogs') }}" class="vs-btn">Shop Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="offer-img">
                                        <img src="assets/img/about/deal-offer1.png" alt="offer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>


@endsection