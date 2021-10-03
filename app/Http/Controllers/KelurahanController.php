<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelurahanController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $kelurahan = DB::table('kelurahan')->get();

        // mengirim data ke view kelurahan
        return view('kelurahan', [
            'data' => $kelurahan
        ]);
        
    }
}
?>