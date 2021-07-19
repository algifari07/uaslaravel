<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    

    public function index()
    {
        $mahasiswa = Mahasiswa::with('user')->get(); //select * from mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function add()
    {
        $user = User::all(); //select * from mahasiswa
        return view('mahasiswa.create', compact('user'));
    }

    public function save(Request $request){
    
        Mahasiswa::create($request->all());
        toast('Selamat! Berhasil menyimpan data','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::all(); //select * from mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id){
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Selamat! Berhasil mengedit data','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('mahasiswa');
    }

    public function delete(Request $request, $id){
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Selamat! Berhasil menghapus data','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('mahasiswa');
    }
}

