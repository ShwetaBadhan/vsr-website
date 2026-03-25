   <!--==============================
    Categories Area
    ============================== -->
    <section class="categorie-layout2">
        <div class="container">
            <div class="d-flex title-area justify-content-between align-items-end">
                <div class="title-left">
                    <span class="sec-subtitle">Our Categories</span>
                    <h2 class="sec-title">Browse Our Categories</h2>
                </div>
               
            </div>
          <div class="row">
    @forelse($categories as $category)
        <div class="col-lg-3 col-md-6">
            <div class="categorie-style2">
                
                <div class="categorie-img">
                    <img 
                        src="{{ !empty($category['image']) 
                                ? env('BACKEND_URL') . '/storage/' . $category['image'] 
                                : asset('assets/img/categorie/categorie-2-1.jpg') }}" 
                        alt="categorie">
                </div>

                <div class="categorie-content">
                    <h3 class="categorie-title h5">
                        <a href="{{ route('services') }}">
                            {{ $category['name'] ?? 'Category' }}
                        </a>
                    </h3>

                    <p class="categorie-text">
                        {{ $category['item_count'] ?? 'Items' }}
                    </p>
                </div>

            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p>No Categories Found</p>
        </div>
    @endforelse
</div>
        </div>
    </section>