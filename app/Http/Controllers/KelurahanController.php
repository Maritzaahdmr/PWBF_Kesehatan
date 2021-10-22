<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kelurahan;
use App\Models\kecamatan;

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
        
    public function tambah(){
        $kecamatans = kecamatan::all();
        return view('createkelurahan', compact('kecamatans'));
    }

    public function store(Request $request){
        $kelurahan = new kelurahan; 
        $kelurahan->ID_KELURAHAN = $request->id_kel;
        $kelurahan->ID_KECAMATAN = $request->id_kec;
        $kelurahan->KELURAHAN = $request->Kelurahan;

        if($kelurahan->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/kelurahan'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createkelurahan'
            </script>
            ";
        }


    }


}
?>