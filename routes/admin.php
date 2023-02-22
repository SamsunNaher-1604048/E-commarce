<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashbordController;
use App\Http\Controllers\backend\sliderController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\loginController;
use App\Http\Controllers\backend\OrderController;



//admin login
 Route::get('/admin',[loginController::class,'adminlogin'])->name('admin.login');
 Route::post('/admin',[loginController::class,'adminchecklogin'])->name('admin.check.login');



Route::middleware('adminauth')->group(function () {
    Route::get('/admin/dashbord',[dashbordController::class,'showDashboard'])->name('dashboard.show');

    //slides route
    Route::get('/admin/slide/show',[sliderController::class,'slideshow'])->name('slide.show');
    Route::get('/admin/slide/create',[sliderController::class,'slidecreate'])->name('slide.create');
    Route::post('/admin/slide/store',[sliderController::class,'slidestore'])->name('slide.store');
    Route::get('/admin/slide/delete/{id}',[sliderController::class,'slidedestory'])->name('slide.destory');
    Route::get('/admin/slide/edit/{id}',[sliderController::class,'slidededit'])->name('slide.edit');
    Route::post('/admin/slide/update/{id}',[sliderController::class,'slideupdate'])->name('slide.update');



    //product section 
    Route::get('/admin/product/show',[productController::class,'producteshow'])->name('product.show');
    Route::get('/admin/product/create',[productController::class,'productcreate'])->name('product.create');
    Route::post('/admin/product/store',[productController::class,'productstore'])->name('product.store');
    Route::get('/admin/product/delete/{id}',[productController::class,'productdestory'])->name('product.destory');
    Route::get('/admin/product/edit/{id}',[productController::class,'productedit'])->name('product.edit');
    Route::post('/admin/product/update/{id}',[productController::class,'productupdate'])->name('product.update');


    ///category
    Route::get('/admin/category/show',[categoryController::class,'categoryshow'])->name('category.show');
    Route::get('/admin/category/create',[categoryController::class,'categorycreate'])->name('category.create');
    Route::post('/admin/category/store',[categoryController::class,'categorystore'])->name('category.store');
    Route::get('/admin/category/delete/{id}',[categoryController::class,'categorydestory'])->name('category.destory');
    Route::get('/admin/category/edit/{id}',[categoryController::class,'categoryedit'])->name('category.edit');
    Route::post('/admin/category/update/{id}',[categoryController::class,'categoryupdate'])->name('category.update');

    Route::get('/admin/logout',[loginController::class,'adminlogout'])->name('admin.logout');


    //order section
    Route::get('/admin/order',[OrderController::class,'showorder'])->name('admin.showorder');
    Route::get('/admin/order/delete/{id}',[OrderController::class,'deleteorder'])->name('admin.order.delete');
    Route::get('/admin/order/edit/{id}',[OrderController::class,'editorder'])->name('admin.order.edit');
    Route::post('/admin/order/update',[OrderController::class,'updateorder'])->name('admin.order.update');

});




