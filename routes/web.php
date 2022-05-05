<?php
namespace App;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\MailController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\WishListController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/view-category/{slug}', [FrontendController::class, 'viewcategory']);
Route::get('/category/{category_slug}/{product_slug}', [FrontendController::class, 'viewproduct']);
Route::get('/search', [FrontendController::class, 'search']);
Route::get('/search_category', [FrontendController::class, 'search_category']);

Route::get('/contact', [ContactController::class, 'index']);


Auth::routes();

  Route::get('/load-cart-data', [CartController::class, 'cartcount']);
  Route::get('/load-wishlist-data', [WishListController::class, 'wishlistcount']);

  // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::post('add-to-cart', [CartController::class, 'addProduct']);
  Route::post('delete-cart-item', [CartController::class, 'deleteProduct']);
  Route::post('update-cart', [CartController::class, 'updateCart']);

  Route::post('add-to-wishlist', [WishListController::class, 'add']);
  Route::post('delete-wishlist-item', [WishListController::class, 'deleteitem']);


Route::middleware('auth')->group(function () {
  Route::get('cart', [CartController::class, 'viewcart']);
  Route::get('checkout', [CheckoutController::class, 'index']);
  Route::post('place-order', [CheckoutController::class, 'placeOrder']);

  Route::get('my-orders', [UserController::class, 'index']);
  Route::get('view-order/{id}', [UserController::class, 'view']);
  Route::get('profile', [UserController::class, 'profile']);
  Route::put('update-profile', [UserController::class, 'update']);

  Route::get('wishlist', [WishListController::class, 'index']);
  Route::get('add-to-wishlist', [WishListController::class, 'add']);

  Route::post('add-rating', [RatingController::class, 'add']);

  Route::get('add-review/{product_slug}/userreview', [ReviewController::class, 'add']);
  Route::post('add-review', [ReviewController::class, 'create']);
  Route::get('edit-review/{product_slug}/userreview', [ReviewController::class, 'edit']);
  Route::put('update-review', [ReviewController::class, 'update']);

  Route::post('proceed-to-pay', [CheckoutController::class, 'razorpaycheck']);
  Route::post('payment/vnpay', [CheckoutController::class, 'create_payment']);
  Route::post('payment/vnpay_payment', [CheckoutController::class, 'vnpay_payment']);
  Route::get('vnpay/save_order/{order_id}', [CheckoutController::class, 'save_order']);
  Route::get('vnpay/return', [CheckoutController::class, 'vnpay_return']);


  Route::get('send-mail', [MailController::class, 'sendEmail']);
  Route::post('info-send-mail', [MailController::class, 'info_mail']);

  // Route::get('changepassword', [ResetPasswordController::class, 'showchangepassword']);
  // Route::post('changepassword', [ResetPasswordController::class, 'changepassword']);


});

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminFrontendController::class, 'index']);
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

    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
    Route::get('order-history', [OrderController::class, 'orderhistory']);

    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-user/{id}', [DashboardController::class, 'viewuser']);

});

Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//     Route::get('send-mail', function () {

//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     Mail::to('aceluuhang@gmail.com')->send(new TestMail($details));

//     return redirect('/')->with('status','Gửi mail thành công.');
// });
// Route::middleware(['auth'])->group(function() {
//     Route::get('/product', function (){
//         return view('frontend.product');
//     });
//     Route::get('/index', function (){
//         return view('frontend.index');
//     });
//     Route::get('/products2', function (){
//         return view('frontend.product2');
//     });
//     Route::get('/single', function (){
//         return view('frontend.single');
//     });
//     Route::get('/single2', function (){
//         return view('frontend.single2');
//     });
    //Route::get('/checkout', [CartController::class, 'viewcart']);
//     Route::get('/about', function (){
//         return view('frontend.about');
// //     });
//     Route::get('/contact', function (){
//         return view('frontend.contact');
//     });
//     Route::get('/faqs', function (){
//         return view('frontend.faqs');
//     });
//     Route::get('/help', function (){
//         return view('frontend.help');
//     });
//     Route::get('/privacy', function (){
//         return view('frontend.privacy');
//     });
//     Route::get('/term', function (){
//         return view('frontend.term');
//     });
//     Route::get('/payment', function (){
//         return view('frontend.payment');
//     });
// });