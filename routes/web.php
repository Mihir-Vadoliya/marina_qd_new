<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductDetailsController;
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

Route::get('cache-clear',function(){ 
    Artisan::call("optimize:clear"); 
    return true;
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id?}', [CategoryController::class, 'index'])->name('category');
Route::get('/product/{id?}', [ProductDetailsController::class, 'index'])->name('productDetails');

Route::post('/cart/add',  [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove',  [CartController::class, 'removeFromCart'])->name('cart.remove');


include 'upgrade.php';

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/myaccount', [MyAccountController::class, 'index'])->name('myaccount');
    Route::get('/myaccount-order', [MyAccountController::class, 'myAccountOrder'])->name('myaccount-order');
    
    Route::get('/my-account-wishlist', [MyAccountController::class, 'myAccountWishlist'])->name('myaccount-wishlist');

    Route::get('/myaccount-details', [MyAccountController::class, 'myAccountDetails'])->name('myaccount-details');
    Route::post('/myaccount-details', [MyAccountController::class, 'updateDetails'])->name('update-myaccount-details');

    Route::get('/myaccount-address', [UserAddressController::class, 'index'])->name('myaccount-address');
    Route::get('/myaccount-billing-address-edit', [UserAddressController::class, 'editBillingAddress'])->name('myaccount-billing-address-edit');
    Route::post('/myaccount-billing-address-update', [UserAddressController::class, 'updateBillingAddress'])->name('myaccount-billing-address-update');
    Route::get('/myaccount-shipping-address-edit', [UserAddressController::class, 'editShippingAddress'])->name('myaccount-shipping-address-edit');
    Route::post('/myaccount-shipping-address-update', [UserAddressController::class, 'updateShippingAddress'])->name('myaccount-shipping-address-update');

    Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');

});
