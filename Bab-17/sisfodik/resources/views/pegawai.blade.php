<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD DATA PEGAWAI 
            </div>
            <div class="card-body">
                <a href="/pegawai/tambah">Input pegawai Baru</a>
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $p) 
                         <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <a href="/pegawai/edit" class="btn btn-warning">Edit</a>
                                <a href="/pegawai/hapus" class="btn btn-danger">Hapus</a>
                            </td>
                         </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <h1>data pegawai</h1>

    <ul>

        @foreach ($pegawai as $p) 
        <li>
            {{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}
        </li>
        @endforeach
    </ul>
</body>
</html>