<?php

use App\Http\Controllers\AdminFrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LandingFrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Livewire\Destination;
use App\Http\Livewire\Destinations;
use Illuminate\Support\Facades\Route;


Route::redirect('/admin', '/admin/dashboard');
Route::middleware(['auth', 'isAdmin'])->group(function() {
    Route::prefix('/admin')->group(function() {

        Route::controller(AdminFrontendController::class)->group(function() {
            Route::get('/dashboard', 'dashboardView');
            Route::get('/destinations', 'destinationsView');
            Route::get('/categories', 'categoriesView');
            Route::get('/orders', 'ordersView');
        });
    
    });

    Route::resource('/destinations', DestinationController::class);
    Route::get('/destinations/delete/{id}', [DestinationController::class, 'delete']);
    Route::delete('/delete-image/{id}', [DestinationController::class, 'deleteImage']);

    Route::resource('/categories', CategoryController::class);
    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete']);

    Route::resource('/orders', OrderController::class);
});


Route::controller(AuthController::class)->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get('/signup', 'signupView');
        Route::get('/signin', 'loginView');

        Route::post('/signup', 'store');
        Route::post('/signin', 'login')->name('login');
    });

    Route::get('/logout', 'logout')->middleware('auth');
});

Route::controller(LandingFrontendController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    // Route::get('/destination/{category_slug}/{destination_slug}', 'destination');
    // Route::get('/destinations', 'destinations');
});

Route::get('/destination/{category_slug}/{destination_slug}', Destination::class);
Route::get('/destinations', Destinations::class);

Route::controller(ReviewController::class)->middleware('auth')->group(function() {
    Route::post('/reviews', 'store');
});