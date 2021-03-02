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
/
/
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('Logout');

Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'auth'])->name('admin');
Route::get('/admin/order', 'App\Http\Controllers\Admin\AdminController@order');
Route::get('/admin/order/big', 'App\Http\Controllers\Admin\AdminController@big_order');
Route::get('/admin/user', 'App\Http\Controllers\Admin\AdminController@see_user');
Route::get('/admin/user/refresh', 'App\Http\Controllers\Admin\AdminController@refresh');
Route::get('/admin/product', 'App\Http\Controllers\Admin\AdminController@see');
Route::post('/admin/product/remove/{id}', 'App\Http\Controllers\Admin\AdminController@remove')->name('Productremove');
Route::get('/admin/product/add', 'App\Http\Controllers\Admin\AdminController@index');
Route::post('/admin/product/add', 'App\Http\Controllers\Admin\AdminController@add');


Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('Catalog');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::put('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('Cart');
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'addorder'])->name('addorder');

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::put('/profil/add-address', [App\Http\Controllers\ProfilController::class, 'add_address'])->name('add_address');
Route::put('/profil/update', [App\Http\Controllers\ProfilController::class, 'update_picture'])->name('update_picture');
