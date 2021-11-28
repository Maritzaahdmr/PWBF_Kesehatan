<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\History_PosyanduController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

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

Route::get('/index', function () {
    return view('index');
});
// Route::get('/', function () {
//     return view('table');
// });
Route::get('/grafik', function () {
    return view('grafik');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/home', function () {
    return view('grafik');
});
Route::get('/registrasi', function () {
    return view('registrasi');
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
Route::get('/trashkecamatan', 'App\Http\Controllers\KecamatanController@trash');
Route::get('/restorekecamatan{ID_KECAMATAN?}', 'App\Http\Controllers\KecamatanController@restore');
Route::get('/kecamatan/cari','App\Http\Controllers\KecamatanController@cari');
Route::get('/kelurahan', [kelurahanController::class, 'index'] );

Route::get('/createkelurahan','App\Http\Controllers\KelurahanController@tambah');
Route::post('/kelurahan/store','App\Http\Controllers\KelurahanController@store');
Route::get('/editkelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@edit');
Route::patch('/kelurahan/update{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@update');
// Route::get('/deletekelurahan{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@delete');
Route::get('/hapus{ID_KELURAHAN}','App\Http\Controllers\KelurahanController@hapus');
Route::get('/kelurahan/printkelurahan', [kelurahanController::class, 'printkelurahan'] );
Route::get('/trashkelurahan', 'App\Http\Controllers\KelurahanController@trash');
Route::get('/restorekelurahan{ID_KELURAHAN?}', 'App\Http\Controllers\KelurahanController@restore');
Route::get('/kelurahan/cari','App\Http\Controllers\KelurahanController@cari');

Route::get('/posyandu', [PosyanduController::class, 'index'] );

Route::get('/createposyandu','App\Http\Controllers\PosyanduController@tambah');
Route::post('/posyandu/store','App\Http\Controllers\PosyanduController@store');
Route::get('/editposyandu{ID_POSYANDU}','App\Http\Controllers\PosyanduController@edit');
Route::post('/posyandu/update','App\Http\Controllers\PosyanduController@update');
Route::get('/hapusposyandu{ID_POSYANDU}','App\Http\Controllers\PosyanduController@hapus');
Route::get('/kelurahan/printposyandu', [PosyanduController::class, 'printposyandu'] );
Route::get('/trashposyandu', 'App\Http\Controllers\PosyanduController@trash');
Route::get('/restoreposyandu{ID_POSYANDU?}', 'App\Http\Controllers\PosyanduController@restore');
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
Route::get('/trashbalita', 'App\Http\Controllers\BalitaController@trash');
Route::get('/restorebalita{ID_BALITA?}', 'App\Http\Controllers\BalitaController@restore');

Route::get('/role', [RoleController::class, 'index'] );
Route::get('/createrole','App\Http\Controllers\RoleController@tambah');
Route::post('/role/store','App\Http\Controllers\RoleController@store');
Route::get('/editrole{ID_ROLE}','App\Http\Controllers\RoleController@edit');
Route::post('/role/update','App\Http\Controllers\RoleController@update');
Route::get('/hapusrole{ID_ROLE}','App\Http\Controllers\RoleController@hapus');
Route::get('/trashrole', 'App\Http\Controllers\RoleController@trash');
Route::get('/restorerole{ID_ROLE?}', 'App\Http\Controllers\RoleController@restore');

Route::get('/history_posyandu', [History_PosyanduController::class, 'index'] );
Route::get('/createhistory_posyandu','App\Http\Controllers\History_PosyanduController@tambah');
Route::post('/history_posyandu/store','App\Http\Controllers\History_PosyanduController@store');
Route::get('/edithistory_posyandu{ID_HISTORY_POSYANDU}','App\Http\Controllers\History_PosyanduController@edit');
Route::post('/history_posyandu/update','App\Http\Controllers\History_PosyanduController@update');
Route::get('/history_posyandu/printhistory_posyandu', [History_PosyanduController::class, 'printhistory_posyandu'] );
Route::get('/trashhistory_posyandu', 'App\Http\Controllers\History_PosyanduController@trash');
Route::get('/restorehistory_posyandu{ID_HISTORY_POSYANDU?}', 'App\Http\Controllers\History_PosyanduController@restore');

Route::get('/login', [LoginController::class, 'login'] )->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'] );
Route::get('/logout', [LoginController::class, 'logout'] );

Route::get('/registrasi', [RegistrasiController::class, 'login'] );
Route::post('/registrasi','App\Http\Controllers\RegistrasiController@store');
?>