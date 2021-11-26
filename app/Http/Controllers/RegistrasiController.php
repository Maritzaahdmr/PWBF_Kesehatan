<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function login(){
        return view('registrasi');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:255',
            'remember_token' => 'required|min:3|max:255',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
       
        user::create($validatedData);

        $request->session()->flash('success','Registrastuin successfull ! Please login');
        
        return redirect('/login');
    }
}
