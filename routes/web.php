<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


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

Route::get('/login', function () {
    return view('login');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/signup', function(){
    return view('signup');
});


Route::post('/signup',[UserController::class,'signUp']);
Route::post('/login', [UserController::class,'login']);
Route::get('/', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class,'detail']);
Route::get('/search', [ProductController::class,'search']);
Route::post('/add_to_cart', [ProductController::class,'addToCart']);
Route::get('cartlist',[ProductController::class,'cartList']);
Route::get('/logout', [UserController::class,'logout']);
Route::get('/cartdelete/{id}', [ProductController::class,'cartDelete']);
Route::get('/ordernow', [ProductController::class,'orderNow']);
Route::post('/ordernow', [ProductController::class,'orderPlace']);
Route::get('/myorders', [ProductController::class,'orders']);

