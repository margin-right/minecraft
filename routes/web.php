<?php

use App\Http\Controllers\ChatController;
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

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');

Route::get('/registration', 'App\Http\Controllers\PagesController@registration')->name('registration');
Route::post('/registration', 'App\Http\Controllers\AuthController@AddUser');

Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@Login');

Route::get('/logout', 'App\Http\Controllers\AuthController@Logout')->name('logout');

Route::get('/catalog', 'App\Http\Controllers\PagesController@catalog')->name('catalog');
Route::get('/catalog/{id}', 'App\Http\Controllers\CatalogController@catalog');
Route::get('/item/{id}', 'App\Http\Controllers\CatalogController@ItemView');

Route::post('cart/add', 'App\Http\Controllers\CatalogController@cartAdd');
Route::get('/cart/del/{id}', 'App\Http\Controllers\CatalogController@cartDel');
Route::get('/cart', 'App\Http\Controllers\CatalogController@orderView')->name('order');

Route::post('/order/create', 'App\Http\Controllers\CatalogController@orderCreate');
Route::get('/orders', 'App\Http\Controllers\PagesController@orders')->name('orders');

Route::get('/order/del/{id}', 'App\Http\Controllers\CatalogController@orderDel');
Route::get('/link', 'App\Http\Controllers\CommandsController@link')->name('link');

Route::get('/admin', 'App\Http\Controllers\AdminController@Menu')->middleware('admin.confirm')->name('admin');
Route::post('/admin/item/del', 'App\Http\Controllers\AdminController@ItemDel')->middleware('admin.confirm');
Route::post('/admin/item/edit', 'App\Http\Controllers\AdminController@ItemEdit')->middleware('admin.confirm');
Route::post('/admin/item/add', 'App\Http\Controllers\AdminController@ItemAdd')->middleware('admin.confirm');

Route::post('/admin/order/cancel', 'App\Http\Controllers\AdminController@OrderCancel')->middleware('admin.confirm');
Route::post('/admin/order/accept', 'App\Http\Controllers\AdminController@OrderAccept')->middleware('admin.confirm');
Route::post('/admin/order/process', 'App\Http\Controllers\AdminController@OrderProcess')->middleware('admin.confirm');
