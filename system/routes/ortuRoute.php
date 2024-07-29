<?php

use App\Http\Controllers\Ortu\OrtuController;
use App\Http\Controllers\Ortu\OrtuAnakController;
use App\Http\Controllers\Ortu\OrtuRekammedisController;
use App\Http\Controllers\Ortu\OrtuProfilController;


Route::middleware('auth:orangtua')->prefix('x')->group(function () {
    Route::controller(OrtuController::class)->group(function () {
        Route::get('beranda', 'beranda');
    });


     Route::controller(OrtuAnakController::class)->group(function () {
        Route::get('data-anak', 'index');
        Route::get('data-anak/{anak}/detail', 'show');
    });

      Route::controller(OrtuRekammedisController::class)->group(function () {
        Route::get('rekam-medis', 'index');
        Route::get('rekam-medis/{rekammedis}/detail', 'show');
        Route::get('rekam-medis/{anak}/detail', 'rmAnak');
    });

     Route::controller(OrtuProfilController::class)->group(function () {
        Route::get('profil-akun', 'index');
    });

});


