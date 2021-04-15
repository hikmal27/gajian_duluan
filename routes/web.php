<?php

use Illuminate\Support\Facades\Route;

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
    return view('formLogin');
});

Route::post('/loginAwal', 'LoginController@login');

// Admin
Route::post('admin/persetujuan', 'AdminController@persetujuan');
Route::get('/admin/listpengajuan', 'AdminController@listpengajuan');
Route::get('/admin/setuju/{id}', 'AdminController@setuju');
Route::get('/admin/tidaksetuju/{id}', 'AdminController@tidaksetuju');
Route::get('/admin/cair/{id}', 'AdminController@cair');
Route::get('/admin/inputmaster', 'AdminController@inputmaster');
Route::post('/admin/inputmaster/status', 'AdminController@status');
Route::get('/admin/disetujuiadmin', 'AdminController@disetujui');
Route::post('/admin/listpengajuan_filter', 'AdminController@filter');

// BM
Route::get('/bm/listpengajuan', 'BMController@listpengajuan');
Route::get('/bm/setuju/{id}', 'BMController@setuju');
Route::get('/bm/tidaksetuju/{id}', 'BMController@tidaksetuju');
Route::get('/bm/history', 'BMController@history');
Route::post('/bm/persetujuan', 'BMController@persetujuan');

// TAD
Route::get('/tad/inputpengajuan', 'TADController@index');
Route::post('/tad/pengajuan', 'TADController@inputpengajuan');
Route::get('/tad/history', 'TADController@history');



