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

Route::get('/', 'PagesController@index');
Route::get('/tujuanpembelajaran', 'PagesController@tujuanpembelajaran');
Route::get('/materi/sistempernapasan', 'PagesController@sistempernapasan');
Route::get('/materi/sistempernapasanhewan', 'PagesController@sistempernapasanhewan');
Route::get('/materi/alatpernapasan/hidung', 'PagesController@alatpernapasanhidung');
Route::get('/materi/alatpernapasan/tenggorokan', 'PagesController@alatpernapasantenggorokan');
Route::get('/materi/alatpernapasan/paruparu', 'PagesController@alatpernapasanparuparu');
Route::get('/materi/alatpernapasan/paruhewan', 'PagesController@alatpernapasanparuhewan');
Route::get('/materi/alatpernapasan/insang', 'PagesController@alatpernapasaninsang');
Route::get('/materi/alatpernapasan/kulit', 'PagesController@alatpernapasankulit');
Route::get('/materi/alatpernapasan/trakea', 'PagesController@alatpernapasantrakea');
Route::get('/materi/alatpernapasan/amfibi', 'PagesController@alatpernapasanamfibi');
Route::get('/materi/gangguanpernapasan', 'PagesController@gangguanpernapasan');
Route::get('/evaluasi', 'EvaluasiController@index');
Route::get('/result', 'ResultController@index');
Route::patch('/evaluasi/{evaluasi}', 'EvaluasiController@update');
Route::patch('/result', 'ResultController@update');
Route::get('/management', 'ManagementController@index');
Route::post('/management', 'ManagementController@store');
