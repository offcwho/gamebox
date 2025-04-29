<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('index')->group(function() {
    Route::get('/', [WelcomeController::class, 'index'])->name('index');
});

Route::namespace('products')->name('products.')->group(function () {
    Route::get('/products/{id}/detail', [ProductController::class, 'detail'])->name('detail');
});

Route::namespace('catalog')->group(function () {
    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
});

Route::get('/cart', function(){
    return view('website.page.cart');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
