<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\listaImgController;
use App\Http\Controllers\NuevoAController;
use App\Models\Articulos;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ArticulosExport;
use App\Exports\ArticulosImport;

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
Route::get('articulos/export', 'EjemploController@export'); //Export excel
Route::post('articulos/import', 'EjemploController@import'); //Importar excel


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/londres', function () {
    return view('londres');
})->name('londres');

Route::get('/ejemplo', function () {
    return view('ejemplo');
})->name('ejemplo');

Route::get('/listaImg', function () {
    return view('listaImg');
})->name('listaImg');

Route::get('/listado', function () {
    return view('listado');
})->name('listado');

Route::name('getPDF')->get('/getPDF', 'Controller@getPDF');

Route::get('/viaje/{id}', function (Request $request) {
    $viaje = Articulos::find($request->id);
    return view('vistaArticulo')->with('datosViaje', $viaje);
})->name('viaje');


Route::get('/ejemplo', [EjemploController::class, 'index']);
Route::post('/guardar', [EjemploController::class, 'store']);
Route::get('/elimina/{id}',[EjemploController::class, 'elimina']);
Route::get('/edita/{id}',[EjemploController::class, 'muestraDetalle']);
Route::post('/actualiza', [EjemploController::class, 'actualiza']);


Route::get('/nuevoA', [NuevoAController::class, 'index']);
Route::post('/guardar', [NuevoAController::class, 'store']);
Route::get('/elimina/{id}',[NuevoAController::class, 'elimina']);
Route::get('/edita/{id}',[NuevoAController::class, 'muestraDetalle']);
Route::post('/actualiza', [NuevoAController::class, 'actualiza']);

Route::get('/listaImg', [listaImgController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
