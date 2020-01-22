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
Route::get('/', 'QuizController@index');

Route::get('/mysql', 'QuizController@mysql');

Route::get('sqlserver', 'QuizController@sqlserver');

Route::get('oracle', 'QuizController@oracle');

Route::get('postgresql', 'QuizController@postgresql');


Route::any('78dh8adnin2ad', 'QuizController@check');