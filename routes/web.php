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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});




Route::get('/user', 'UserController@show')->name('user');


Route::get('/', 'IntroController@show');


Route::get('/about', 'IntroController@edit');
Route::post('/about/create', 'IntroController@create');


Route::get('/services', 'ServicesController@edit');
Route::get('/portfolio', 'PortfolioController@edit');
Route::get('/testimonials', 'TestimonialsController@edit');
Route::get('/team', 'TeamController@edit');
Route::get('/contact', 'ContactController@edit');