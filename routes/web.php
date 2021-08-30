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

Route::get('/', 'HomeController@welcome');
Route::get('/terms', 'HomeController@terms');
Route::post('/form/register',  'HomeController@webinarJam');
Route::get('/event/registered',  'EventController@index');
Route::get('/event/import',  'EventController@import');
Route::post('/event/store',  'EventController@store')->name('import');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
