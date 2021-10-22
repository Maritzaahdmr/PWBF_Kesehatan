<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kecamatan;
use App\createkecamatan;
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

    public function tambah(){
        return view('createkecamatan');
    }

    public function store(Request $request){
        $kecamatan = new kecamatan; 
        $kecamatan->ID_KECAMATAN = $request->id_kec;
        $kecamatan->KECAMATAN = $request->Kecamatan;

        if($kecamatan->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/kecamatan'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createkecamatan'
            </script>
            ";
        }


    }


        //insert data ke table kecamatan
        // DB::table('kecamatan')->insert([
        //     'ID_KECAMATAN' => $request->id_kecamatan,
        //     'KECAMATAN' => $request->Kecamatan,
        //     'CREATED_AT' => $request->Created_At,
        //     'UPDATED_AT' => $request->Update_At
        // ]);
        // // alihkan halaman ke halaman kecamatan
        // return redirect('/kecamatan');
     
    
    

}
?>