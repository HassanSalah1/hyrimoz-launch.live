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

Route::get('/', 'HomeController@day1');
Route::get('/event-1', 'HomeController@day1');
Route::get('/event-2', 'HomeController@day2');
Route::get('/event-3', 'HomeController@day3');

Route::get('/terms', 'HomeController@terms');

Route::post('/form/register/1',  'HomeController@dayOneStore');
Route::post('/form/register/2',  'HomeController@dayTwoStore');
Route::post('/form/register/3',  'HomeController@dayThreeStore');

Route::get('/event/registered/{day}',  'EventController@index');

Route::get('/event/import',  'EventController@import');
Route::post('/event/store',  'EventController@store')->name('import');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
