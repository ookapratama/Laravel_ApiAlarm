<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tes', function () {
    return "tes route api";
});

Route::group(['prefix' => '/auth', 'namespace' => 'App\Http\Controllers\Auth'], function() {

    Route::get('/', 'AuthController@login')->name('auth.login');
    

});

Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
    Route::resource('/mahasiswa', 'MahasiswaController');
    
    // Route::prefix('mahasiswa')->group(function () {
    //     Route::get('/', 'MahasiswaController@index')->name('index.mahasiswa');
    //     Route::get('/tambah', 'MahasiswaController@tambah')->name('tambah.mahasiswa');
    //     Route::get('/edit', 'MahasiswaController@edit')->name('edit.mahasiswa');
        
    // });

    Route::prefix('dosen')->group(function () {
        Route::get('/', 'DosenController@index')->name('index.dosen');
        Route::get('/tambah', 'DosenController@tambah')->name('tambah.dosen');
        Route::get('/edit', 'DosenController@edit')->name('edit.dosen');
        
    });

    Route::prefix('matakuliah')->group(function () {
        Route::get('/', 'MatkulController@index')->name('index.matakuliah');
        Route::get('/tambah', 'MatkulController@tambah')->name('tambah.matakuliah');
        Route::get('/edit', 'MatkulController@edit')->name('edit.matakuliah');
        
    });
    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminController@form')->name('form.admin');
        Route::get('/tambah', 'AdminController@tambah')->name('tambah.admin');
        Route::get('/edit', 'AdminController@edit')->name('edit.admin');
        
    });

    Route::prefix('jadwal')->group(function () {
        Route::get('/', 'JadwalController@index')->name('index.jadwal');
        Route::get('/tambah', 'JadwalController@tambah')->name('tambah.jadwal');
        Route::get('/edit', 'JadwalController@edit')->name('edit.jadwal');
        
    });

});

