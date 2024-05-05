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

Route::get('/builder', function () {
    return view('builder');
})->name("builder");

Route::get("/", function(){
    return view("public.home");
})->name("public.home");


Route::get('user/dashboard', function(){
    return view("user.dashboard");
})->name("user.dashboard");

Route::get('user/profile', function(){
    return view("user.profile");
})->name("user.profile");

Route::get('user/websites', function(){
    return view("user.website.websites");
})->name("user.website.websites");
