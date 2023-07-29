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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [BookController::class, 'index'])->name('root');
Route::get('/product/{id}', [BookController::class, 'product']);
Route::get('/compareproduct', [BookController::class, 'compareproduct']);
Route::get('/compare_product', [BookController::class, 'compare_product'])->name('compare_product');
Route::get('/updates/{id}', [BookController::class, 'update_get'])->name('update_get');
Route::POST('/add_product', [BookController::class, 'add_product'])->name('add_product');
Route::POST('/updates/{id}', [BookController::class, 'updates'])->name('updates');
Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');

Auth::routes();

