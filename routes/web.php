<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/users',[UserController::class,'index']);

Route::post('/users',[UserController::class,'store']);

Route::post("/users/{id}",[UserController::class,'update']);

Route::delete("/users/{id}",[UserController::class,'destroy']);

Route::get('/orders',[OrderController::class,'index']);

Route::get('/products',[ProductController::class,'index']); 

Route::get('/suppliers',[SupplierController::class,'index']); 

Route::get('/companies',[CompanyController::class,'index']);  

Route::get('/transactions',[TransactionController::class,'index']);  
