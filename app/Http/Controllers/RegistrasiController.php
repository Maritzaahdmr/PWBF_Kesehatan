<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\role;
use Illuminate\Support\Str;
class RegistrasiController extends Controller
{
    public function login(){
        $roles = role::all();
    
        return view('registrasi',compact('roles'));
    }

    public function store(Request $request){
        users::create([
            'id' => request('id'),
            'id_role' => request('id_role'),
            'name' => request('name'),
            'email' => request('email'), 
            'password'=>bcrypt($request->password),
            'remember_token' => Str::random(10),
       ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
       
        // user::create($validatedData);

        $request->session()->flash('success','Registrastuin successfull ! Please login');
        
        return redirect('/login');
    }
}
