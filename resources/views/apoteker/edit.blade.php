@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Data Apoteker</h1>

    <form action="/apoteker/store" method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$apoteker->nama}}">
    
  </div>

            @csrf
            
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($apoteker->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($apoteker->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select><br>
            <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="10">{{$apoteker->alamat}}</textarea><br>
    </div>
        <input type="submit" name="submit" class="btn btn-info" value="Update" >

        </form>
</div>

@endsection