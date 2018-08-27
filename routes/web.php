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
