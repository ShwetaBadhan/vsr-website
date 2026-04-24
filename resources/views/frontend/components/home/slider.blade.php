@php
    $sliders = $sliders ?? [];
@endphp

<!--==============================
Hero Area
============================== -->
<div class="hero-layout3" data-bg-src="assets/img/bg/hero-bg-3.jpg">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-slide">
                    <div class="row vs-carousel slide-items" data-asnavfor=".image-item" data-dots="true" data-slide-show="1" data-autoplay="true" data-fade="true">
                        
                        @forelse($sliders as $slider)
                        <div class="hero-content">
                            {{-- Use default text since API only sends image --}}
                            <h1 class="hero-title">Wellness That Works for You</h1>
                            <p class="hero-text">Simple. Natural. Effective.</p>
                            <p class="hero-text">Discover a smarter way to care for your health with VSR Wellness.</p>
                            <div class="hero-bottom">
                                <a href="{{ route('products') ?? '#' }}" class="vs-btn">Discover Services</a>
                            </div>
                        </div>
                        @empty
                        <div class="hero-content">
                             <h2 class="text-white">Wellness That Works for You</h2>
                            <h4 class="text-white">Simple. Natural. Effective.</h4>
                            <p class="hero-text">Discover a smarter way to care for your health with VSR Wellness.</p>
                            <div class="hero-bottom">
                                <a href="{{ route('products') ?? '#' }}" class="vs-btn">Discover Services</a>
                            </div>
                        </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="hero-images">
        <div class="image-item vs-carousel" data-asnavfor=".slide-items" data-slide-show="1" data-autoplay="true" data-fade="true">
            
            @forelse($sliders as $slider)
            <div class="slide-img">
                {{-- Direct image URL from API --}}
                <img src="{{ $slider['image'] ?? 'assets/img/hero/hero-img-3-1.png' }}" alt="hero-img">
                <div class="slide-icon">
                    <img src="assets/img/hero/hero-batch.png" alt="hero-icon">
                </div>
            </div>
            @empty
            <div class="slide-img">
                <img src="assets/img/hero/hero-img-3-1.png" alt="hero-img">
            </div>
            @endforelse

        </div>
    </div>
</div>