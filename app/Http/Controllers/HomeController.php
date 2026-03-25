<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;
class HomeController extends Controller
{
    public function home(ProductService $productService)
    {
        // Home API
        $homeResponse = Http::get(config('api.base_url') . '/home');
        $homeData = $homeResponse->json();
  
        // Product API via service
        $productData = $productService->getProducts();
        // Team API
        $teamResponse = Http::get(config('api.base_url') . '/our-team');
        $teamData = $teamResponse->json();
        // Blogs API ✅ Fixed: use config() not env()
        $blogResponse = Http::get(config('api.base_url') . '/home');
        $blogData = $blogResponse->json();
    
        return view('frontend.pages.index', [
            'sliders'    => $homeData['slider'] ?? [],
            'partners'   => $homeData['partner'] ?? [],
            'about'      => $homeData['about_us'] ?? [],
            'counters'      => $homeData['counters'] ?? [],
            'services'   => $homeData['service'] ? [$homeData['service']] : [],
            'products'   => $productData['products'],
            'categories' => $productData['categories'],
            'team'       => $teamData['our_leaders'] ?? [], 
            'blogs'      => $blogData['blogs'] ?? [],
        ]);
    }
public function productDetails($slug)
{
    $response = Http::get(config('api.base_url') . '/products');
    $data = $response->json();
    $products = $data['products'] ?? [];
    $categories = $data['product_category'] ?? [];

    $product = collect($products)->firstWhere('slug', $slug);

    // 👇 REMOVE DUPLICATE IMAGES
    if (isset($product['images']) && is_array($product['images'])) {
        $product['images'] = array_values(array_unique($product['images']));
    }

    $category = collect($categories)
        ->firstWhere('id', $product['category_id'] ?? null);

    return view('frontend.pages.product-details', [
        'product' => $product,
        'category' => $category
    ]);
}
public function products(ProductService $productService)
{
    $productData = $productService->getProducts();
    
    return view('frontend.pages.products', [
        'products'   => $productData['products'],
        'categories' => $productData['categories'],
    ]);
}
}