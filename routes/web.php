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
    return view('front.index');
});

Route::get('/company', 'CompanyController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'perusahaan'], function() {
    Route::get('/', 'CompanyController@browse')->name('Company_index');
    Route::get('/tambah', 'CompanyController@input')->name('Company_input');
    Route::post('/', 'CompanyController@add')->name('Company_save');
    Route::get('/{id}', 'CompanyController@read')->name('Company_read');
    Route::patch('/{id}', 'CompanyController@update')->name('Company_edit');
    Route::delete('/{id}', 'CompanyController@delete')->name('Company_delete');
});
Route::group(['prefix' => 'skttk'], function() {
    Route::get('/', 'SkttkController@browse')->name('Skttk_index');
    Route::get('/tambah', 'SkttkController@input')->name('Skttk_input');
    Route::post('/', 'SkttkController@add')->name('Skttk_save');
    Route::get('/{id}', 'SkttkController@read')->name('Skttk_read');
    Route::patch('/{id}', 'SkttkController@update')->name('Skttk_edit');
    Route::delete('/{id}', 'SkttkController@delete')->name('Skttk_delete');
});
Route::group(['prefix' => 'pembangkit'], function() {
    Route::get('/', 'PembangkitController@browse')->name('Pembangkit_index');
    Route::get('/tambah', 'PembangkitController@input')->name('Pembangkit_input');
    Route::post('/', 'PembangkitController@add')->name('Pembangkit_save');
    Route::get('/{id}', 'PembangkitController@read')->name('Pembangkit_read');
    Route::patch('/{id}', 'PembangkitController@update')->name('Pembangkit_edit');
    Route::delete('/{id}', 'PembangkitController@delete')->name('Pembangkit_delete');
});
Route::group(['prefix' => 'laporan'], function() {
    Route::get('/', 'LaporanController@browse')->name('Laporan_index');
    Route::get('/tambah', 'LaporanController@input')->name('Laporan_input');
    Route::post('/', 'LaporanController@add')->name('Laporan_save');
    Route::get('/{id}', 'LaporanController@read')->name('Laporan_read');
    Route::get('/bulk_email/{id}', 'LaporanController@bulkEmail')->name('Laporan_bulk');
    Route::get('/format/{id}', 'LaporanController@format')->name('Laporan_format');
    Route::get('/modal_laporan/{id}', 'LaporanController@modal')->name('Laporan_modal');
    Route::get('/input/{token}', 'LaporanController@input_perusahaan')->name('Laporan_perusahaan');
    Route::patch('/{id}', 'LaporanController@update')->name('Laporan_edit');
    Route::patch('/input/{id}', 'LaporanController@update_perusahaan')->name('Laporan_edit_perusahaan');
    Route::patch('/format/{id}', 'LaporanController@updateFormat')->name('Laporan_edit');
    Route::delete('/{id}', 'LaporanController@delete')->name('Laporan_delete');
});
