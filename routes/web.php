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

Auth::routes();

Route::get('/', 'PropertyController@showProperties')->name('home')->middleware('auth');
Route::get('/home', 'PropertyController@showProperties')->middleware('auth');

Route::get('sign-out', function (){return view('auth.logout');});


