<a href="/apoteker/create">Add Apoteker</a>
<table border="1">
    <th>
        <td>NAMA</td>
        <td>JENIS KELAMIN</td>
        <td>ALAMAT</td>
        <td>AKSI</td>
    </th>
    @foreach($apoteker as $a)
    <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->nama}}</td>
        <td>{{$a->jenis_kelamin}}</td>
        <td>{{$a->alamat}}</td>
        <td>
            <a href="/apoteker/{{$a->id}}/edit">Edit</a>
            <from action="/apoteker/{{$a->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </from>
        </td>
    </tr>
    @endforeach
</table>