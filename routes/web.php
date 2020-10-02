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
Route::get('aluno/create', 'AlunoController@create')->name('aluno.create');
Route::get('aluno/{aluno}', 'AlunoController@show')->name('aluno.show');
Route::get('curso/aluno/{aluno}', 'AlunoController@removeCurso')->name('curso.aluno.delete');