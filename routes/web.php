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

Route::resource('aluno', 'aluno\AlunoController');
Route::resource('curso', 'curso\CursoController');
Route::get('certificado/emitir/{aluno_id}', 'certificado\CertificadoController@Emitir')->name('emitir');

Route::group(array('prefix' => 'api'), function()
{

  Route::get('/api', function () {
      return response()->json(['message' => 'API', 'status' => 'Connected']);;
  });

  Route::resource('api_curso', 'api\CursoController');
});