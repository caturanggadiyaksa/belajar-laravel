<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah</title>
</head>
<body>
    <h3>Data Pegawai</h3>
    <br>

    <a href="/pegawai">Kembali</a>

    <br><br>

    <form action="/pegawai/store" action="POST">
        {{ csrf_field() }}

        nama <input type="text" name="nama">
        <br>
        Jabatan <input type="text" name="jabatan">
        <br>
        umur <input type="number" name="umur">
        <br>
        Alamat <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>