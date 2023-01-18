<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\LibraryController;
use App\Http\Controllers\Site\CadastrarController;
use App\Http\Controllers\Site\VisualizarController;

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

Route::get('/welcome', [LibraryController::class, 'index'])->name('welcome');
Route::get('/formulario', [CadastrarController::class, 'visualizar'])->name('formulario');
Route::get('/visualizar', [VisualizarController::class, 'visualizar'])->name('visualizar');
Route::get('projetos', 'ProjetosController@getIndex');
Route::get('projetos/inserir', 'ProjetosController@getInserir');
Route::post('projetos/inserir', 'ProjetosController@postInserir');
Route::get('projetos/editar/{id}', 'ProjetosController@getEditar');
Route::post('projetos/editar/{id}', 'ProjetosController@postEditar');
Route::post('projetos/deletar/{id}', 'ProjetosController@postDeletar');