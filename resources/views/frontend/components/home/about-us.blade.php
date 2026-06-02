<!--==============================
    About Area
    ============================== -->
<section class="about-layout3 space">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9">
                <div class="title-area mb-60 text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <div class="title-img">
                        <img src="assets/img/icon/title-logo.png" alt="title logo">
                    </div>
                    <span class="sec-subtitle">
                        {{ $about['sub_title'] ?? 'About Us' }}
                    </span>
                    <h2 class="sec-title">
                        {{ $about['main_title'] ?? 'About Us' }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-5 align-items-center">
            <!-- Image Column (Moved to Left) -->
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ $about['image'] ?? 'assets/img/about/about-bg-2-1.jpg' }}" 
                         alt="about img" 
                         class="img-fluid about-controlled-img">
                </div>
            </div>
            
            <!-- Content Column (Moved to Right) -->
            <div class="col-lg-6">
                <div class="about-content">
                    <p class="about-text" style="text-align: justify;">
                        {!! nl2br(e($about['description_1'] ?? '')) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup moving z-index-n1 d-none d-xxl-block" style="right: 9%; bottom: 22%;">
        <img src="assets/img/shep/about-shep-1.png" alt="shapes">
    </div>
</section>

<style>
.about-controlled-img {
    width: 100%;
    max-height: 450px; /* Adjust this value to your preferred maximum height */
    object-fit: cover; /* Prevents distortion by cropping the image neatly to fit the box */
    border-radius: 4px; /* Optional: adds a subtle, minimalistic border radius */
}

/* Responsive adjustment for tablets and smaller desktops */
@media (max-width: 991px) {
    .about-controlled-img {
        max-height: 350px;
    }
}

/* Responsive adjustment for mobile devices */
@media (max-width: 575px) {
    .about-controlled-img {
        max-height: 250px;
    }
}
</style>