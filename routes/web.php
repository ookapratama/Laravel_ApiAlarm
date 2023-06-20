<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => '/auth', 'namespace' => 'App\Http\Controllers\Auth'], function() {

    Route::get('/', 'AuthController@login')->name('auth.login');
    

});

Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
    // Route::resource('/mahasiswa', 'MahasiswaController');
    
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/', 'MahasiswaController@index')->name('mahasiswa.index');
        Route::get('/create', 'MahasiswaController@create')->name('mahasiswa.create');
        Route::post('/store', 'MahasiswaController@store')->name('mahasiswa.store');
        Route::get('/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
        Route::put('/update', 'MahasiswaController@update')->name('mahasiswa.update');
        Route::delete('/destroy/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');
    });
    
    Route::prefix('dosen')->group(function () {
        Route::get('/', 'DosenController@index')->name('dosen.index');
        Route::get('/create', 'DosenController@create')->name('dosen.create');
        Route::post('/store', 'DosenController@store')->name('dosen.store');
        Route::get('/edit/{id}', 'DosenController@edit')->name('dosen.edit');
        Route::get('/update', 'DosenController@update')->name('dosen.update');
        Route::get('/destroy/{id}', 'DosenController@destroy')->name('dosen.destroy');
        
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