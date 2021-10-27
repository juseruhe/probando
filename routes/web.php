<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotonesDinamicosController;
use App\Http\Controllers\TablaController;
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

Route::get('botones',[BotonesDinamicosController::class,'index'])->name('botones.index');
Route::post('botones',[BotonesDinamicosController::class,'store'])->name('botones.store');
Route::post('correo',[BotonesDinamicosController::class,'correo'])->name('botones.correo');
Route::get('usuarios',[BotonesDinamicosController::class,'pdf'])->name('descargar.usuarios');
Route::get('excel',[BotonesDinamicosController::class,'excel'])->name('descargar.excel');
Route::post('impotarExcel',[BotonesDinamicosController::class,'importarExcel'])->name('importar.excel');
Route::get('exportarWord',[BotonesDinamicosController::class,'exportarWord'])->name('descargar.word');
Route::post('documento',[BotonesDinamicosController::class,'correoPdf'])->name('correo.pdf');

Route::get('tabla',[TablaController::class,'index'])->name('tabla.index');
Route::get('datatable',[TablaController::class,'datatable'])->name('tabla.datatable');
Route::get('data',[TablaController::class,'data'])->name('data.index');