<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PenggunaController;

Route::get('dashboard',[ DashboardController::class, 'index']);

// prefix pengguna
Route::prefix('pengguna')->group(function(){
Route::controller(PenggunaController::class)->group(function(){
        Route::get('/', 'index');
    });
});



// prefix pegawai

Route::prefix('pegawai')->group(function(){
        Route::controller(PegawaiController::class)->group(function(){
            Route::get('/', 'index');
        });

    });
    