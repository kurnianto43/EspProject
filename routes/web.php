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

	//route kulkas
	Route::get('/data-kulkas', 'KulkasController@index')->name('kulkas.index');
	Route::get('/tambah-data/kulkas', 'KulkasController@create')->name('kulkas.create');
	Route::post('/tambah-data-kulkas', 'KulkasController@store')->name('kulkas.store');
	Route::get('/data-kulkas/{kulkas}/edit', 'KulkasController@edit')->name('kulkas.edit');
	Route::patch('/data-kulkas/{kulkas}/edit', 'KulkasController@update')->name('kulkas.update');
	Route::get('/data-instore', 'KulkasController@create_pdf')->name('kulkas.pdf');
	Route::delete('/data-kulkas/{kulkas}/delete', 'KulkasController@destroy')->name('kulkas.delete');

	//route suku cadang
	Route::get('/data-suku-cadang', 'SukucadangController@index')->name('sukucadang.index');
	Route::get('/data-suku-cadang/tambah', 'SukucadangController@create')->name('sukucadang.create');
	Route::post('/data-suku-cadang/tambah', 'SukucadangController@store')->name('sukucadang.store');
	Route::get('/data-suku-cadang/{sukucadang}/edit', 'SukucadangController@edit')->name('sukucadang.edit');
	Route::patch('/data-suku-cadang/{sukucadang}/edit', 'SukucadangController@update')->name('sukucadang.update');
	Route::delete('data-suku-cadang/{sukucadang}/delete', 'SukucadangController@destroy')->name('sukucadang.destroy');
});