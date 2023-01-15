<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan data dari database</title>
</head>
<body>
    <a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>
    <br>

    <table>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->id }}">Edit</a>
                <a href="/pegawai/Hapus/{{ $p->id }}">Hapus</a>
            </td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>