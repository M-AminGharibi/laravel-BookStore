<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
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


//Route::get('/home', \App\Http\Controllers\HomeController::class,'index');


//Route::get('/home', 'HomeController@index');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/ ', [BookController::class, 'index']);
Route::get('/product/{id}', [BookController::class, 'product']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
