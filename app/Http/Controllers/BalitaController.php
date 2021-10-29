<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Balita;
use App\Models\Posyandu;
use App\createbalita;

class BalitaController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $balita = DB::table('balita')->where('DELETED_AT',null)->get();

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

    // method untuk edit data siswa
    public function edit($id){ 
    // mengambil data siswa berdasarkan id yang dipilih
    $balita = DB::table('balita')->where('ID_BALITA',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('editbalita',['balita' => $balita]);
    }

    public function update(Request $request){
        // update data siswa
        DB::table('balita')->where('ID_BALITA',$request->id)->update([
            'ID_POSYANDU' => $request->id_pos,
            'NAMA_BALITA' => $request->balita,
            'NIK_ORANG_TUA' => $request->NIK,
            'NAMA_ORANG_TUA' => $request->nama,
            'TGL_LAHIR_BALITA' => $request->tgl,
            'JENIS_KELAMIN_BALITA' => $request->jk,
            'STATUS' => $request->status,


        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/balita');
        }

        public function hapus($id){
            date_default_timezone_set('Asia/Jakarta');
            DB::table('balita')->where('ID_BALITA',$id)->update([
                'DELETED_AT' => date('Y-m-d H:i:s')
            ]);
            
            return redirect('/balita');
            
        }
    

}
?>