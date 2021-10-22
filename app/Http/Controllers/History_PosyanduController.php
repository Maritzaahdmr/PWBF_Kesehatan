<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class History_PosyanduController extends Controller
{
    public function index(){
        //ambil data dari table history
        $history_posyandu = DB::table('history_posyandu')->get();

        // mengirim data ke view history
        return view('history_posyandu', [
            'data' => $history_posyandu
        ]);
        
    }

 


}
?>