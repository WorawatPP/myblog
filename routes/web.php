<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return csrf_token();
});

Route::get('about', function () {
    return 'About page';
});

Route::get('user/{id?}', function ($id="") {
    return 'User: '.$id;
});

Route::post('product/{name}', function ($name) {
    return 'Product is : '.$name;
});