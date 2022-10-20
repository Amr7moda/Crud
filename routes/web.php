<?php

use App\Models\Product;
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

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');




Route::resource('products', 'App\Http\Controllers\ProductController');
