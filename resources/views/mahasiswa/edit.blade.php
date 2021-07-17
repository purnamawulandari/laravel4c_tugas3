@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>
                 <div class="card-body">
                   <form method="POST" action="{{ route('update.mahasiswa', $mahasiswa->id)}} ">
                   @csrf
                  
                   <div class="form-group row">
                        <label for="" class="col-md-4 text-md-right">Nama Lengkap</label>
                   <div class="col-md-6">
                   <select name="user_id" id="user_id" class="form-control">
                            <option value="" disabled selected>Pilih User</option>
                            @foreach ($user as $u)
                            <option value="{{ $u->id }}" {{ $mahasiswa->user_id == $u->id ? 'selected' : ''}} > {{$u-> name}}
                            @endforeach
                    </select>   
                </div>
            </div> 

            <div class="form-group row">
                   <label for="" class="col-md-4 text-md-right">NPM</label>
                 <div class="col-md-6">
                   <input type="number" name="npm" class="form-control" placeholder="Masukan NPM" maxlength="8" >
                 </div>
            </div>

             <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right">Tempat Lahir</label>
                    <div class="col-md-6">
                   <input type="text" name="tempat_lahir" class="form-control" 
                   placeholder="Masukan Tempat Lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir">
                </div>
             </div>

                <div class="form-group row">
                   <label for="" class="col-md-4 text-md-right">Tanggal Lahir</label>
                   <div class="col-md-6">
                   <input type="date" name="tgl_lahir" class="form-control" 
                   placeholder="Masukan Tanggal Lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir">
                 </div>
             </div>

                <div class="form-group row">
                   <label for="" class="col-md-4 text-md-right">Jenis Kelamin</label>
                   <div class="col-md-6">
                    <select name="gender" id="gender" class="form-control">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="L"{{ $mahasiswa->gender == 'L' ? 'selected' : '' }} >Laki-Laki</option>
                    <option value="P"{{ $mahasiswa->gender == 'P' ? 'selected' : '' }} >Perempuan</option>
                   </select>
            </div>
          </div>
        
          <div class="form-group row">
                   <label for="" class="col-md-4 text-md-right">Telepon</label>
                   <div class="col-md-6">
                   <input type="text" name="telepon" class="form-control" 
                   placeholder="Masukan Nomor Telepon" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon">
                 </div>
             </div>

             <div class="form-group row">
                   <label for="" class="col-md-4 text-md-right">Alamat</label>
                   <div class="col-md-6">
                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" >
                 </div>
             </div>

            <div class="form-group row">
                    <label for="" class="col-md-4 text-md-right"></label>
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">SAVE</button>
                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BACK</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection