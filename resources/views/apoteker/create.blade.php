@extends('layouts.master')

@section('content')

<div class="container">
<h1>Create Apoteker</h1>
    <form action="/apoteker/store" method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
    
  </div>

            @csrf
            
            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
        </select><br>
            <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="10" id="alamat"></textarea><br>
    </div>
        <input type="submit" name="submit" class="btn btn-info" value="save" >

        </form>
</div>
    
@endsection