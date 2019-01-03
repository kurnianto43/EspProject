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


Route::get('/beranda', 'DashboardController@index')->name('dashboard');

Route::middleware('role:admin')->group(function() {

	//route dengan akses role admin

	Route::get('/data-kulkas', 'KulkasController@index')->name('kulkas.index');
	Route::get('/tambah-data/kulkas', 'KulkasController@create')->name('kulkas.create');
	Route::post('/tambah-data-kulkas', 'KulkasController@store')->name('kulkas.store');
	Route::get('/data-kulkass/{kulkas}/edit', 'KulkasController@edit')->name('kulkas.edit');
	Route::patch('/data-kulkas/{kulkas}/edit', 'KulkasController@update')->name('kulkas.update');
	Route::get('/data-instore', 'KulkasController@create_pdf')->name('kulkas.pdf');
	Route::delete('/data-kulkas/{kulkas}/delete', 'KulkasController@destroy')->name('kulkas.delete');
});