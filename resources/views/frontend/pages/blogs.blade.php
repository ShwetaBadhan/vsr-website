@extends('frontend.layout.master')
@section('content')
<!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcrumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Blogs</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Blogs</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-1.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blogs') }}">Jakki James</a>
                                <a href="{{ route('blogs') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img vs-carousel" data-arrows="true" data-autoplay="true" data-slide-show="1" data-fade="true">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.png" alt="Blog Image"></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blogs') }}">Jakki James</a>
                                <a href="{{ route('blogs') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blogs') }}">Jakki James</a>
                                <a href="{{ route('blogs') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blogs') }}">Jakki James</a>
                                <a href="{{ route('blogs') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-4.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blogs') }}">Jakki James</a>
                                <a href="{{ route('blogs') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-5.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="{{ route('blogs') }}">Jakki James</a>
                                <a href="{{ route('blogs') }}" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="vs-pagination">
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
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blogs') }}">Dec 13, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blogs') }}">Jan 08, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blogs') }}">Nov 07, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_categories   ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('blogs') }}">Dairy farms</a>
                                    <span>23</span>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Grain</a>
                                    <span>10</span>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Agriculture</a>
                                    <span>09</span>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Fruit farming</a>
                                    <span>14</span>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Livestock farms</a>
                                    <span>12</span>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">Mixed farming</a>
                                    <span>12</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_nav_menu   ">
                            <h3 class="widget_title">Useful Services</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="team.html">Meet Our Team</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('blogs') }}">News & Media</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_meta   ">
                            <h3 class="widget_title">Meta</h3>
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries feed</a></li>
                                <li><a href="#">Comments feed</a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_newsletter  ">
                            <h4 class="widget_title">Newsletter</h4>
                            <form class="newsletter-form">
                                <p class="form_text">Enter your email and get recent news & recent offers update.</p>
                                <input class="form-control" type="email" placeholder="Enter your email....">
                                <button type="submit" class="vs-btn">Subscribe</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection