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
	return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/planes', 'PlanesController@index')->name('planes');
Route::get('/planes/pdf', array('as' => 'pdfview', 'uses' => 'PlanesController@pdfview'));
Route::get('/planes/txt', array('as' => 'txtView', 'uses' => 'PlanesController@txtview'));
Route::get('/planes/types', 'PlanesController@types')->name('planeTypes');
Route::get('/planes/type/{type}', 'PlanesController@type')->name('planeType');
Route::get('/planes/type/job/{type}', 'PlanesController@typePhotoJob');
Route::get('/planes/countries', 'PlanesController@countries')->name('planeCountries');
Route::get('/planes/country/{country}', 'PlanesController@country')->name('planeCountry');
Route::get('/planes/country/job/{countryCode}', 'PlanesController@countryPhotoJob');
Route::get('/planes/list', 'PlanesController@planesList')->name('planesList');

Route::post('/planes/ajax/', 'PlanesController@ajax');
Route::get('/planes/details/{id}', 'PlanesController@details');

Route::get('/planes/search/', 'PlanesController@search')->name('aircraftSearch');
Route::post('/planes/search/', 'PlanesController@search')->name('aircraftSearchPOST');

Route::get('/planes/todo', 'PlanesController@todo')->name('planesTodo');
Route::get('/planes/help', 'PlanesController@help')->name('planesHelp');
