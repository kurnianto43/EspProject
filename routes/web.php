<?php

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

Auth::routes();


//route dengan akses role admin
Route::middleware('role:admin')->group(function() {

	Route::get('/beranda', 'DashboardController@index')->name('beranda');
	Route::get('/edit-profil', 'UserProfilController@editProfil')->name('editProfil');
	Route::post('/edit-profil', 'UserProfilController@updateProfil')->name('updateProfil');

	//route kondisi
	Route::get('/kondisi', 'KondisiController@index')->name('kondisi.index');
	Route::get('/kondisi/tambah-data', 'KondisiController@create')->name('kondisi.create');
	Route::post('/kondisi/tambah-data', 'KondisiController@store')->name('kondisi.store');
	Route::get('/kondisi/{kondisi}/ubah-data', 'KondisiController@edit')->name('kondisi.edit');
	Route::patch('/kondisi/{kondisi}/ubah-data', 'KondisiController@update')->name('kondisi.update');
	Route::delete('/kondisi/{kondisi}/hapus', 'KondisiController@destroy')->name('kondisi.destroy');

	//route tipe
	Route::get('/tipe', 'TipeController@index')->name('tipe.index');
	Route::get('/tipe/tambah-data', 'TipeController@create')->name('tipe.create');
	Route::post('/tipe/tambah-data', 'TipeController@store')->name('tipe.store');
	Route::get('/tipe/{tipe}/ubah-data', 'TipeController@edit')->name('tipe.edit');
	Route::patch('/tipe/{tipe}/ubah-data', 'TipeController@update')->name('tipe.update');
	Route::delete('/tipe/{tipe}/hapus', 'TipeController@destroy')->name('tipe.destroy');


	//route kulkas
	Route::get('/data-kulkas', 'KulkasController@index')->name('kulkas.index');
	Route::get('/tambah-data/kulkas', 'KulkasController@create')->name('kulkas.create');
	Route::post('/tambah-data-kulkas', 'KulkasController@store')->name('kulkas.store');
	Route::get('/data-kulkas/{kulkas}/edit', 'KulkasController@edit')->name('kulkas.edit');
	Route::patch('/data-kulkas/{kulkas}/edit', 'KulkasController@update')->name('kulkas.update');
	Route::delete('/data-kulkas/{kulkas}/delete', 'KulkasController@destroy')->name('kulkas.delete');
	Route::get('/data-instore', 'KulkasController@create_pdf')->name('kulkas.pdf');

	//route suku cadang
	Route::get('/data-suku-cadang', 'SukucadangController@index')->name('sukucadang.index');
	Route::get('/data-suku-cadang/tambah', 'SukucadangController@create')->name('sukucadang.create');
	Route::post('/data-suku-cadang/tambah', 'SukucadangController@store')->name('sukucadang.store');
	Route::get('/data-suku-cadang/{sukucadang}/edit', 'SukucadangController@edit')->name('sukucadang.edit');
	Route::patch('/data-suku-cadang/{sukucadang}/edit', 'SukucadangController@update')->name('sukucadang.update');
	Route::delete('data-suku-cadang/{sukucadang}/delete', 'SukucadangController@destroy')->name('sukucadang.destroy');
	Route::get('/cetak-data-suku-cadang', 'SukucadangController@laporanSukucadang')->name('sukucadang.pdf');

	//route teknisi
	Route::get('/teknisi', 'TeknisiController@index')->name('teknisi.index');
	Route::get('/teknisi/tambah-data', 'TeknisiController@create')->name('teknisi.create');
	Route::post('teknisi/tambah-data', 'TeknisiController@store')->name('teknisi.store');
	Route::get('/teknisi/{teknisi}/edit-data', 'TeknisiController@edit')->name('teknisi.edit');
	Route::patch('/teknisi/{teknisi}/edit-data', 'TeknisiController@update')->name('teknisi.update');
	Route::delete('/teknisi/{teknisi}/hapus', 'TeknisiController@destroy')->name('teknisi.destroy');

	//route jenis perbaikan
	Route::get('/jenis-perbaikan', 'JenisperbaikanController@index')->name('jenisperbaikan.index');
	Route::get('/jenis-perbaikan-tambah', 'JenisperbaikanController@create')->name('jenisperbaikan.create');
	Route::post('/jenis-perbaikan-tambah', 'JenisperbaikanController@store')->name('jenisperbaikan.store');

	//route jenis masalah
	Route::get('/jenismasalah', 'JenismasalahController@index')->name('jenismasalah.index');
	Route::get('/jenismasalah/tambah-data', 'JenismasalahController@create')->name('jenismasalah.create');
	Route::post('/jenismasalah/tambah-data', 'JenismasalahController@store')->name('jenismasalah.store');
	Route::get('/jenismasalah/{jenismasalah}/ubah-data', 'JenismasalahController@edit')->name('jenismasalah.edit');
	Route::patch('/jenismasalah/{jenismasalah}/ubah-data', 'JenismasalahController@update')->name('jenismasalah.update');
	Route::delete('/jenismasalah/{jenismasalah}/hapus', 'JenismasalahController@destroy')->name('jenismasalah.destroy');

	Route::get('/perbaikan', 'PerbaikanController@tambahPerbaikan')->name('tambahPerbaikan');
});