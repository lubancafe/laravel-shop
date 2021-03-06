<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

// alipay test
Route::get('alipay', function() {
    return app('alipay')->web([
        'out_trade_no' => time(),
        'total_amount' => '1',
        'subject' => 'test subject - 测试',
    ]);
});

Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');

    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');

    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');

    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

    Route::post('cart', 'CartController@add')->name('cart.add');
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

    Route::post('orders', 'OrdersController@store')->name('orders.store');
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');

    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');    
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');    

    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
    Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
    Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');
    Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');      
    
    Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');
});

Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::namespace('Studio')->prefix(config('studio.path'))->group(function () {
    Route::prefix('api')->group(function () {
        Route::prefix('posts')->group(function () {
            Route::get('/', 'PostController@index');
            Route::get('{identifier}/{slug}', 'PostController@show')->middleware('Canvas\Http\Middleware\Session');
        });

        Route::prefix('tags')->group(function () {
            Route::get('/', 'TagController@index');
            Route::get('{slug}', 'TagController@show');
        });

        Route::prefix('topics')->group(function () {
            Route::get('/', 'TopicController@index');
            Route::get('{slug}', 'TopicController@show');
        });

        Route::prefix('users')->group(function () {
            Route::get('{identifier}', 'UserController@show');
        });
    });

    Route::get('/{view?}', 'ViewController')->where('view', '(.*)')->name('studio');
});
