<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        if(!session()->has('user')){
            return redirect('/login');
        }
        
        $pengguna = Pengguna::all();

    return view('daftarpengguna', compact('pengguna'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Pengguna::create($request->all()); 
       return redirect('/pengguna');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pengguna::find($id);
        return view('daftarpengguna-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pengguna::find($id);
        return view('daftarpengguna-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pengguna::find($id);
        $data->update($request->all());

        return redirect('/pengguna');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pengguna::find($id);
        $data->delete();

        return redirect('/pengguna');
    }
}
