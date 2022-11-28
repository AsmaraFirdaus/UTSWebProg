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
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return view('Book_detail');
});
Route::get('/', function () {
    return view('category_menu');
});
Route::get('/', function () {
    return view('publisher_detail');
});
Route::get('/', function () {
    return view('contact_page');
});
Route::get('/', function () {
    return view('category_page');
});
