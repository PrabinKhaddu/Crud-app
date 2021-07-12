<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStoreController;
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

Route::post('/addbook',[BookStoreController::class,'create']);

Route::get('/viewbook',[BookStoreController::class,'view']);

Route::get('/deleteBook/{id}',[BookStoreController::class,'delete']);

Route::post('/updatebook/{id}',[BookStoreController::Class,'update']);

Route::get('/editBook/{id}',[BookStoreController::Class,'edit']);