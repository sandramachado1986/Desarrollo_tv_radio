<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\institucionalController;
use App\Http\Controllers\contactosController;
use App\Http\Controllers\programasController;
use App\Http\Controllers\programacionController;
use App\Http\Controllers\podcastController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\inicio_slideController;

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
Route::get('/usuarios', UserController::class . '@index')->name('usuarios');
Route::get('/usuarios/create', UserController::class . '@create')->name('usuarios.create');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('usuarios-edit');
Route::post('/usuarios', [UserController::class, 'store']);
Route::patch('/usuarios/{id}', [UserController::class, 'update'])->name('usuarios-update');
Route::delete('/usuarios-destroy/{id}', [UserController::class, 'destroy'])->name('usuarios-destroy');


Route::get('/', indexController::class . '@cargar_index');
Route::get('/admin', loginController::class . '@login')->name('admin');
Route::post('/login', loginController::class . '@autenticar')->name('login');
Route::get('/logout', loginController::class . '@logout')->name('logout');
Route::get('/institucional', institucionalController::class . '@index')->name('institucional');
Route::get('/show_institucional', institucionalController::class . '@show')->name('show_institucional');
Route::get('/contactos', contactosController::class . '@index')->name('contactos');
Route::get('/show_contactos', contactosController::class . '@show')->name('show_contactos');
Route::get('/show_programacion', programacionController::class . '@show_programacion')->name('show_programacion');
Route::get('/show_videovivo', programacionController::class . '@show_video_vivo')->name('show_videovivo');
Route::get('/show_podcast', podcastController::class . '@show_podcast')->name('show_podcast');
Route::get('/show_radiovivo', podcastController::class . '@show_radio_vivo')->name('show_radiovivo');
Route::post('/contactos', [contactosController::class, 'store']);
Route::post('/institucional', [institucionalController::class, 'store']);
Route::get('/programas', programasController::class . '@index')->name('programas');

Route::get('/inicio', indexController::class . '@index')->name('inicio');
//inicio_slide_backend
Route::get('/inicio_slide', inicio_slideController::class . '@index')->name('inicio_slide');

Route::get('/inicio_slide/create', inicio_slideController::class . '@create')->name('inicio_slide.create');
Route::get('/inicio_slide/{id}', [inicio_slideController::class, 'show'])->name('inicio_slide-edit');
Route::patch('/inicio_slide/{id}', [inicio_slideController::class, 'update'])->name('inicio_slide-update');
Route::post('/inicio_slide', [inicio_slideController::class, 'store']);
Route::delete('/inicio_slide/{id}', [inicio_slideController::class, 'destroy'])->name('inicio_slide-destroy');


Route::get('/programas/create', programasController::class . '@create')->name('programas.create');
Route::get('/programas/{id}', [programasController::class, 'show'])->name('programas-edit');
Route::get('show_programa_contextual/{id}', [programasController::class, 'show_programa_contextual'])->name('show_programa_contextual');
Route::patch('/programas/{id}', [programasController::class, 'update'])->name('programas-update');
Route::post('/programas', [programasController::class, 'store']);
Route::delete('/programas/{id}', [programasController::class, 'destroy'])->name('programas-destroy');
Route::get('/podcast', podcastController::class . '@index')->name('podcast');
Route::get('/podcast/create', podcastController::class . '@create')->name('podcast.create');
Route::get('/podcast/{id}', [podcastController::class, 'show'])->name('podcast-edit');
Route::patch('/podcast/{id}', [podcastController::class, 'update'])->name('podcast-update');
Route::post('/podcast', [podcastController::class, 'store']);
Route::delete('/podcast/{id}', [podcastController::class, 'destroy'])->name('podcast-destroy');
Route::get('/cargar_programacion', programacionController::class . '@index')->name('cargar_programacion');
Route::post('/cargar_programacion', programacionController::class . '@store')->name('cargar_programacion');
Route::get('/cargar_programacion/create', programacionController::class . '@create')->name('cargar_programacion.create');
Route::delete('/cargarprogramacion-destroy/{id}', [programacionController::class, 'destroy'])->name('cargarprogramacion-destroy');
Route::get('/podcast', podcastController::class . '@index')->name('podcast');










