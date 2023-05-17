<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontControllerController;
use App\Http\Controllers\ProductController;

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
Route::view('/access-control-systems','website.access-control-system')->name('access_control_systems');
Route::get('/', [FrontControllerController::class, 'Index'])->name('home');
Route::get('products', [FrontControllerController::class, 'Products'])->name('products');
Route::get('support', [FrontControllerController::class, 'Support'])->name('support');
Route::get('about', [FrontControllerController::class, 'About'])->name('about');
Route::get('contact', [FrontControllerController::class, 'Contact'])->name('contact');
Route::get('access-control-systems',[FrontControllerController::class, 'AccessControlSystem'])->name('access_control_systems');
Route::get('sliding-and-swinging-gates',[FrontControllerController::class, 'SlidingandSwinging'])->name('sliding_swinging');
Route::get('boom-gates-and-industrial-gates',[FrontControllerController::class, 'BoomandIndustrial'])->name('boom_industrial');

Route::controller(ProductController::class)->group(function () {
Route::get('product-category','CategoryProduct')->name('product-category');
Route::get('product/{product}','ProductSinglePage')->name('single_product');
Route::post('post_review', 'ProductSinglePage')->name('review_product');
Route::post('add-to-cart','AddtoCart')->name('add_cart');
Route::get('show-cart/{random_id}','CartPage')->name('show_cart');
Route::post('update-cart','updateCart')->name('update.cart');
Route::get('remove-from-cart','removeCart')->name('remove.from.cart');
Route::get('all-remove-from-cart', 'removeAll')->name('all.remove.from.cart');
Route::get('go-to-checkout','checkOut')->name('check_out');
Route::post('save-shipping-details','saveShippingDetails')->name('shipping');
Route::get('payment','doPayment')->name('do_payment');
Route::post('post-payment','postPayment')->name('post_payment');

});

//Route::post('post_review',[ProductController::class, 'ProductReview'])->name('review_product');


// Route::get('/phpinfo', function() {
//     phpinfo();
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
