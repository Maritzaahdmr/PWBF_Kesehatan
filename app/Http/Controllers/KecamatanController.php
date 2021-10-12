<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{
    public function index(){
        //ambil data dari table kecamatan
        $kecamatan = DB::table('kecamatan')->get();

        // mengirim data ke view kecamatan
        return view('kecamatan', [
            'data' => $kecamatan
        ]);
        
    }

    public function create(){
        return view('kecamatan.create');
    }


}
?>