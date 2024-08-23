<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Sub\SubAdminController;
use App\Http\Controllers\Sub\SubPosyanduController;
use App\Http\Controllers\Sub\SubAnakController;







Route::controller(AuthController::class)->group(function () {
    Route::get('scan', 'scan');
    Route::post('scan', 'scanStore');
    
    Route::get('/', 'login');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'prosesOrtu');

    Route::get('login-admin', 'loginAdmin');
    Route::post('login-admin', 'prosesAdmin');

    Route::get('login-subadmin', 'loginSubAdmin');
    Route::post('login-subadmin', 'prosesSubAdmin');

    Route::get('logout', 'logout');

});
include 'adminRoute.php';
include 'ortuRoute.php';

Route::prefix('subadmin')->middleware('auth:subadmin')->group(function () {
    Route::controller(SubAdminController::class)->group(function () {
        Route::get('beranda', 'beranda');
        Route::get('imunisasi', 'imunisasi');
        Route::get('imunisasi', 'imunisasi');
        Route::get('profil-akun', 'profilAkun');
        Route::get('profil-akun/update', 'updateProfil');
        Route::get('imunisasi/{imunisasi}/delete', 'destroyImunisasi');
    });


    Route::prefix('master-data')->group(function () {
        Route::controller(SubPosyanduController::class)->group(function () {
            Route::get('data-posyandu', 'index');
            Route::get('data-posyandu/create', 'create');
            Route::post('data-posyandu/create', 'store');
            Route::get('data-posyandu/{posyandu}/detail', 'show');
            Route::put('data-posyandu/{posyandu}/detail', 'update');
            Route::get('data-posyandu/{posyandu}/delete', 'destroy');
        });

        Route::controller(SubAnakController::class)->group(function () {
            Route::get('data-anak', 'index');
        });
    });


});


