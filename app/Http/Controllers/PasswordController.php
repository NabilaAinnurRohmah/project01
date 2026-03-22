<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function checkUsername(Request $request)
    {
        if($request->username == "nabila"){
            return view('forgot-password',['step'=>'reset']);
        }

        return back()->with('error','Username Tidak Ditemukan');
    }

    public function resetPassword(Request $request)
    {
        session(['password' => $request->password]);

        return redirect('/login')
            ->with('success','Password Berhasil Diganti, Silahkan Login Ulang');
    }
}
