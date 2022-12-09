<?php

use App\Http\Controllers\TareasController;
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
    return view('app');
});
Route::get('/tareas', function () {
    return view('tareas.index');
})->name('tareas');

Route::get('/tareas', [TareasController::class, 'index'])->name('tareas'); //name tiene más peso que 
Route::post('/tareas', [TareasController::class, 'store'])->name('tareas'); //name tiene más peso que 

Route::get('/tareas/{id}', [TareasController::class, 'show'])->name('tareas-show'); //name tiene más peso que 
Route::patch('/tareas', [TareasController::class, 'update'])->name('tareas-update'); //name tiene más peso que 
Route::delete('/tareas', [TareasController::class, 'store'])->name('tareas-destroy'); //name tiene más peso que 

