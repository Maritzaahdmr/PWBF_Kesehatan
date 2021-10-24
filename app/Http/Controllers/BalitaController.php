<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Balita;
use App\Models\Posyandu;

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

    public function tambah(){
        $posyandus = posyandu::all();
        return view('createbalita', compact('posyandus'));
    }

    public function store(Request $request){
        $balita = new balita;
        $balita->ID_BALITA= $request->id_bal;
        $balita->ID_POSYANDU= $request->id_pos;
        $balita->NAMA_BALITA = $request->balita;
        $balita->NIK_ORANG_TUA= $request->NIK;
        $balita->NAMA_ORANG_TUA= $request->nama;
        $balita->TGL_LAHIR_BALITA= $request->tgl;
        $balita->JENIS_KELAMIN_BALITA= $request->jk;
        $balita->STATUS= $request->status;

        if($balita->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/balita'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createbalita'
            </script>
            ";
        }


    }

}
?>