<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   

    public function showLogin()
    {
        return view('login');
        //diarahkan ke halaman itu (urlnya sama atau url sendiri)
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $savedPassword = session('password', '1122');

        if($username == "nabila" && $password == "$savedPassword") {
            //session itu array, user itu indexnya
            session(['user' => $username]);
            return redirect('/pengguna');
            //diarahkan ulang ke halaman dashboard (urlnya dashboard)
            //redirect diarahkan ulang ke halaman tertentu 
        }else{
            return back()->with('error', 'Username atau Password Salah, Silahkan Cek Kembali');
        }

    }

    public function logout () {
        session()->forget('user');
        return redirect('/login');
    }

}