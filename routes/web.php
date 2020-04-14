<?php

use Illuminate\Support\Facades\Route;
use App\Intro;
use App\Services;
use App\Portfolio;
use App\Testimonials;
use App\Team;

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
    $portfolios = Portfolio::all();
    $testimonials = Testimonials::all();
    $teams = Team::all();
    return view('index', compact('intros', 'services', 'portfolios', 'testimonials', 'teams'));
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
Route::get('/portfolio', 'PortfolioController@show')->name('portfolio');
Route::get('/portfolio/{id}/edit', 'PortfolioController@edit');
Route::post('/portfolio/{id}/update', 'PortfolioController@update');
Route::get('/portfolio/create', 'PortfolioController@create');
Route::post('/portfolio/store', 'PortfolioController@store');
Route::get('/portfolio/{id}/destroy', 'PortfolioController@destroy');

/* TESTIMONIALS EDIT */
Route::get('/testimonials', 'TestimonialsController@show')->name('testimonials');
Route::get('/testimonials/{id}/edit', 'TestimonialsController@edit');
Route::post('/testimonials/{id}/update', 'TestimonialsController@update');
Route::get('/testimonials/create', 'TestimonialsController@create');
Route::post('/testimonials/store', 'TestimonialsController@store');
Route::get('/testimonials/{id}/destroy', 'TestimonialsController@destroy');

/* TEAM EDIT */
Route::get('/team', 'TeamController@show')->name('team');
Route::get('/team/{id}/edit', 'TeamController@edit');
Route::post('/team/{id}/update', 'TeamController@update');
Route::get('/team/create', 'TeamController@create');
Route::post('/team/store', 'TeamController@store');
Route::get('/team/{id}/destroy', 'TeamController@destroy');

/* CONTACT EDIT */
Route::get('/contact', 'ContactController@edit');