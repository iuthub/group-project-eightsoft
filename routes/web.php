<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get ('/about', function () {
//    return view('pages.about');
//});

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/home', 'App\Http\Controllers\PagesController@index');
Route::get('/contacts', 'App\Http\Controllers\PagesController@contacts');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('blog', 'App\Http\Controllers\PostsController');
Route::post('blog',\App\Http\Controllers\PostsController::class . '@store');


Route::resource('comments', '\App\Http\Controllers\CommentsController');
Route::post('comments',\App\Http\Controllers\CommentsController::class . '@store');
