<?php   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Home Page
Route::get('/', [HomeController::class, 'index']);

// Products Page
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/products', [ProductController::class, 'index']);

// User Page
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Sales Page
Route::get('/sales', [SalesController::class, 'index']);