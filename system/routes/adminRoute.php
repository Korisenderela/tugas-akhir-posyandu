<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPegawaiController;
use App\Http\Controllers\Admin\AdminOrangtuaController;
use App\Http\Controllers\Admin\AdminRekamMedisController;
use App\Http\Controllers\Admin\AdminImunisasiController;
use App\Http\Controllers\Admin\AdminJadwalController;
use App\Http\Controllers\Admin\AdminKunjunganController;
use App\Http\Controllers\Admin\AdminProfilPosyanduController;
use App\Http\Controllers\Admin\AdminProfilAkunController;
use App\Http\Controllers\Admin\AdminDaftarController;
use App\Http\Controllers\Admin\AdminLaporanController;
use App\Http\Controllers\Admin\AdminBeritaController;






Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('beranda', 'beranda');
        Route::get('get-anak', 'getAnak');
        Route::get('proses-anak/{anak}', 'prosesAnak');
        Route::get('dashboard-pelayanan', 'berandaPelayanan');
       
        Route::get('meja-1/{rekammedis}', 'meja1');
        Route::put('meja-1/{rekammedis}/meja-1', 'updateMeja1');

        Route::get('meja-2/{rekammedis}', 'meja2');
        Route::put('meja-2/{rekammedis}/meja-2', 'updateMeja2');
        
        Route::get('meja-3/{rekammedis}', 'meja3');
        Route::put('meja-3/{rekammedis}/meja-3', 'updateMeja3');
    });


 Route::controller(AdminBeritaController::class)->group(function () {
        Route::get('berita', 'index');
        Route::get('berita/create', 'create');
        Route::post('berita/create', 'store');
        Route::get('berita/{berita}/delete', 'destroy');
        Route::get('berita/{berita}/edit', 'edit');
        Route::get('berita/{berita}/detail', 'show');
        Route::put('berita/{berita}/edit', 'update');
    });

    Route::prefix('master-data')->group(function () {
        Route::controller(AdminPegawaiController::class)->group(function () {
            Route::get('data-pegawai', 'index');
            Route::get('data-pegawai/create', 'create');
            Route::post('data-pegawai/create', 'store');
            Route::get('data-pegawai/{admin}/edit', 'edit');
            Route::put('data-pegawai/{admin}/edit', 'update');
            Route::get('data-pegawai/{admin}/show', 'show');
            Route::get('data-pegawai/{admin}/delete', 'destroy');
            Route::get('data-pegawai/{admin}/reset-password', 'resetPassword');
        });

        Route::controller(AdminDaftarController::class)->group(function () {
            Route::get('daftar-baru', 'index');
            Route::post('daftar-baru', 'store');
            Route::get('daftar-baru/get-rfid', 'getRfid');
        });

        Route::controller(AdminRekamMedisController::class)->group(function () {
            Route::get('rekam-medis', 'index');
        });

         Route::controller(AdminOrangtuaController::class)->group(function () {
            Route::get('data-orangtua', 'index');
            Route::get('data-orangtua/{anak}/perkembangan', 'perkembangan');
            Route::get('data-orangtua/{anak}/detail', 'show');
            Route::get('data-orangtua/{anak}/edit', 'edit');
            Route::put('data-orangtua/{anak}/edit', 'update');
            Route::get('data-orangtua/{anak}/delete', 'destroy');
        });

        Route::controller(AdminImunisasiController::class)->group(function () {
            Route::get('data-imunisasi', 'index');
            Route::get('data-imunisasi/create', 'create');
            Route::post('data-imunisasi/create', 'store');
            Route::get('data-imunisasi/{imunisasi}/edit', 'edit');
            Route::put('data-imunisasi/{imunisasi}/update', 'update');
            Route::get('data-imunisasi/{imunisasi}/show', 'show');
            Route::get('data-imunisasi/{imunisasi}/delete', 'destroy');
        });
    });



    Route::controller(AdminJadwalController::class)->group(function () {
        Route::get('jadwal-imunisasi', 'index');
        Route::post('jadwal-imunisasi/create', 'store');
        Route::get('jadwal-imunisasi/{jadwal}/delete', 'destroy');
    });

       Route::controller(AdminLaporanController::class)->group(function () {
        Route::get('laporan', 'index');
    });

    Route::controller(AdminKunjunganController::class)->group(function () {
        Route::get('data-kunjungan', 'index');
    });

    Route::controller(AdminProfilPosyanduController::class)->group(function () {
        Route::get('profil-posyandu', 'index');
        Route::get('profil-posyandu/{posyandu}/edit', 'edit');
        Route::put('profil-posyandu/{posyandu}/edit', 'update');
    });

    Route::controller(AdminProfilAkunController::class)->group(function () {
        Route::get('profil-akun', 'index');
        Route::get('profil-akun/update', 'update');
    });

});


