<?php

/*
|--------------------------------------------------------------------------
| Web  
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/add_student', 'PagesController@add_student')->name('add_student');
Route::post('/add_student', 'PagesController@submit_student')->name('add_student');
Route::get('/generate', 'PagesController@generate')->name('generate_score');
Route::post('/generate', 'PagesController@generate_submit')->name('generate_score');
Route::get('/view_scores', 'PagesController@view_scores')->name('view_scores');
Route::get('/all_user', 'HomeController@allUser')->name('all_user');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug}', 'TicketsController@show');
Route::get('/ticket/{slug}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug}/edit', 'TicketsController@update');
Route::post('/ticket/{slug}/delete', 'TicketsController@destroy');

Auth::routes();

Route::get('/', 'HomeController@index');
//Route::get('/home', 'PagesController@home');
