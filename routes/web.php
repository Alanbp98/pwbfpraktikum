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
    return view('main');
});

Route::get('/login-page.blade.php', function () {
    return view('login-page');
});

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/contact.blade.php', function () {
    return view('contact');
});

Route::get('/one-page.blade.php', function () {
    return view('one-page');
});

Route::get('/services.blade.php', function () {
    return view('services');
});

Route::get('/signup-page.blade.php', function () {
    return view('signup-page');
});

Route::get('/user-page.blade.php', function () {
    return view('user-page');
});