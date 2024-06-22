<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('page-products-list', function () {
    return view('page-products-list');
});

Route::get('page-products-grid', function () {
    return view('page-products-grid');
});

Route::get('page-products-grid-2', function () {
    return view('page-products-grid-2');
});

Route::get('page-categories', function () {
    return view('page-categories');
});

Route::get('page-orders-1', function () {
    return view('page-orders-1');
});

Route::get('page-orders-2', function () {
    return view('page-orders-2');
});

Route::get('page-orders-detail', function () {
    return view('page-orders-detail');
});

Route::get('page-orders-tracking', function () {
    return view('page-orders-tracking');
});

Route::get('page-invoice', function () {
    return view('page-invoice');
});

Route::get('page-sellers-cards', function () {
    return view('page-sellers-cards');
});

Route::get('page-sellers-list', function () {
    return view('page-sellers-list');
});

Route::get('page-seller-detail', function () {
    return view('page-seller-detail');
});

Route::get('page-form-product-1', function () {
    return view('page-form-product-1');
});

Route::get('page-form-product-2', function () {
    return view('page-form-product-2');
});

Route::get('page-form-product-3', function () {
    return view('page-form-product-3');
});

Route::get('page-form-product-4', function () {
    return view('page-form-product-4');
});

Route::get('page-transactions-1', function () {
    return view('page-transactions-1');
});

Route::get('page-transactions-2', function () {
    return view('page-transactions-2');
});

Route::get('page-transactions-details', function () {
    return view('page-transactions-details');
});

Route::get('page-account-login', function () {
    return view('page-account-login');
});

Route::get('page-account-register', function () {
    return view('page-account-register');
});

Route::get('page-error-404', function () {
    return view('page-error-404');
});

Route::get('page-reviews', function () {
    return view('page-reviews');
});

Route::get('page-brands', function () {
    return view('page-brands');
});

Route::get('page-settings-1', function () {
    return view('page-settings-1');
});

Route::get('page-settings-2', function () {
    return view('page-settings-2');
});

Route::get('page-blank', function () {
    return view('page-blank');
});
