<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;

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
Route::get('/kecamatan', [KecamatanController::class, 'index'] );
Route::get('/kelurahan', [kelurahanController::class, 'index'] );
?>