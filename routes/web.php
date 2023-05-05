<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// For Frontend Design
Route::get('/',[FrontendController::class, 'index'])->name('frontend.home');
Route::get('/story',[FrontendController::class, 'story'])->name('frontend.story');
Route::get('/menu',[FrontendController::class, 'menu'])->name('frontend.menu');
Route::get('/news',[FrontendController::class, 'news'])->name('frontend.news');
Route::get('/contact',[FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/newsdetails',[FrontendController::class, 'newsdetails'])->name('frontend.newsdetails');

// For Backend Design
Route::get('/dashboard',[BackendController::class,'index'])->name('backend.dashboard');


// For Product

Route::controller(ProductController::class)->group(function(){

    Route::get('/product','index')->name('backend.product');
    Route::post('/addproduct','addProduct')->name('backend.addProduct');

    Route::get('/manageproduct','manageP')->name('backend.manageProduct');

    Route::get('/activeproduct/{id}','activeP')->name('activeProduct');

    Route::get('/inactiveproduct/{id}','inactiveP')->name('inactiveProduct');
    Route::get('/deleteproduct/{id}','deleteProduct')->name('deleteProduct');

    Route::get( '/editproduct/{id}','editProduct')->name('editProduct');
    Route::post( '/updateproduct/{id}','updateProduct')->name('updateProduct');
});

