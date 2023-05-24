<h1>Create Apoteker</h1>

<form action="/apoteker/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
</select><br>
<textarea name="alamat" rows="10"></textarea><br>
<input type="submit" name="submit" value="save" >
</form>