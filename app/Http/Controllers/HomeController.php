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
            $blogResponse = Http::get(config('api.base_url') . '/blogs');
            $blogData = $blogResponse->json();
        
            return view('frontend.pages.index', [
                'sliders'    => $homeData['slider'] ?? [],
                'settings'    => $homeData['settings'] ?? [],
                'partners'   => $homeData['partner'] ?? [],
                'about'      => $homeData['about_us'] ?? [],
                'counters'      => $homeData['counters'] ?? [],
                'services'   => $homeData['service'] ? [$homeData['service']] : [],
                'products'   => $productData['products'],
                'categories' => $productData['categories'],
                'team'       => $teamData['our_leaders'] ?? [], 
                'blogs'      => $blogData['blogs'] ?? [],
                 'blogCategories' => $blogData['blog_category'] ?? $blogData['categories'] ?? [],
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
    // Add this method to your HomeController class
public function privacyPolicy()
{
    try {
        $response = Http::timeout(10)->get(config('api.base_url') . '/privacy-policy');
        
        if ($response->successful()) {
            $data = $response->json();
            $privacyPolicy = $data['privacy_policy'] ?? null;
            
            if (!$privacyPolicy) {
                Log::warning('Privacy policy data missing in API response', ['response' => $data]);
            }
            
            return view('frontend.pages.privacy-policy', [
                'privacyPolicy' => $privacyPolicy
            ]);
        }
        
        Log::error('Failed to fetch privacy policy', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
        
        return view('frontend.pages.privacy-policy', ['privacyPolicy' => null]);
        
    } catch (\Exception $e) {
        Log::error('Privacy Policy API Error: ' . $e->getMessage());
        return view('frontend.pages.privacy-policy', ['privacyPolicy' => null]);
    }
}
public function termsConditions()
{
    try {
        $response = Http::timeout(10)->get(config('api.base_url') . '/terms-conditions');
        
        if ($response->successful()) {
            $data = $response->json();
            
            // ✅ Use correct key: 'terms_conditions' (adjust if your API uses different key)
            $termsConditions = $data['terms_conditions'] ?? $data['privacy_policy'] ?? null;
            
            if (!$termsConditions) {
                Log::warning('Terms & Conditions data missing in API response', ['response' => $data]);
            }
            
            return view('frontend.pages.terms-and-conditions', [
                'termsConditions' => $termsConditions
            ]);
        }
        
        Log::error('Failed to fetch terms & conditions', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
        
        return view('frontend.pages.terms-and-conditions', ['termsConditions' => null]);
        
    } catch (\Exception $e) {
        Log::error('Terms & Conditions API Error: ' . $e->getMessage());
        return view('frontend.pages.terms-and-conditions', ['termsConditions' => null]);
    }
}
    }