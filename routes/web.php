<?php

use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProduksController;
// use App\Http\Controllers\OrderController;
use App\Http\Controllers\KategorisController;
use App\Models\Order;
use App\Models\Produk;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

});

// Route::get('/', [FrontController::class, 'index']);
Route::get('/', function () {
    $produk = Produk::all();
    return view('index', compact('produk'));
});

Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('produk', [FrontController::class, 'produkinfo']);
Route::get('kategori', [FrontController::class, 'kategori']);
// Route::get('order', [FrontController::class, 'order']);

//backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // backnd

    Route::resource('user', App\Http\Controllers\UsersController::class);
    Route::resource('kategori', KategorisController::class);
    Route::resource('produks', ProduksController::class);
    // Route::resource('order', OrderController::class);
});
