<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $savedPassword = session('password', '1122');

        if($username == "nabila" && $password == "$savedPassword") {
            session(['user' => $username]);
            return redirect('/dashboard');
        }else{
            return back()->with('error', 'Username atau Password Salah, Silahkan Cek Kembali');
        }

    }

    public function dashboard() {
        if(!session()->has('user')){
            return redirect('/login');
        }

        return view('/dashboard');
    }

    public function logout () {
        session()->forget('user');
        return redirect('/login');
    }

    public function forgotPassword() {
        return view('forgot-password');
    }

    public function checkUsername (Request $request) {
        if($request->username == "nabila") {
            return view('forgot-password', ['step' => 'reset']);
        }
        return back()->with('error', 'Username Tidak Ditemukan');
    }

    public function resetPassword (Request $request)  {
        session(['password' => $request->password]);
        return redirect('/login')->with('success', 'Password Berhasil Diganti, Silahkan Login Ulang');
    }
}