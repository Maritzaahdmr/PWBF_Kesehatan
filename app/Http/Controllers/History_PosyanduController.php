<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\History_Posyandu;
use App\Models\Balita;
use App\Models\trashhistory_posyandu;
use App\createhistory_posyandu;

class History_PosyanduController extends Controller
{
    public function index(){
        //ambil data dari table history
        $history_posyandu = DB::table('history_posyandu')
        ->join('balita', 'balita.ID_BALITA', '=', 'history_posyandu.ID_BALITA')
        ->simplePaginate(4);

        // mengirim data ke view history
        return view('history_posyandu', [
            'data' => $history_posyandu
        ]);
        
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table kelurahan sesuai pencarian data
		$history_posyandu = DB::table('history_posyandu')
        ->join('balita', 'balita.ID_BALITA', '=', 'history_posyandu.ID_BALITA')
		->where('HISTORY_POSYANDU','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data kelurahan ke view index
		return view('history_posyandu',['data' => $history_posyandu]);
 
	}

    public function tambah(){
        $balitas = balita::all();
        return view('createhistory_posyandu', compact('balitas'));
    }

    public function store(Request $request){
        $history_posyandu = new history_posyandu;
        $history_posyandu->ID_HISTORY_POSYANDU= $request->id_his;
        $history_posyandu->ID_BALITA= $request->id_bal;
        $history_posyandu->TGL_POSYANDU = $request->tgl_pos;
        $history_posyandu->BERAT_BADAN_BALITA= $request->bb_bal;
        $history_posyandu->TINGGI_BADAN= $request->tb_bal;

        if($history_posyandu->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/history_posyandu'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createhistory_posyandu'
            </script>
            ";
        }


    }
    // method untuk edit data siswa
    public function edit($id){ 
    // mengambil data siswa berdasarkan id yang dipilih
    $history_posyandu = DB::table('history_posyandu')->where('ID_HISTORY_POSYANDU',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('edithistory_posyandu',['history_posyandu' => $history_posyandu]);
    }

    public function update(Request $request){
        // update data siswa
        DB::table('history_posyandu')->where('ID_HISTORY_POSYANDU',$request->id)->update([
            'ID_BALITA' => $request->id_bal,
            'TGL_POSYANDU' => $request->tgl_pos,
            'BERAT_BADAN_BALITA' => $request->bb_bal,
            'TINGGI_BADAN' => $request->tb_bal,

        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/history_posyandu');
        }
    
        public function hapus($id){
            date_default_timezone_set('Asia/Jakarta');
            DB::table('history_posyandu')->where('ID_HISTORY_POSYANDU',$id)->update([
                'DELETED_AT' => date('Y-m-d H:i:s')
            ]);
     
            return redirect('history_posyandu');
        }
    
 
        public function printhistory_posyandu(){
            //ambil data dari table history
            $history_posyandu = DB::table('history_posyandu')->get();
    
            // mengirim data ke view history
            return view('printhistory_posyandu', [
                'data' => $history_posyandu
            ]);
            
        }

        public function trash()
        {
    	// mengampil data guru yang sudah dihapus
    	$history_posyandus = history_posyandu::onlyTrashed()->get();
    	return view('trashhistory_posyandu', ['history_posyandu' => $history_posyandus]);
        }

    
        public function restore($id = null){
        if($id != null){
            $history_posyandus = history_posyandu::onlyTrashed()
                ->where('ID_HISTORY_POSYANDU', $id)
                ->restore();
        }else{
            $history_posyandus = history_posyandu::onlyTrashed()->restore();
        }
        return redirect('trashhistory_posyandu');
        // $kecamatans = kecamatan::onlyTrashed()->where('id',$id);
        // $kecamatans->restore();
        
        // return redirect('trashkecamatan');
        }

}
?>