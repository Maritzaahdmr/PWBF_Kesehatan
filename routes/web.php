<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\History_PosyanduController;
use App\Http\Controllers\RoleController;
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
    return view('home');
});
// Route::get('/', function () {
//     return view('table');
// });
Route::get('/', function () {
    return view('grafik');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/agenda', function () {
    return view('agenda');
});
Route::get('/', function () {
    return view('grafik');
});
// Route::get('/kecamatan/create', function () {
//     return view('create');
// });
// Route::get('/', function () {
//     return view('posyandu');
// });
Route::get('/kecamatan', [KecamatanController::class, 'index'] );

Route::get('/createkecamatan','App\Http\Controllers\KecamatanController@tambah');
Route::post('/kecamatan/store','App\Http\Controllers\KecamatanController@store');
Route::get('/editkecamatan{ID_KECAMATAN}','App\Http\Controllers\KecamatanController@edit');
Route::post('/kecamatan/update','App\Http\Controllers\KecamatanController@update');
// Route::get('/deletekecamatan{ID_KECAMATAN}','App\Http\Controllers\KecamatanController@delete');
Route::get('/hapuskecamatan{ID_KECAMATAN}','App\Http\Controllers\KecamatanController@hapus');

Route::get('/kelurahan', [kelurahanController::class, 'index'] );

Route::get('/createkelurahan','App\Http\Controllers\KelurahanController@tambah');
Route::post('/kelurahan/store','App\Http\Controllers\KelurahanController@store');
Route::get('/editkelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@edit');
Route::post('/kelurahan/update','App\Http\Controllers\KelurahanController@update');
// Route::get('/deletekelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@delete');
Route::get('/hapuskelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@hapus');

Route::get('/posyandu', [PosyanduController::class, 'index'] );

Route::get('/createposyandu','App\Http\Controllers\PosyanduController@tambah');
Route::post('/posyandu/store','App\Http\Controllers\PosyanduController@store');
Route::get('/editposyandu{ID_POSYANDU}','App\Http\Controllers\PosyanduController@edit');
Route::post('/posyandu/update','App\Http\Controllers\PosyanduController@update');

Route::get('/balita', [BalitaController::class, 'index'] );
Route::get('/createbalita','App\Http\Controllers\BalitaController@tambah');
Route::post('/balita/store','App\Http\Controllers\BalitaController@store');

Route::get('/role', [RoleController::class, 'index'] );
Route::get('/createrole','App\Http\Controllers\RoleController@tambah');
Route::post('/role/store','App\Http\Controllers\RoleController@store');

Route::get('/history_posyandu', [History_PosyanduController::class, 'index'] );
?>