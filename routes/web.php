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

Route::get('/history', function () {
    return view('history');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/','App\Http\Controllers\BlogController@blog_page');

Route::get('/editblog/{id}','App\Http\Controllers\BlogController@edit_blog');

Route::get('/blog','App\Http\Controllers\BlogController@blog_page');

Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@individual_blog');

Route::get('blog/{year}', 'App\Http\Controllers\BlogController@yearSelected');

Route::get('/search', function () {
    return view('search');
});

Route::get('/found','App\Http\Controllers\BlogController@searchBlog');