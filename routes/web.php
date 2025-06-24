<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'index')->name('/');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('shop', 'partials.shop')->name('shop');
Route::view('cart', 'partials.cart')->name('cart');
Route::view('about', 'partials.about')->name('about');
Route::view('account-address', 'partials.account-address')->name('account-address');
Route::view('account-address-add', 'partials.account-address-add')->name('account-address-add');
Route::view('account-details', 'partials.account-details')->name('account-details');
Route::view('account-orders-details', 'partials.account-orders-details')->name('account-orders-details');
Route::view('account-orders', 'partials.account-orders')->name('account-orders');
Route::view('account-review', 'partials.account-review')->name('account-review');
Route::view('account-wishlist', 'partials.account-wishlist')->name('account-wishlist');
Route::view('checkout', 'partials.checkout')->name('checkout');
Route::view('contact', 'partials.contact')->name('contact');
Route::view('details', 'partials.details')->name('details');
Route::view('my-account', 'partials.my-account')->name('my-account');
Route::view('register', 'partials.register')->name('register');
Route::view('order-confirmation', 'partials.order-confirmation')->name('order-confirmation');
Route::view('terms-condition', 'partials.terms-condition')->name('terms-condition');
Route::view('wishlist', 'partials.wishlist')->name('wishlist');
require __DIR__.'/auth.php';
