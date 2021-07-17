<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\User;
use App\Makul;
Use Alert;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['makul', 'mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
       {
           $user = User::all();
           $makul = Makul::all();
           return view('nilai.create', compact('user', 'makul'));
       }
    public function store(Request $request)
       {

            Nilai::create($request->all());
           alert()->success('Success','Berhasil Menyimpan Data');
           return redirect()->route('nilai');

       }

    public function edit($id)
    {
        $user = User::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'user', 'makul'));
    }

    public function update(request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yeahh Berhasil Mengedit Data', 'Success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
       $nilai = Nilai::find($id);
       $nilai->delete();
       toast('Yeahh Berhasil Menghapus Data', 'Success');
       return redirect()->route('nilai');
    }
   
}