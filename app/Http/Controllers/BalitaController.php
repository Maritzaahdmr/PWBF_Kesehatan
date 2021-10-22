<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BalitaController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $balita = DB::table('balita')->get();

        // mengirim data ke view kelurahan
        return view('balita', [
            'data' => $balita
        ]);
        
    }
}
?>