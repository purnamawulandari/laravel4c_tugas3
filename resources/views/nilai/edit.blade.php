@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai </div>
                 <div class="card-body">
                   <form method="POST" action="{{ route('update.nilai', $nilai->id)}} ">
                   @csrf
                  
                   <div class="form-group row">
                        <label for="" class="col-md-4 text-md-right">Nama Mahasiswa</label>
                   <div class="col-md-6">
                   <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                            <option value="" disabled selected>Pilih Mahasiswa</option>
                            @foreach ($user as $u)
                            <option value="{{ $u->id }}" > {{$u-> name}} </option>
                            @endforeach
                    </select>   
                </div>
            </div> 

            <div class="form-group row">
                   <label for="" class="col-md-4 text-md-right">Nama Matakuliah</label>
                 <div class="col-md-6">
                 <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                            <option value="" disabled selected>Pilih Matakuliah</option>
                            @foreach ($makul as $mk)
                            <option value="{{ $u->id }}" > {{$u->nama_makul}} </option>
                            @endforeach
                    </select>  
                 </div>
            </div>

             <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right">Nilai</label>
                    <div class="col-md-6">
                   <input type="number" name="nilai" class="form-control" placeholder="Masukan Nilai" maxlength="8">
                </div>
             </div>

            <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right"></label>
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">SAVE</button>
                    <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BACK</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection