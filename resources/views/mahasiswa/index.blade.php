@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <div class="pull-class">
                <a href="{{route('tambah.mahasiswa') }}" class="btn btn-sm btn-primary float-right">TAMBAH DATA</a>
                </div>
            </div>
                <div class="card-body">
                  <div class="table-respon">
                  <table class="table table-bordered">
                    <tr>
                        <th>NO.></th>
                        <th>NAMA LENGKAP</th>
                        <th>NPM</th>
                        <th>TEMPAT, TANGGAL LAHIR</th>
                        <th>JENIS KELAMIN</th>
                        <th>TELPON</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->user->name }}</td>
                        <td>{{ $mhs->npm }}</td>
                        <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                        <td>{{ $mhs->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                        <td>{{ $mhs->telepon}}</td>
                        <td>{{ $mhs->alamat}}</td>
                        <td>
                            <a href="{{route('edit.mahasiswa', $mhs->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                            <a href="{{route('hapus.mahasiswa', $mhs->id)}}"class="btn btn-sm btn-danger">HAPUS</a>
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