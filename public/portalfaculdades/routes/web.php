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

//Route::post('/findcurso', 'CursoController@findCurso')->name("findCurso");

Route::post('/cursos', 'CursoController@findCurso')->name("findCurso");

//Route::get('/cursos/{id}', 'CursoController@cursoPaginaIndividual')->where('id', '[0-9]+');

//Route::get('/cursoInfo}', 'CursoController@cursoPaginaIndividual')->name("cursoIndividual");


Route::get('/cursoInfo/{id}', 'CursoController@cursoPaginaIndividual')->where('id', '[0-9]+');

Route::get('/compare', 'CursoController@populaDdlComparacao')->name("populaComparacao");

Route::post('/comparacao', 'CursoController@compara')->name("compara");