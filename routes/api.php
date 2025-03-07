<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/products', [ProductController::class, 'index']);

// Route::get('/product/{id}', [ProductController::class, 'product'])->name('product');

// Route::post('/create-product', [ProductController::class, 'store']);

// Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');

// Route::put('/update/{product}', [ProductController::class, 'update']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::delete('/products/{product}', [ProductController::class, 'delete']);
