@extends('frontend.layout.master')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="{{ url('assets/img/breadcrumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">My Wishlist</h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Wishlist</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Wishlist Area
============================== -->
<section class="wishlist space">
    <div class="container">
        @if(count($products) > 0)
            <div class="table-responsive">
                <table class="table wishlist-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Stock Status</th>
                            <th>Add to Cart</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            @php
                                $image = $product['images'][0] ?? null;
                            @endphp
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="{{ route('product-details', $product['slug']) }}">
                                        <img src="{{ $image ? env('BACKEND_URL') . '/storage/' . $image : asset('assets/img/product/product-1-1.png') }}" 
                                             alt="{{ $product['name'] }}">
                                    </a>
                                </td>
                                <td class="product-price">
                                    <span class="amount">
                                        <del>Rs.{{ number_format($product['price'], 2) }}</del>
                                        Rs.{{ number_format($product['discount_price'] ?? $product['price'], 2) }}
                                    </span>
                                </td>
                                <td class="product-stock">
                                    <span class="in-stock text-success">In Stock</span>
                                </td>
                                <td class="product-add-to-cart">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                        <input type="hidden" name="product_name" value="{{ $product['name'] }}">
                                        <input type="hidden" name="product_price" value="{{ $product['price'] }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="vs-btn">Add to Cart</button>
                                    </form>
                                </td>
                                <td class="product-remove">
                                    <button class="remove-wishlist btn btn-link text-danger" 
                                            data-product-id="{{ $product['id'] }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="cart-actions mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('products') }}" class="vs-btn">Continue Shopping</a>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="vs-btn">Move All to Cart</button>
                    </div>
                </div>
            </div>
        @else
            <div class="empty-wishlist text-center py-5">
                <i class="far fa-heart fa-4x text-muted mb-4"></i>
                <h3>Your wishlist is empty</h3>
                <p class="text-muted mb-4">Add items you love to your wishlist</p>
                <a href="{{ route('products') }}" class="vs-btn">Browse Products</a>
            </div>
        @endif
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Remove from wishlist
    document.querySelectorAll('.remove-wishlist').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const row = this.closest('tr');
            
            fetch("{{ route('wishlist.remove') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.remove();
                    // Check if wishlist is empty
                    if (document.querySelectorAll('.wishlist-table tbody tr').length === 0) {
                        location.reload();
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
@endpush