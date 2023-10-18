<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/signin', function () {
    return view('login');
});

Route::post('/signin', function () {
    return view('index');
});
