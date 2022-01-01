<?php

namespace App\Http\Controllers;
use App\Models\role;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function index() {
        $users = Users::all();
        $roles = Role::all();
        return view('users',['users' => $users], compact('users','roles'));
    }

    public function create(Request $request){
 
        //insert ke table user
        Users::create([
            'id' => request('id'),
            'id_role' => request('id_role'),
            'name' => request('name'),
            'email' => request('email'), 
            'password'=>bcrypt($request->password),
            'remember_token' => Str::random(10),
       ]);
      
      return redirect ('/users')->with('sukses','Data Berhasil Diinput');
    }
    
}
