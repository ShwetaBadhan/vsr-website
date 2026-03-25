<!--==============================
    Blog Area
============================== -->
<section class="blog-layout2 space-top">
    <div class="container">
        <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
            <div class="title-img">
                <img src="assets/img/icon/title-logo.png" alt="title logo">
            </div>
            <span class="sec-subtitle">Blog & News</span>
            <h2 class="sec-title">Recent Articles</h2>
        </div>
        
        {{-- ✅ Safe null/array check --}}
        @if(isset($blogs) && is_array($blogs) && count($blogs) > 0)
        <div class="row gx-5 vs-carousel" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="2"
            data-autoplay="true" data-arrows="true">
            @foreach(array_slice($blogs, 0, 3) as $blog)
            <div class="col-lg-6">
                <div class="vs-blog blog-single">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="blog-img">
                                <a href="{{ route('blog-details', $blog['slug']) }}">
                                    <img src="{{ env('BACKRND_URL') }}/uploads/{{ $blog['image'] }}"
                                         alt="{{ $blog['title'] }}"
                                         onerror="this.src='{{ asset('assets/img/blog/blog-s-2-1.png') }}'">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="fal fa-tag"></i>
                                        {{ !empty($blog['category_ids']) ? 'Category #'.implode(', ', $blog['category_ids']) : 'Fresh Vegetables' }}
                                    </a>
                                </div>
                                <h2 class="blog-title">
                                    <a href="{{ route('blog-details', $blog['slug']) }}">
                                        {{ \Str::limit($blog['title'], 50) }}
                                    </a>
                                </h2>
                                <p class="blog-text">
                                    {{ \Str::limit(strip_tags($blog['description']), 100) }}
                                </p>
                                <div class="blog-meta">
                                    <a href="{{ route('blogs') }}" class="blog-date">
                                        <i class="fas fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($blog['published_at'])->format('M d, Y') }}
                                    </a>
                                    <a href="{{ route('blog-details', $blog['slug']) }}" class="blog-date">
                                        <i class="far fa-user"></i>
                                        {{ $blog['author'] ?? 'Admin' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="blog-btn">
            <a href="{{ route('blogs') }}" class="vs-btn">View All News</a>
        </div>
        @else
        <!-- Fallback Static Content -->
        <div class="row gx-5 vs-carousel" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="2"
            data-autoplay="true" data-arrows="true">
            <div class="col-lg-6">
                <div class="vs-blog blog-single">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-s-2-1.png" alt="Blog Image"></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                                </div>
                                <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                                <p class="blog-text">Lorem ipsum dolor sit amet, porros lien est, qui dolore ipsu.</p>
                                <div class="blog-meta">
                                    <a href="{{ route('blogs') }}" class="blog-date"><i class="fas fa-calendar-alt"></i>Dec 13, 2024</a>
                                    <a href="{{ route('blogs') }}" class="blog-date"><i class="far fa-comment"></i>24</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-btn">
            <a href="{{ route('blogs') }}" class="vs-btn">View All News</a>
        </div>
        @endif
    </div>
</section>