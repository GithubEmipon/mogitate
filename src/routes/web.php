<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;


Route::get('/products/register', [ProductController::class, 'register']);
Route::post('/register/confirm', [ProductController::class, 'confirm']);
Route::post('/register', [ProductController::class, 'store']);



Route::get('/products', [ProductController::class, 'index']);

Route::post('/product/{:productId}',[UploadController::class,'create']);
Route::get('/products/{:productId}/upload',[UploadController::class,'upload']);