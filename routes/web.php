<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

// ===============================
// 🏠 PUBLIC ROUTES
// ===============================

Route::get('/', [HomeController::class, 'home'])->name('home');

// About Us
Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');

// Services
Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

Route::get('/service-details', function () {
    return view('frontend.pages.service-details');
})->name('service-details');

// Products
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/product/{slug}', [HomeController::class, 'productDetails'])->name('product-details');

// Blogs
Route::get('/blogs', function () {
    return view('frontend.pages.blogs');
})->name('blogs');

Route::get('/blog-details', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');

// Contact
Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');

// ===============================
// 🛒 CART ROUTES (Public)
// ===============================

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items'); // For AJAX
Route::get('/clear-cart', function() {
    session()->forget('cart');
    return 'Cart cleared! <a href="'.route('products').'">Go back</a>';
});

// ===============================
// ❤️ WISHLIST ROUTES (Public - Session Based)
// ===============================

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
Route::post('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');

// ===============================
// 🔐 AUTHENTICATION ROUTES (OTP + Traditional)
// ===============================

// Traditional Auth (your existing)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Password Reset
Route::get('/forgot-password', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// ✅ NEW: OTP Routes for Checkout Auth
Route::prefix('auth')->name('auth.')->group(function () {
    // Show auth page when checkout requires login
    Route::get('/checkout-required', [AuthController::class, 'showCheckoutAuth'])->name('checkout-required');
    
    // OTP Send/Verify (rate-limited)
    Route::post('/send-otp', [AuthController::class, 'sendOtp'])
        ->name('send-otp')
        ->middleware('throttle:5,1'); // Max 5 attempts per minute
        
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])
        ->name('verify-otp')
        ->middleware('throttle:10,1'); // Max 10 attempts per minute
});

// ✅ Social Auth (your existing)
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// ===============================
// 🛒 CHECKOUT ROUTES (PROTECTED - Auth Required)
// ===============================

// ✅ Wrap checkout routes with auth middleware
Route::middleware(['auth'])->group(function () {
    
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::post('/checkout/update-shipping', [CheckoutController::class, 'updateShipping'])->name('checkout.shipping');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    
});

// ✅ Cancel route can stay public (user can abandon anytime)
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');

// ===============================
// 🎯 MIDDLEWARE: Redirect Unauthenticated Users from Checkout
// ===============================

// Add this AFTER all routes, or create a dedicated middleware
// See: app/Http/Middleware/RedirectIfNotAuthenticatedForCheckout.php
