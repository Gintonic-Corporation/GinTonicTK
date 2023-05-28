<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\BorrowController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('search');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/borrow/instantReturn/{borrow}', [BorrowController::class, 'instantReturn']);
Route::get('/borrow/fail', function () {
    return view('borrow.fail');
});
Route::post('/customer/search', [CustomerController::class, 'search']);
Route::post('/film/search', [FilmController::class, 'search']);
Route::get('/film/result/{selectedTitle}-{selectedDirector}', [FilmController::class, 'result']);

// Route::post('/login', 'LoginController@login');
Route::resource('customer', CustomerController::class);
Route::resource('film', FilmController::class);
Route::resource('borrow', BorrowController::class);
