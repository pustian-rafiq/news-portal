<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeCategoryController;
use App\Http\Controllers\HomePostDetailsController;
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

Route::get('/', [HomeController::class,'homeIndex']);
Route::get('/category', [HomeCategoryController::class,'homeIndex']);
Route::get('/post-details', [HomePostDetailsController::class,'postIndex']);
