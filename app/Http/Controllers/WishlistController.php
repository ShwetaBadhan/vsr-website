<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WishlistController extends Controller
{
    public function index()
    {
        // Get wishlist from session
        $wishlistItems = session()->get('wishlist', []);
        
        // If you want to fetch fresh data from API
        if (!empty($wishlistItems)) {
            $response = Http::get(config('api.base_url') . '/products');
            $allProducts = $response->json()['products'] ?? [];
            
            // Filter products that are in wishlist
            $wishlistProducts = collect($allProducts)->filter(function($product) use ($wishlistItems) {
                return in_array($product['id'], $wishlistItems);
            })->values()->toArray();
        } else {
            $wishlistProducts = [];
        }

        return view('frontend.pages.wishlist', [
            'products' => $wishlistProducts
        ]);
    }

    public function add(Request $request)
    {
        $productId = $request->product_id;
        $wishlist = session()->get('wishlist', []);

        if (!in_array($productId, $wishlist)) {
            $wishlist[] = $productId;
            session()->put('wishlist', $wishlist);
            
            return response()->json([
                'success' => true,
                'message' => 'Added to wishlist'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Already in wishlist'
        ]);
    }

    public function remove(Request $request)
    {
        $productId = $request->product_id;
        $wishlist = session()->get('wishlist', []);

        if (($key = array_search($productId, $wishlist)) !== false) {
            unset($wishlist[$key]);
            session()->put('wishlist', array_values($wishlist));
        }

        return response()->json([
            'success' => true,
            'message' => 'Removed from wishlist'
        ]);
    }

    public function toggle(Request $request)
    {
        $productId = $request->product_id;
        $wishlist = session()->get('wishlist', []);

        if (in_array($productId, $wishlist)) {
            // Remove from wishlist
            $wishlist = array_diff($wishlist, [$productId]);
            session()->put('wishlist', array_values($wishlist));
            
            return response()->json([
                'success' => true,
                'in_wishlist' => false,
                'message' => 'Removed from wishlist'
            ]);
        } else {
            // Add to wishlist
            $wishlist[] = $productId;
            session()->put('wishlist', $wishlist);
            
            return response()->json([
                'success' => true,
                'in_wishlist' => true,
                'message' => 'Added to wishlist'
            ]);
        }
    }
}