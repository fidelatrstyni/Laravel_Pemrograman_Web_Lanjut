@extends('master')

@section('title', 'Tambah Data')

@section('judul_halaman', 'Tambah Data Mahasiswa')

@section('konten')
@extends('layouts.app')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    <br/>
    <br/>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/mahasiswa/simpan" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="namamhs">Nama</label>
            <input type="text" class="form-control" name="namamhs" value="{{ old('namamhs')}}"> <br/>
        </div>
        <div class="form-group">
            <label for="nimmhs">Nim</label>
            <input type="number" class="form-control" name="nimmhs" value="{{ old('nimmhs')}}"> <br/>
        </div>
        <div class="form-group">
            <label for="emailmhs">E-mail</label>
            <input type="email" class="form-control" name="emailmhs" value="{{ old('emailmhs')}}"> <br/>
        </div>
        <div class="form-group">
            <label for="jurusanmhs">Jurusan</label>
            <input type="text" class="form-control" name="jurusanmhs" value="{{ old('jurusanmhs')}}"> <br/>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Tambah">
        </div>
        <!--button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button-->
    </form>
@endsection