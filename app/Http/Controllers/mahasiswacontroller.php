<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\User;
Use Alert;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
      public function index()
    {
        $mahasiswa = Mahasiswa::with(['user'])->get(); 
        return view('Mahasiswa.index',compact('mahasiswa'));
    }

    public function create()
    {
         $user = User::all();
         return view('Mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa','user'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('mahasiswa');
    }
}