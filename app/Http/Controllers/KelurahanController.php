<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kelurahan;
use App\Models\kecamatan;
use App\Models\trashkecamatan;
use App\createkelurahan;

class KelurahanController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $kelurahan = DB::table('kelurahan')->where('DELETED_AT',null)->simplePaginate(4);

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

    // method untuk edit data siswa
    public function edit($id){ 
    // mengambil data siswa berdasarkan id yang dipilih
    $kelurahan = DB::table('kelurahan')->where('ID_KELURAHAN',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('editkelurahan',['kelurahan' => $kelurahan]);
    }

    public function update(Request $request){
        // update data siswa
        DB::table('kelurahan')->where('ID_KELURAHAN',$request->id)->update([
            'ID_KECAMATAN' => $request-> id_kec,
            'KELURAHAN' => $request->Kelurahan,
        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/kelurahan');
        }

    // public function delete($id){
    //     // menghapus data siswa berdasarkan id yang dipilih
    //     DB::table('kelurahan')->where('ID_KELURAHAN',$id)->delete();
        
    //     // alihkan halaman ke halaman siswa
    //     return redirect('/kelurahan');
    //     }

    public function hapus($id){
        date_default_timezone_set('Asia/Jakarta');
    	DB::table('kelurahan')->where('ID_KELURAHAN',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
 
    	return redirect('/kelurahan');
    }

    public function printkelurahan(){
        //ambil data dari table kelurahan
        $kelurahan = DB::table('kelurahan')->where('DELETED_AT',null)->get();

        // mengirim data ke view kelurahan
        return view('printkelurahan', [
            'data' => $kelurahan
        ]);        
    }

    public function trash()
    {
    // mengampil data guru yang sudah dihapus
    $kelurahans = kelurahan::onlyTrashed()->get();
    return view('trashkelurahan', ['kelurahan' => $kelurahans]);
    }


    public function restore($id = null){
            if($id != null){
                $kelurahans = kelurahan::onlyTrashed()
                    ->where('ID_KELURAHAN', $id)
                    ->restore();
            }else{
                $kelurahans = kelurahan::onlyTrashed()->restore();
            }
            return redirect('trashkelurahan');
    }

}
?>