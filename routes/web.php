<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('products.index');
});
// page de confirmation avant suppression
Route::get('products/{product}/confirm-delete', [ProductController::class, 'confirmDelete'])
    ->name('products.confirm-delete');

Route::resource('products', ProductController::class);