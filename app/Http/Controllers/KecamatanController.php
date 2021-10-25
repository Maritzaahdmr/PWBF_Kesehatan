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
        $kecamatan = DB::table('kecamatan')->where('DELETED_AT',null)->get();

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
    // method untuk edit data kecamatan
    public function edit($id){ 
    // mengambil data kecamatan berdasarkan id yang dipilih
    $kecamatan = DB::table('kecamatan')->where('ID_KECAMATAN',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('editkecamatan',['kecamatan' => $kecamatan]);
    }

    public function update(Request $request){
    // update data siswa
    DB::table('kecamatan')->where('ID_KECAMATAN',$request->id)->update([
        'KECAMATAN' => $request->Kecamatan,
    ]);

    // alihkan halaman ke halaman siswa
    return redirect('/kecamatan');
    }

    // public function delete($id){
    //     // menghapus data siswa berdasarkan id yang dipilih
    //     DB::table('kecamatan')->where('ID_KECAMATAN',$id)->delete();
        
    //     // alihkan halaman ke halaman siswa
    //     return redirect('/kecamatan');
    //     }
    
    
    public function hapus($id){
        date_default_timezone_set('Asia/Jakarta');
    	DB::table('kecamatan')->where('ID_KECAMATAN',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
        
    	return redirect('/kecamatan');
        
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