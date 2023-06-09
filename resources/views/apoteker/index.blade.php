@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Data Perekrutan</h1>
        <h4 class="text-center">Anggota Apoteker</h4>
        <a  class="btn btn-primary" href="/apoteker/create">Add Apoteker</a>
        <table class="table table-hover">
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"  type="submit">Logout</button>
            </form>
                </td>
            <tr>
                <th>No</th>
                <th>NAMA LENGKAP</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>UPDATE</th>
            </tr>
            @foreach($apoteker as $a)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->nama}}</td>
                <td>{{$a->jenis_kelamin}}</td>
                <td>{{$a->alamat}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/apoteker/{{$a->id}}/edit">Edit</a><br>
                    <form action="/apoteker/{{$a->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
    
