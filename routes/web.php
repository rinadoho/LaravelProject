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

Route::get('/','PagesController@home');

Route::get('/contact', 'PagesController@contact' );

Route::get('/about', 'PagesController@about');

//---------------this---------------
//Route::get('/personas', 'PersonasController@index');
//Route::get('/personas/{persona}/edit', 'PersonasController@edit');
//Route::get('/personas/create', 'PersonasController@create');
//Route::get('/personas/{persona}', 'PersonasController@show');
//Route::post('/personas', 'PersonasController@store');
//Route::patch('/personas/{persona}', 'PersonasController@update');
//Route::delete('/personas/{persona}', 'PersonasController@destroy');

//----------is equivalnt to this------------

Route::resource('personas', 'PersonasController');

Route::patch('/attributes/{attribute}', 'PersonaAttrController@update');
Route::delete('/attributes/{attribute}', 'PersonaAttrController@destroy');
Route::post('/personas/{persona}/attributes/', 'PersonaAttrController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
