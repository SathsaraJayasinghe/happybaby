<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Models\productModel;

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
Route::get('/home', function () {
    return view('home');
});

Route::post('/loginuser',[productController::class,'loginUser']);
Route::get('/',[productController::class,'products']);
Route::get('/productdetails/{id}',[productController::class,'productDetails']);
Route::post('/addtocart/{id}',[productController::class,'cart']);
Route::get('/cart',[productController::class,'gotoCart']);
Route::get('/removecart/{id}',[productController::class,'removeCart']);
Route::get('/order',[productController::class,'order']);
Route::post('/makeorder',[productController::class,'makeOrder']);
Route::get('/orders',[productController::class,'myOrders']);



