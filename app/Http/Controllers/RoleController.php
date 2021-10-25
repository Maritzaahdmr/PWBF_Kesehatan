<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\role;
use App\createrole;

class RoleController extends Controller
{
    public function index(){
        //ambil data dari table role
        $role = DB::table('role')->get();

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
// // method untuk edit data kecamatan
// public function edit($id){ 
// // mengambil data kecamatan berdasarkan id yang dipilih
// $kecamatan = DB::table('kecamatan')->where('ID_KECAMATAN',$id)->get(); 

// // passing data siswa yang didapat ke view edit.blade.php 
// return view('editkecamatan',['kecamatan' => $kecamatan]);
// }

// public function update(Request $request){
// // update data siswa
// DB::table('kecamatan')->where('ID_KECAMATAN',$request->id)->update([
//     'KECAMATAN' => $request->Kecamatan,
// ]);

// // alihkan halaman ke halaman siswa
// return redirect('/kecamatan');
// }

// public function delete($id){
//     // menghapus data siswa berdasarkan id yang dipilih
//     DB::table('kecamatan')->where('ID_KECAMATAN',$id)->delete();
    
//     // alihkan halaman ke halaman siswa
//     return redirect('/kecamatan');
//     }

// }
}