<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   // CartController.php

public function addToCart(Request $request)
{
    $productId = (int) $request->input('product_id');  // Cast to int for consistency
    $productName = $request->input('product_name');
    $productPrice = (float) $request->input('product_price');
    $productImage = $request->input('product_image');
    
    $cart = Session::get('cart', []);

    if (isset($cart[$productId])) {
        // Item exists - update quantity
        $cart[$productId]['quantity'] += 1;
    } else {
        // ✅ NEW: Store product_id INSIDE the item + consistent keys
        $cart[$productId] = [
            'product_id' => $productId,      // ← ADD THIS KEY
            'name' => $productName,
            'price' => $productPrice,
            'image' => $productImage,
            'quantity' => 1,
        ];
    }

    Session::put('cart', $cart);
    Session::save(); // Force session write
    
    // Calculate response data
    $cartCount = $this->getCartCount();
    $subtotal = $this->calculateCartTotal();

    if ($request->ajax() || $request->wantsJson()) {
        return response()->json([
            'success' => true,
            'message' => 'Product added to cart!',
            'cart_count' => $cartCount,
            'cart_items' => $this->getCartItemsHTML(),
            'subtotal' => number_format($subtotal, 2)
        ]);
    }

    return redirect()->route('cart')->with('success', 'Product added to cart!');
}

public function removeFromCart(Request $request)
{
    try {
        $productId = $request->input('product_id');
        
        if (!$productId) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid product ID'
            ], 400);
        }
        
        $cart = Session::get('cart', []);
        
        // Check if item exists before removing
        if (!isset($cart[$productId])) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found in cart'
            ], 404);
        }
        
        // Remove item
        unset($cart[$productId]);
        Session::put('cart', $cart);
        
        // Prepare response data
        $cartCount = $this->getCartCount();
        $subtotal = $this->calculateCartTotal();
        
        // Return JSON for AJAX requests
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Item removed successfully',
                'cart_count' => $cartCount,
                'cart_items' => $this->getCartItemsHTML(),
                'subtotal' => number_format($subtotal, 2)
            ]);
        }
        
        // Fallback for non-AJAX
        return redirect()->back()->with('success', 'Item removed from cart!');
        
    } catch (\Exception $e) {
        \Log::error('Remove from cart error: ' . $e->getMessage());
        
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Server error. Please try again.'
            ], 500);
        }
        
        return redirect()->back()->with('error', 'Failed to remove item.');
    }
}
    // Cart Page Display
    public function index()
    {
        $cart = Session::get('cart', []);
        $total = $this->calculateCartTotal($cart);
        return view('frontend.pages.cart', compact('cart', 'total'));
    }

    // Helper: Calculate Total
   private function calculateCartTotal($cart = null)
{
    $cart = $cart ?? Session::get('cart', []);
    $total = 0;
    foreach ($cart as $item) {
        $total += (float) $item['price'] * max(1, (int) $item['quantity']);
    }
    return $total;
}

    // ✅ Helper: Get Cart Count
    private function getCartCount()
    {
        $cart = Session::get('cart', []);
        return array_sum(array_column($cart, 'quantity'));
    }

    // ✅ Helper: Generate Cart Items HTML (for side cart)
    private function getCartItemsHTML()
{
    $cart = Session::get('cart', []);
    
    if (empty($cart)) {
        return '<li class="text-center py-3 text-muted">Your cart is empty</li>';
    }
    
    $html = '';
    foreach ($cart as $id => $item) {
        $imageUrl = $item['image'] ?? '';
        if (!str_starts_with($imageUrl, 'http') && !empty($imageUrl)) {
            $imageUrl = env('BACKEND_URL', '') . '/storage/' . $imageUrl;
        }
        
        $html .= '<li class="mini_cart_item" data-id="'.$id.'">';
        $html .= '<a href="#" class="remove remove-cart" data-id="'.$id.'"><i class="fal fa-trash-alt"></i></a>';
        $html .= '<a href="'.route('product-details', $item['slug'] ?? '#').'">';
        $html .= '<img src="'.($imageUrl ?: asset('assets/img/product/product-1-1.png')).'" alt="'.htmlspecialchars($item['name']).'">';
        $html .= htmlspecialchars(Str::limit($item['name'], 30)).'</a>';
        $html .= '<span class="quantity">'.$item['quantity'].' × ';
        $html .= '<span class="amount"><span>Rs.</span>'.number_format($item['price'], 2).'</span></span>';
        $html .= '</li>';
    }
    
    return $html;
}
    // Remove Item from Cart
    
    // Update Cart Quantities
    public function updateCart(Request $request)
    {
        $quantities = $request->input('quantity', []);
        $cart = Session::get('cart', []);

        foreach ($quantities as $productId => $qty) {
            if (isset($cart[$productId])) {
                if ($qty > 0) {
                    $cart[$productId]['quantity'] = (int) $qty;
                } else {
                    unset($cart[$productId]);
                }
            }
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Cart updated successfully!');
    }
}