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
Route::get('/visualizar', [VisualizarController::class, 'visualizar'])->name('visualizar')->middleware('auth');
Route::get('/formulario/create', [CadastrarController::class, 'create'])->name('formulario')->middleware('auth');
Route::post('/products', [CadastrarController::class, 'store'])->name('products.store')->middleware('auth');
Route::delete('/formulario/{id}', [CadastrarController::class, 'destroy'])->name('products.destroy')->middleware('auth');
Route::get('/edit/{id}', [CadastrarController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/update/{id}', [CadastrarController::class, 'update'])->name('products.update')->middleware('auth');
 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
