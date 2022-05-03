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