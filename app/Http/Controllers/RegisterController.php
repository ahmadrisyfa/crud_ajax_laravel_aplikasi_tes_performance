<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('template.register');
    }
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'name'=> 'required|max:255',
           'ttl'=> 'required|max:255',
           'jenis_kelamin'=> 'required|max:255',
           'alamat'=> 'required',
           'no_hp'=> 'required|max:255',
           'username' => 'required|unique:users',
           'password'=>'required|min:5|max:255'
       ]) ;

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);
    //    $request->session()->flash('success','registrasi berhasil! silahkan Login');

        return redirect('/login')->with('berhasil_registrasi','registrasi berhasil! silahkan Login');
    }
}
