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

// Route::get('/', function () {
//     //return view('welcome');
//     //return 'hello laravel';
//     return View::make('home')
//     ->with('title','首頁')
//     ->with('hello','大家好');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('post/{id}', 'App\Http\Controllers\HomeController@show');