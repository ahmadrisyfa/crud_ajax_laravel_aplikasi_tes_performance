<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() 
    {
        return view('template.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username'=> 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
            $user = Auth::user();
            if ($user->is_admin == 1) {
                return redirect()->intended('/')->with('berhasil','Berhasil Login');
            }
        
            return redirect()->intended('/dashboard_user')->with('berhasil','Berhasil Login');
        }
        return back()->with('LoginError', 'Login gagal, Silahkan Ulangi Lagi');
    }

    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
    }
}
