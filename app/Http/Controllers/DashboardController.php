<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;

class DashboardController extends Controller
{
    public function index()
    {
        if(!session()->has('user')){
            return redirect('/login');
        }

        $data = pengguna::all();

        return view('daftarpengguna', compact('data'));
    }
}

/*public function index()
    {
        if(!session()->has('user')){
            return redirect('/login');
        }

        return view('dashboard');
    }*/
