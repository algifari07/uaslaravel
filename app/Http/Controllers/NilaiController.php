<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Http\Request;
Use Alert;

class NilaiController extends Controller
{

    public function index()
    {
        $nilai = Nilai::with('matkul', 'mahasiswa')->get(); //select * from mahasiswa
        return view('nilai.index', compact('nilai'));
    }

    public function add()
    {
        $matkul = Matkul::all(); //select * from mahasiswa
        $mahasiswa = Mahasiswa::with('user')->get()->sortBy('user.name'); //select * from mahasiswa
        return view('nilai.create', compact('matkul', 'mahasiswa'));
    }

    public function save(Request $request){
        Nilai::create($request->all());
        toast('Selamat! Berhasil menyimpan data','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('nilai');
    }

    public function edit($id){
        $matkul = Matkul::all(); //select * from mahasiswa
        $mahasiswa = Mahasiswa::with('user')->get()->sortBy('user.name'); //select * from mahasiswa
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'matkul', 'mahasiswa'));
    }

    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Selamat! Berhasil mengedit data','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('nilai');
    }

    public function delete(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Selamat! Berhasil menghapus data','success')->autoClose(3000)->hideCloseButton();
        return redirect()->route('nilai');
    }
}
