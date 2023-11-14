<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('products/{productId}/attributes' , [AttributeController::class, 'addAttribute']);
Route::post('products' , [ProductController::class, 'addProduct']);
Route::get('products/{productId}' , [ProductController::class, 'getProducts']);
