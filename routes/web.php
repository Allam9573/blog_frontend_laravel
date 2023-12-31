<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('index');
});
Route::get('/login', function(){
    return view('auth/login');
});
Route::get('/sign', function(){
    return view('auth/sign');
});
Route::get('/home', function(){
    return view('dashboard/home');
});
Route::get('/edit_profile', function(){
    return view('dashboard/home');
});
Route::get('/posts/create', function(){
    return view('posts/create');
});
