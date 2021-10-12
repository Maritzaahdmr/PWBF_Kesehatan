<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PosyanduController extends Controller
{
    public function index(){
        //ambil data dari table posyandu
        $posyandu = DB::table('posyandu')->get();

        // mengirim data ke view kelurahan
        return view('posyandu', [
            'data' => $posyandu
        ]);
        
    }
}
