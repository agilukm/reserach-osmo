<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/pembangkit/{id}', function ($id) {
    return \App\Services\Pembangkits\Pembangkit::find($id);
});
Route::get('/pembangkit/perusahaan/{id}', function ($id) {
    return \App\Services\Pembangkits\Pembangkit::where('company_id', $id)->get();
});
Route::get('/pembangkit', function () {
    return \App\Services\Pembangkits\Pembangkit::get();
});

Route::get('/perusahaan/{id}', function ($id) {
    return \App\Services\Companies\Companies::find($id);
});

Route::get('/perusahaan', function () {
    return \App\Services\Companies\Companies::get();
});
Route::get('/perusahaanz', function () {
    return \DB::select('select *, datediff(NOW(), last_updated_time) as different_day from companies left join pembangkit on pembangkit.company_id = companies.id where (datediff(NOW(), last_updated_time) >= 180 OR not exists (select * from laporan where laporan.pembangkit_id = pembangkit.id)) ');
});

Route::get('/skttk/perusahaan/{id}', function ($id) {
    return \App\Services\Skttks\Skttk::where('company_id', $id)->get();
});

Route::get('/skttk/{id}', function ($id) {
    return \App\Services\Skttks\Skttk::find($id);
});

Route::get('/skttk', function () {
    return \App\Services\Skttks\Skttk::get();
});

Route::get('/alert/{id}/{alert}', 'LaporanController@sendAlert');
