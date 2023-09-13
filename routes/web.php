<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EscritorioController;
use App\Http\Controllers\LineaAmericanaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\OrigenDestinoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TipoRemolqueController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return redirect('escritorio'); });
Route::get('escritorio', EscritorioController::class)->name('escritorio.index');
Route::resource('clientes', ClienteController::class);
Route::resource('lineas_americanas', LineaAmericanaController::class)->parameters(['lineas_americanas' => 'lineaAmericana']);
Route::resource('movimientos', MovimientoController::class);
Route::resource('origenes_destinos', OrigenDestinoController::class)->parameters(['origenes_destinos' => 'origenDestino']);
Route::resource('propietarios', PropietarioController::class);
Route::resource('rutas', RutaController::class);
Route::resource('tipos_remolque', TipoRemolqueController::class)->parameters(['tipos_remolque' => 'tipoRemolque']);
