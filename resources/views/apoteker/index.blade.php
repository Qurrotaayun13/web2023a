@extends('layouts.master')

@section('content')
    <div class="container">
    <a  class="btn btn-primary" href="/apoteker/create">Add Apoteker</a>
        <table class="table table-hover">
            <th>
                <td>NAMA LENGKAP</td>
                <td>JENIS KELAMIN</td>
                <td>ALAMAT</td>
                <td>UPDATE</td>
            </th>
            @foreach($apoteker as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->nama}}</td>
                <td>{{$a->jenis_kelamin}}</td>
                <td>{{$a->alamat}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/apoteker/{{$a->id}}/edit">Edit</a>
                    <form action="/apoteker/{{$a->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
    
