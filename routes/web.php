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
    return view('welcome');
});

Route::get('/ourPhotographers', 'viewPhotographerController@getAllPhotographerList');

Route::get('/detailPhotographer/{id}', 'viewDetailPhotographerController@getDetailPhotographer');

Route::get('/ourTours', 'viewTourController@getAllTour')->name('viewTour');

Route::get('/ourTours/{id}', 'viewTourDetailController@getTourDetail')->name('viewTourDetail');
