<?php

use Illuminate\Support\Facades\Route;
use App\Http\BlogController;

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
    return view('home');
});

Route::get('/blog','App\Http\Controllers\BlogController@blog_page');

Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@individual_blog');

Route::get('/{year}', 'App\Http\Controllers\BlogController@yearSelected');