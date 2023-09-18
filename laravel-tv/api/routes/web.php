<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\videosController;
use App\Http\Controllers\categoriasController;
use App\Http\Controllers\imagenesController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\programasController;
use App\Http\Controllers\programacionController;
use App\Http\Controllers\listaVideosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\modalsController;



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
Route::get('/modals', modalsController::class . '@index')->name('modals');
Route::get('/modals/{id}', [modalsController::class, 'show'])->name('modals-edit');
Route::delete('/modals/{id}', [modalsController::class, 'destroy'])->name('modals-destroy');



Route::get('/modals/create', modalsController::class . '@create')->name('modals.create');
Route::post('/modals', [modalsController::class, 'store']);


Route::get('/staff', indexController::class . '@CargarStaff')->name('staff');
Route::get('/',indexController::class . '@CargarFrontend');
Route::get('/grilla', indexController::class . '@CargarGrilla')->name('grilla');
Route::get('/todos_los_videos', indexController::class . '@devolver_todos_los_videos')->name('todos_los_videos');

Route::get('/obtenervideos/{id}', [indexController::class, 'obtenervideos'])->name('obtenervideos');
Route::get('/admin',loginController::class . '@login')->name('admin');
Route::post('/login',loginController::class . '@autenticar')->name('login');
Route::get('/logout',loginController::class . '@logout')->name('logout');

Route::get('/videos', videosController::class . '@index')->name('videos');
Route::get('/listaVideos', listaVideosController::class . '@index')->name('listaVideos');
Route::get('/listaVideos/create', listaVideosController::class . '@create')->name('listaVideos.create');
Route::get('/listaVideos/{id}', [listaVideosController::class, 'show'])->name('targetas-edit');
Route::patch('/listaVideos/{id}', [listaVideosController::class, 'update'])->name('targetas-update');


Route::post('/listaVideos', [listaVideosController::class, 'store']);
Route::delete('/listaVideos/{id}', [listaVideosController::class, 'destroy'])->name('targeta-destroy');


Route::get('/usuarios', UserController::class . '@index')->name('usuarios');
Route::get('/usuarios/create', UserController::class . '@create')->name('usuarios.create');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('usuarios-edit');
Route::post('/usuarios', [UserController::class, 'store']);
Route::patch('/usuarios/{id}', [UserController::class, 'update'])->name('usuarios-update');
Route::delete('/usuarios-destroy/{id}', [UserController::class, 'destroy'])->name('usuarios-destroy');
Route::get('/categorias', categoriasController::class . '@index')->name('categorias');
Route::get('/categorias/create', categoriasController::class . '@create')->name('categorias.create');
Route::post('/categorias', [categoriasController::class, 'store']);
Route::get('/categorias/{id}', [categoriasController::class, 'show'])->name('categorias-edit');
Route::patch('/categorias/{id}', [categoriasController::class, 'update'])->name('categorias-update');
Route::delete('/categorias/{id}', [categoriasController::class, 'destroy'])->name('categorias-destroy');
Route::get('/imagenes', imagenesController::class . '@index')->name('imagenes');
Route::get('/imagenes/create', imagenesController::class . '@create')->name('imagenes.create');
Route::post('/imagenes', [imagenesController::class, 'store']);
Route::delete('/imagenes/{id}', [imagenesController::class, 'destroy'])->name('imagenes-destroy');
Route::get('/imagenes/{id}', [imagenesController::class, 'show'])->name('imagenes-edit');
Route::patch('/imagenes/{id}', [imagenesController::class, 'update'])->name('imagenes-update');

Route::get('/programas', programasController::class . '@index')->name('programas');
Route::get('/programas/create', programasController::class . '@create')->name('programas.create');
Route::get('/programas/{id}', [programasController::class, 'show'])->name('programas-edit');
Route::patch('/programas/{id}', [programasController::class, 'update'])->name('programas-update');
Route::post('/programas', [programasController::class, 'store']);
Route::delete('/programas/{id}', [programasController::class, 'destroy'])->name('programas-destroy');
Route::delete('/cargarprogramacion-destroy/{id}', [programacionController::class, 'destroy'])->name('cargarprogramacion-destroy');
Route::get('/videos/importar', videosController::class . '@importar')->name('videos.importar');
Route::get('videos/vivo', videosController::class . '@showVivo')->name('videos.vivo');
Route::post('/videos/vivo', [videosController::class, 'vivoguardar'])->name('videos-guardarvivo');






Route::post('/videos/videos-jsonimportado', [videosController::class, 'jsonimportado'])->name('videos-jsonimportado');
Route::post('/programas', [programasController::class, 'store']);
Route::get('/videos/create', videosController::class . '@create')->name('videos.create');
Route::get('/videos/{id}', [videosController::class , 'show'])->name('videos-edit');
Route::patch('/videos/{id}', [videosController::class, 'update'])->name('videos-update');
Route::delete('/videos/{id}', [videosController::class, 'destroy'])->name('videos-destroy');
Route::post('/videos',[videosController::class,'store']);
Route::get('/cargar_programacion', programacionController::class . '@index')->name('cargar_programacion');
Route::post('/cargar_programacion', programacionController::class . '@store')->name('cargar_programacion');
Route::get('/cargar_programacion/create', programacionController::class . '@create')->name('cargar_programacion.create');






