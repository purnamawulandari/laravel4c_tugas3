@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                    <div class="pull-class">
                <a href="{{route('tambah.nilai') }}" class="btn btn-sm btn-primary float-right">TAMBAH DATA</a>
                </div>
            </div>
                <div class="card-body">
                  <div class="table-respon">
                  <table class="table table-bordered">
                    <tr>
                        <th>NO.></th>
                        <th>NPM</th>
                        <th>NAMA LENGKAP</th>
                        <th>NAMA MATA KULIAH</th>
                        <th>SKS</th>
                        <th>NILAI</th>
                        <th>AKSI</th>
                    </tr>
                    
                    @php 
                        $id = 1;
                    @endphp

                    @foreach ($nilai as $nil)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $nil->mahasiswa->npm }}</td>
                        <td>{{ $nil->mahasiswa->user->name }}</td>
                        <td>{{ $nil->makul->nama_makul}}</td>
                        <td>{{ $nil->makul->sks}}</td>
                        <td>{{ $nil->nilai}}</td>
                        <td>
                            <a href="{{route('edit.nilai', $mhs->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                            <a href="{{route('hapus.nilai', $mhs->id)}}"class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>

                    @endforeach
                  </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection