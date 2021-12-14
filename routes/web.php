<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('', function () {

// });

Route::get('/', [FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/categories',[CategoryController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'add']);
    Route::post('/insert-category', [CategoryController::class, 'insert']);
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('/update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/delete/{id}', [CategoryController::class, 'delete']);

    Route::get('/products',[ProductController::class, 'index']);
    Route::get('/add-product', [ProductController::class, 'add']);
    Route::post('/insert-product', [ProductController::class, 'insert']);
    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('/update-product/{id}', [ProductController::class, 'update']);
    Route::get('/delete/{id}', [ProductController::class, 'delete']);
});

Route::middleware(['auth'])->group(function() {
    Route::get('/products', function (){
        return view('frontend.product');
    });
    Route::get('/products2', function (){
        return view('frontend.product2');
    });
    Route::get('/single', function (){
        return view('frontend.single');
    });
    Route::get('/single2', function (){
        return view('frontend.single2');
    });
    Route::get('/checkout', function (){
        return view('frontend.checkout');
    });
    Route::get('/about', function (){
        return view('frontend.about');
    });
    Route::get('/contact', function (){
        return view('frontend.contact');
    });
    Route::get('/faqs', function (){
        return view('frontend.faqs');
    });
    Route::get('/help', function (){
        return view('frontend.help');
    });
    Route::get('/privacy', function (){
        return view('frontend.privacy');
    });
    Route::get('/term', function (){
        return view('frontend.term');
    });
    Route::get('/payment', function (){
        return view('frontend.payment');
    });
});


