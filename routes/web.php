<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('pages.about');
});
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/catalog/{product}', [ProductController::class, 'card'])->name('card');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost']);

Route::middleware('auth')->group(function (){

    Route::get('/basket', [ProductController::class, 'basket'])->name('basket');
    Route::get('/orders', [ProductController::class, 'orders'])->name('orders');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::middleware('isAdministrator')->group(function (){
        Route::group(['prefix'=>'/admin','as'=>'admin.'],function (){
            Route::get('/', [AdminController::class, 'admin'])->name('panel');
            Route::resource('/products', AdminController::class);
        });
    });
});

