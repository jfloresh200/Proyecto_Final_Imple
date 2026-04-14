<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('menu');
    })->name('menu');

    // ── Clientes: todos los roles ────────────────────────────────────
    Route::middleware('role:administrador,encargado,clientela')->group(function () {
        Route::resource('/clientes', 'App\Http\Controllers\ClienteController');
        Route::get('/clientes/{id}/desactivar', 'App\Http\Controllers\ClienteController@desactivar');
        Route::get('/clientes/{id}/activar',    'App\Http\Controllers\ClienteController@activar');
    });

    // ── Coches: todos los roles ──────────────────────────────────────
    Route::middleware('role:administrador,encargado,clientela')->group(function () {
        Route::resource('/coches', 'App\Http\Controllers\CocheController');
    });

    // ── Alquileres: administrador y encargado ────────────────────────
    Route::middleware('role:administrador,encargado')->group(function () {
        Route::get('/alquileres/finalizados', 'App\Http\Controllers\AlquilerController@finalizados');
        Route::resource('/alquileres', 'App\Http\Controllers\AlquilerController');
        Route::put('/alquileres/{id}/finalizar', 'App\Http\Controllers\AlquilerController@finalizar');
    });

    // ── Oficinas: solo administrador ─────────────────────────────────
    Route::middleware('role:administrador')->group(function () {
        Route::resource('/oficinas', 'App\Http\Controllers\OficinaController');
        Route::get('/oficinas/{id}/desactivar', 'App\Http\Controllers\OficinaController@desactivar');
        Route::get('/oficinas/{id}/activar',    'App\Http\Controllers\OficinaController@activar');
    });
});
