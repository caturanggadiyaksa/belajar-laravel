<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan data dari database</title>

    <style>
        .pagination li{
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>
</head>
<body>
    <a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>
    <br>

    <p>cari data pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari pegawai .." value="{{ old('cari') }}">
        <input type="submit" value="cari">
    </form>

    <table border="1">
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
                <a href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
            </td>
            
        </tr>
        @endforeach
    </table>

    <br>
    Halaman : {{ $pegawai->currentPage() }} <br>
    Jumlah Data : {{ $pegawai->total() }} <br>
    Data per Halaman : {{ $pegawai->perPage() }} <br>


    {{ $pegawai->links() }}
</body>
</html>