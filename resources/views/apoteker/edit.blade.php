<h1>Edit Data Apoteker</h1>

<form action="/apoteker/{{$apoteker->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{$apoteker->nama}}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($apoteker->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P"@if($apoteker->jenis_kelamin == "P") selected @endif>Perempuan</option>
</select><br>
<textarea name="alamat" rows="10">{{$apoteker->alamat}}</textarea><br>
<input type="submit" name="submit" value="update" >
</form>