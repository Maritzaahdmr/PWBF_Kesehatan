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
Route::get('/kecamatan/cari','App\Http\Controllers\KecamatanController@cari');
Route::get('/kelurahan', [kelurahanController::class, 'index'] );

Route::get('/createkelurahan','App\Http\Controllers\KelurahanController@tambah');
Route::post('/kelurahan/store','App\Http\Controllers\KelurahanController@store');
Route::get('/editkelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@edit');
Route::patch('/kelurahan/update{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@update');
// Route::get('/deletekelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@delete');
Route::get('/hapus{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@hapus');
Route::get('/kelurahan/printkelurahan', [kelurahanController::class, 'printkelurahan'] );
Route::get('/kelurahan/cari','App\Http\Controllers\KelurahanController@cari');


Route::get('/posyandu', [PosyanduController::class, 'index'] );

Route::get('/createposyandu','App\Http\Controllers\PosyanduController@tambah');
Route::post('/posyandu/store','App\Http\Controllers\PosyanduController@store');
Route::get('/editposyandu{ID_POSYANDU}','App\Http\Controllers\PosyanduController@edit');
Route::post('/posyandu/update','App\Http\Controllers\PosyanduController@update');
Route::get('/hapusposyandu{ID_POSYANDU}','App\Http\Controllers\PosyanduController@hapus');
Route::get('/posyandu/printposyandu', [PosyanduController::class, 'printposyandu'] );
Route::get('/posyandu/cari','App\Http\Controllers\PosyanduController@cari');

Route::get('/balita', [BalitaController::class, 'index'] );

Route::get('/createbalita','App\Http\Controllers\BalitaController@tambah');
Route::post('/balita/store','App\Http\Controllers\BalitaController@store');
Route::get('/editbalita{ID_BALITA}','App\Http\Controllers\BalitaController@edit');
Route::post('/balita/update','App\Http\Controllers\BalitaController@update');
Route::get('/hapusbalita{ID_BALITA}','App\Http\Controllers\BalitaController@hapus');
Route::get('/balita/cari','App\Http\Controllers\BalitaController@cari');
Route::get('/balita/printbalita', [BalitaController::class, 'printbalita'] );

Route::get('/role', [RoleController::class, 'index'] );
Route::get('/createrole','App\Http\Controllers\RoleController@tambah');
Route::post('/role/store','App\Http\Controllers\RoleController@store');
Route::get('/editrole{ID_ROLE}','App\Http\Controllers\RoleController@edit');
Route::post('/role/update','App\Http\Controllers\RoleController@update');
Route::get('/hapusrole{ID_ROLE}','App\Http\Controllers\RoleController@hapus');

Route::get('/history_posyandu', [History_PosyanduController::class, 'index'] );
Route::get('/createhistory_posyandu','App\Http\Controllers\History_PosyanduController@tambah');
Route::post('/history_posyandu/store','App\Http\Controllers\History_PosyanduController@store');
Route::get('/edithistory_posyandu{ID_HISTORY_POSYANDU}','App\Http\Controllers\History_PosyanduController@edit');
Route::post('/history_posyandu/update','App\Http\Controllers\History_PosyanduController@update');
Route::get('/history_posyandu/printhistory_posyandu', [History_PosyanduController::class, 'printhistory_posyandu'] );

?>