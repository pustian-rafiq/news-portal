<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Category\CategoryController;
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

Route::group(['as'=>'admin.','prefix'=>'admin','middleware' => 'auth'], function(){

	Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
	//Category Routes here
	Route::get('/category-list',[CategoryController::class, 'index'])->name('category.index');
	Route::get('/category-create',[CategoryController::class, 'createCategory'])->name('category.create');
	Route::get('/category-edit',[CategoryController::class, 'editCategory'])->name('category.edit');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
