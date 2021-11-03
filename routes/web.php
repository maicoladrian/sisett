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
    // return view('welcome');
    // return view('auth.login');
    return view('inicio');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas users
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

//rutas rol
Route::get('/rols/create', [App\Http\Controllers\RolController::class, 'create'])->name('rols.create');
Route::post('/rols', [App\Http\Controllers\RolController::class, 'store'])->name('rols.store');
Route::get('/rols', [App\Http\Controllers\RolController::class, 'index'])->name('rols.index');
Route::get('/rols/{rol}/edit', [App\Http\Controllers\RolController::class, 'edit'])->name('rols.edit');
Route::put('/rols/{rol}', [App\Http\Controllers\RolController::class, 'update'])->name('rols.update');

//rutas publicaciones
Route::get('/publicaciones/create', [App\Http\Controllers\PublicacionController::class, 'create'])->name('publicaciones.create');
Route::post('/publicaciones', [App\Http\Controllers\PublicacionController::class, 'store'])->name('publicaciones.store');
Route::get('/publicaciones', [App\Http\Controllers\PublicacionController::class, 'index'])->name('publicaciones.index');
Route::get('/publicaciones/{publicacion}', [App\Http\Controllers\PublicacionController::class, 'show'])->name('publicaciones.show');

//rutas lugares
Route::get('/lugares/create', [App\Http\Controllers\LugarController::class, 'create'])->name('lugares.create');
Route::post('/lugares', [App\Http\Controllers\LugarController::class, 'store'])->name('lugares.store');
Route::get('/lugares', [App\Http\Controllers\LugarController::class, 'index'])->name('lugares.index');
Route::get('/lugares/{lugar}/edit', [App\Http\Controllers\LugarController::class, 'edit'])->name('lugares.edit');
Route::put('/lugares/{lugar}', [App\Http\Controllers\LugarController::class, 'update'])->name('lugares.update');

//rutas clasificaciones
Route::get('/clasificaciones/create', [App\Http\Controllers\Clasificacion_UEController::class, 'create'])->name('clasificaciones.create');
Route::post('/clasificaciones', [App\Http\Controllers\Clasificacion_UEController::class, 'store'])->name('clasificaciones.store');
Route::get('/clasificaciones', [App\Http\Controllers\Clasificacion_UEController::class, 'index'])->name('clasificaciones.index');

//rutas unidades
Route::get('/unidades/create', [App\Http\Controllers\Unidad_EducativaController::class, 'create'])->name('unidades.create');
Route::post('/unidades', [App\Http\Controllers\Unidad_EducativaController::class, 'store'])->name('unidades.store');
Route::get('/unidades', [App\Http\Controllers\Unidad_EducativaController::class, 'index'])->name('unidades.index');
Route::get('/unidades/{unidad}', [App\Http\Controllers\Unidad_EducativaController::class, 'show'])->name('unidades.show');

//rutas profesores
Route::get('/profesores/create', [App\Http\Controllers\ProfesorController::class, 'create'])->name('profesores.create');
Route::post('/profesores', [App\Http\Controllers\ProfesorController::class, 'store'])->name('profesores.store');
Route::get('/profesores', [App\Http\Controllers\ProfesorController::class, 'index'])->name('profesores.index');
Route::get('/profesores/{profesor}', [App\Http\Controllers\ProfesorController::class, 'show'])->name('profesores.show');

//rutas cargos
Route::get('/cargos/create', [App\Http\Controllers\CargoController::class, 'create'])->name('cargos.create');
Route::post('/cargos', [App\Http\Controllers\CargoController::class, 'store'])->name('cargos.store');
Route::get('/cargos', [App\Http\Controllers\CargoController::class, 'index'])->name('cargos.index');
Route::get('/cargos/{cargo}/edit', [App\Http\Controllers\CargoController::class, 'edit'])->name('cargos.edit');
Route::put('/cargos/{cargo}', [App\Http\Controllers\CargoController::class, 'update'])->name('cargos.update');

//rutas personales
Route::get('/personales/create', [App\Http\Controllers\PersonalController::class, 'create'])->name('personales.create');
Route::post('/personales', [App\Http\Controllers\PersonalController::class, 'store'])->name('personales.store');
Route::get('/personales', [App\Http\Controllers\PersonalController::class, 'index'])->name('personales.index');
Route::get('/personales/{personal}', [App\Http\Controllers\PersonalController::class, 'show'])->name('personales.show');
Route::get('/personales/{personal}/edit', [App\Http\Controllers\PersonalController::class, 'edit'])->name('personales.edit');
Route::put('/personales/{personal}', [App\Http\Controllers\PersonalController::class, 'update'])->name('personales.update');

//rutas horarios
Route::get('/horarios/create', [App\Http\Controllers\HorarioController::class, 'create'])->name('horarios.create');
Route::post('/horarios', [App\Http\Controllers\HorarioController::class, 'store'])->name('horarios.store');
Route::get('/horarios', [App\Http\Controllers\HorarioController::class, 'index'])->name('horarios.index');

//rutas asistencias
Route::get('/asistencias/create', [App\Http\Controllers\AsistenciaController::class, 'create'])->name('asistencias.create');
Route::post('/asistencias', [App\Http\Controllers\AsistenciaController::class, 'store'])->name('asistencias.store');
Route::get('/asistencias', [App\Http\Controllers\AsistenciaController::class, 'index'])->name('asistencias.index');



//rutas para el control de asistencia
Route::post('/control', [App\Http\Controllers\AsistenciaController::class, 'control'])->name('asistencias.control');

//ruta para inicio despues de registrar asistencia
Route::get('/inicio', function () {
    // return view('welcome');
    // return view('auth.login');
    return view('inicio');
})->name('inicio.control');












