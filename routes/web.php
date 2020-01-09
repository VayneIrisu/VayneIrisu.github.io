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

/* Home */

Route::get('/' , 'HomeController@home');

Route::get('/about' , function () {
return view('about');
});

/* Tamu */

Route::get('/tamu/index' , 'TamuController@index');
Route::get('/tamu/create' , 'TamuController@create');
Route::get('/tamu/edit' , 'TamuController@edit');
Route::get('/tamu/{bukutamu}' , 'TamuController@show');

Route::post('/tamu/index' , 'TamuController@store');


