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

Route::get('/index', 'App\Http\Controllers\MainController@controllerMethod');

Route::get('/contact-us', 'App\Http\Controllers\ContactController@controllerMethod');

Route::post('/submitButton', 'ContactController@submit');

Route::any('{slug}', function () {
	return view('main');
});
