<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\SlideController;
use App\Http\Controllers\fontend\productController;
use App\Http\Controllers\fontend\CartController;
use App\Http\Controllers\fontend\regController;
use App\Http\Controllers\fontend\loginController;
use App\Http\Controllers\fontend\OrderplaceController;



Route::get('/',[SlideController::class,'showslide'])->name('home.show');
Route::get('/product/{id}',[productController::class,'showproduct'])->name('home.product.show');

//cart controiller
Route::get('/add-to-cart/{id}',[CartController::class,'addtocart'])->name('home.add-to-cart');
Route::get('/addtocart/show',[CartController::class,'showcart'])->name('add-to-cart.show');
Route::get('/addtocart/remove/{id}',[CartController::class,'removecart'])->name('add-to-cart.remove');
Route::post('/addtocart/update',[CartController::class,'updatecart'])->name('add-to-cart.update');


//user reg
Route::get('/register',[regController::class, 'showreg'])->name('reg.show');
Route::post('/register',[regController::class, 'storereg' ])->name('reg.store');

//user login
Route::get('/login',[loginController::class, 'showlogin'])->name('login.show');
Route::post('/login',[loginController::class, 'storelogin' ])->name('login.store');
Route::get('/user/logout',[loginController::class, 'userlogout'])->name('user.logout');


//order place

Route::get('/order-place',[OrderplaceController::class,'orderplace'])->name('user.orderplace.show')->middleware('auth');
Route::post('/order-place/save',[OrderplaceController::class,'saveorderplace'])->name('user.orderplace.save')->middleware('auth');
