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

Route::get('/checkout/{id}', 'TransactionController@checkout')->name('checkout');
Route::post('/checkout/{id}', 'TransactionController@store')->name('addcheckout');

Route::get('/tourcheckout/{id}', 'TransactionController@tourcheckout')->name('tourcheckout');
Route::post('/tourcheckout/{id}', 'TransactionController@tourstore')->name('addtourcheckout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
