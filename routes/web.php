<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjercicioUnoController;
use App\Http\Controllers\EjercicioDosController;
use App\Http\Controllers\EjercicioTresController;
use App\Http\Controllers\EjercicioCuatroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//rutas get
//Route::view('/', 'ejercicio_uno')->name('ejercicio_uno');
Route::get('/', [EjercicioUnoController::class, 'index'])->name('ejercicio_uno');
Route::get('/dos', [EjercicioDosController::class, 'index'])->name('ejercicio_dos');
Route::get('/tres', [EjercicioTresController::class, 'index'])->name('ejercicio_tres');
Route::get('/cuatro', [EjercicioCuatroController::class, 'index'])->name('ejercicio_cuatro');

//rutas de recursos
//Route::resource('/ejercicio_uno',EjercicioUnoController::class);

//rutas post
Route::post('/ejercicio_uno', [EjercicioUnoController::class, 'store'])->name('ejecicioUno.store');
Route::post('/ejercicio_dos', [EjercicioDosController::class, 'importar'])->name('ejecicioDos.importar');
