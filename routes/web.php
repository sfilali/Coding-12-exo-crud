<?php

use Illuminate\Support\Facades\Route;
use App\Intro;
use App\Services;

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

/* Index */
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    $intros = Intro::all();
    $services = Services::all();
    return view('index', compact('intros', 'services'));
});

/* USER */
Route::get('/user', 'UserController@show')->name('user');

/* INTRO EDIT */
Route::get('/about', 'IntroController@show');
Route::get('/about/edit', 'IntroController@edit')->name('about.edit');
Route::post('/about/create', 'IntroController@create');

/* SERVICES EDIT */
Route::get('/services', 'ServicesController@show')->name('services');
Route::get('/services/{id}/edit', 'ServicesController@edit');
Route::post('/services/{id}/update', 'ServicesController@update');
Route::get('/services/create', 'ServicesController@create');
Route::post('/services/store', 'ServicesController@store');
Route::get('/services/{id}/destroy', 'ServicesController@destroy');


/* PORTFOLIO EDIT */
Route::get('/portfolio', 'PortfolioController@edit');

/* TESTIMONIALS EDIT */
Route::get('/testimonials', 'TestimonialsController@edit');

/* TEAM EDIT */
Route::get('/team', 'TeamController@edit');

/* CONTACT EDIT */
Route::get('/contact', 'ContactController@edit');