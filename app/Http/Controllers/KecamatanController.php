<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kecamatan;
use App\Models\trashkecamatan;
use App\createkecamatan;


class KecamatanController extends Controller
{
    public function index(){
        //ambil data dari table kecamatan
        // $kecamatan = Kecamatan::with('Kecamatan')->paginate(5);
        $kecamatan = kecamatan::all();
        $kecamatan = DB::table('kecamatan')->where('DELETED_AT',null)->Paginate(5);

        // mengirim data ke view kecamatan
        return view('kecamatan', [
            'data' => $kecamatan
        ]);
        
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table kelurahan sesuai pencarian data
		$kecamatan = DB::table('kecamatan')
		->where('KECAMATAN','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data kelurahan ke view index
		return view('kecamatan',['data' => $kecamatan]);
 
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
    return redirect('/kecamatan')->with('status','Data Kecamatan berhasil di update!');
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
     
        // menampilkan data guru yang sudah dihapus
        
        public function trash()
        {
    	// mengampil data guru yang sudah dihapus
    	$kecamatans = kecamatan::onlyTrashed()->get();
    	return view('trashkecamatan', ['kecamatan' => $kecamatans]);
        }

    
        public function restore($id = null){
                if($id != null){
                    $kecamatans = kecamatan::onlyTrashed()
                        ->where('ID_KECAMATAN', $id)
                        ->restore();
                }else{
                    $kecamatans = kecamatan::onlyTrashed()->restore();
                }
                return redirect('trashkecamatan');
                // $kecamatans = kecamatan::onlyTrashed()->where('id',$id);
                // $kecamatans->restore();
                
                // return redirect('trashkecamatan');
        }

}
?>