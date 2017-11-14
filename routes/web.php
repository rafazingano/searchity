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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/quiz', 'QuizController@index')->name('quiz');
Route::get('/quiz/{etapa}', 'QuizController@index')->name('etapa');
Route::post('/quiz/{etapa}', 'QuizController@update')->name('respondendo');
Route::get('/resposta', 'QuizController@resposta')->name('resposta');