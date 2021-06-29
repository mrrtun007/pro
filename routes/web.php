<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class,'index']);

  
Route::resource('products', ProductController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/user',[UserController::class,'users']);


Route::middleware(['auth:sanctum', 'verified'])->get('/item', function () {
    return view('item');
})->name('item');