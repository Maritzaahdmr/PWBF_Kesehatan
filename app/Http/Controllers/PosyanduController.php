<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posyandu;
use App\Models\Kelurahan;
use App\createposyandu;


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

    public function tambah(){
        $kelurahans = kelurahan::all();
        return view('createposyandu', compact('kelurahans'));
    }

    public function store(Request $request){
        $posyandu = new posyandu; 
        $posyandu->ID_POSYANDU = $request->id_pos;
        $posyandu->ID_KELURAHAN = $request->id_kel;
        $posyandu->NAMA_POSYANDU = $request->Posyandu;
        $posyandu->ALAMAT_POSYANDU = $request->Al_Posyandu;

        if($posyandu->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/posyandu'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createposyandu'
            </script>
            ";
        }


    }

    // method untuk edit data siswa
    public function edit($id){ 
    // mengambil data siswa berdasarkan id yang dipilih
    $posyandu = DB::table('posyandu')->where('ID_POSYANDU',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('editposyandu',['posyandu' => $posyandu]);
    }

    public function update(Request $request){
        // update data siswa
        DB::table('posyandu')->where('ID_POSYANDU',$request->id)->update([
            'ID_KELURAHAN' => $request->id_kel,
            'NAMA_POSYANDU' => $request->Posyandu,
            'ALAMAT_POSYANDU' => $request->Al_Posyandu,

        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/posyandu');
        }
    
}
?>