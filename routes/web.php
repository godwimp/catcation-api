<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/carts', [CartController::class, 'index']);
Route::get('/cartitems', [CartItemController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/catinfos', [CatInfoController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/messages', [MessageController::class, 'index']);