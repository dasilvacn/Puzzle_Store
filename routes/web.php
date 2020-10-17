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

Route::get('/', function () {
    return view('welcome');
});
#--------Admin Paneli------------------------------


#-------------------Main Template------------------------
Route::get('/index','HomeController@index')->name('index.main');
Route::get('1000pieces','HomeController@thousandPieces')->name('pages.1000pieces');
Route::get('/register-mail','HomeController@mailView');
Route::get('/cart','HomeController@cartView')->name('cart.main');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/admin','AdminController@adminPanel')->name('auth.login');
    Route::get('/home', 'AdminController@indexView');
    Route::get('/admins', 'AdminController@adminsView')->name('yonetimPaneli.admins');
    Route::get('/productAdd','AdminController@productCreateView')->name('product.add');
    Route::post('/urun-kaydet','AdminController@productCreate')->name('product.create');
    Route::get('/sil/{id}', 'AdminController@delete')->where(array('id' => '[0-9]+'));
    Route::get('/silProduct/{id}', 'AdminController@deleteProduct')->where(array('id' => '[0-9]+'));
    Route::get('/users', 'AdminController@usersView')->name('yonetimPaneli.users');
    Route::get('/category', 'AdminController@categoryView')->name('yonetimPaneli.categoryManagement');
    Route::get('/productsList', 'AdminController@productsView')->name('yonetimPaneli.productsList');
    Route::get('/orders', 'AdminController@ordersView')->name('yonetimPaneli.orders');
    Route::get('/adminRegister','AdminController@register')->name('yonetimPaneli.register');

});


Auth::routes();

#----registerdan geldi

