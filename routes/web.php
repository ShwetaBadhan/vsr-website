<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');

// about us
Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');


// services
Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

Route::get('/service-details', function () {
    return view('frontend.pages.service-details');
})->name('service-details');


// products
Route::get('/products', function () {
    return view('frontend.pages.products');
})->name('products');

Route::get('/product-details', function () {
    return view('frontend.pages.product-details');
})->name('product-details');

// blogs
Route::get('/blogs', function () {
    return view('frontend.pages.blogs');
})->name('blogs');

Route::get('/blog-details', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');

// contact 
Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');

// cart
Route::get('/cart', function () {
    return view('frontend.pages.cart');
})->name('cart');

// checkout
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
})->name('checkout');
