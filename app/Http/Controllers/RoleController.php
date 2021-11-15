<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\role;
use App\Models\trasgrole;
use App\createrole;

class RoleController extends Controller
{
    public function index(){
        //ambil data dari table role
        $role = DB::table('role')->where('DELETED_AT',null)->Paginate(2);

        // mengirim data ke view role
        return view('role', [
            'data' => $role
        ]);
        
}

public function tambah(){
    return view('createrole');
}

public function store(Request $request){
    $role = new role; 
    $role->ID_ROLE = $request->id_role;
    $role->ROLE= $request->Role;

    if($role->save()){
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href='/role'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href='/createrole'
        </script>
        ";
    }
}
     // method untuk edit data siswa
     public function edit($id){ 
        // mengambil data siswa berdasarkan id yang dipilih
        $role = DB::table('role')->where('ID_ROLE',$id)->get(); 
        
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('editrole',['role' => $role]);
        }
    
        public function update(Request $request){
            // update data siswa
            DB::table('role')->where('ID_ROLE',$request->id)->update([
                'ROLE' => $request->Role,
    
            ]);
        
            // alihkan halaman ke halaman siswa
            return redirect('/role');
            }

            public function hapus($id){
                date_default_timezone_set('Asia/Jakarta');
                DB::table('role')->where('ID_ROLE',$id)->update([
                    'DELETED_AT' => date('Y-m-d H:i:s')
                ]);
         
                return redirect('/role');
            }

            public function trash()
        {
    	// mengampil data guru yang sudah dihapus
    	$roles = role::onlyTrashed()->get();
    	return view('trashrole', ['role' => $roles]);
        }

    
        public function restore($id = null){
            if($id != null){
                $kecamatans = role::onlyTrashed()
                    ->where('ID_ROLE', $id)
                    ->restore();
            }else{
                $roles = role::onlyTrashed()->restore();
            }
            return redirect('trashrole');
            
        }
    
}