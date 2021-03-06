<?php

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
    return view('home');
});

Route::get('/prices', function () {
    return view('prices');
});

Route::get('/booking', function () {
    return view('booking');
});
Route::post('/booking', 'BookingController@book');

Route::get('/about-and-contacts', function () {
    return view('about');
});

Route::get('/analytics', 'AnalyticsController@index');

