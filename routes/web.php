<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;

Route::get('/', [EcommerceController::class, 'index'])
    ->name('ecommerce.index');

Route::get('/katalog', [EcommerceController::class, 'catalog'])
    ->name('ecommerce.catalog');

Route::get('/produk/{id}', [EcommerceController::class, 'show'])
    ->name('ecommerce.show');