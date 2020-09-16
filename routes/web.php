<?php

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
Route::get('/home', 'AdminController@indexView');
Route::get('/admins', 'AdminController@adminsView')->name('yonetimPaneli.admins');
Route::get('/adminAdd','AdminController@adminAddView')->name('yonetimPaneli.adminAdd');
Route::post('/adminAdd', 'AdminController@adminAdd');
Route::get('/sil/{id}', 'AdminController@delete')->where(array('id' => '[0-9]+'));
Route::get('/users', 'AdminController@usersView')->name('yonetimPaneli.users');
Route::get('/category', 'AdminController@categoryView')->name('yonetimPaneli.categoryManagement');
Route::get('/productsList', 'AdminController@productsView')->name('yonetimPaneli.productsList');
Route::get('/orders', 'AdminController@ordersView')->name('yonetimPaneli.orders');
Route::get('adminRegister','AdminController@register')->name('yonetimPaneli.register');

#-------------------Main Template------------------------
Route::get('/index','HomeController@index');

Auth::routes();
#----registerdan geldi

