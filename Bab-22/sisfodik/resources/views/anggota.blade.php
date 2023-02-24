<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>nama pengguna</th>
                            <th>Hadiah</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($anggota as $a) 
                        <tr>
                            <td>{{ $a->nama }}</td>
                            <td>
                                <ul>
                                    @foreach ($a->hadiah as $h)
                                    <li>{{ $h->nama_hadiah }}</li> 
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $a->hadiah->count() }}</td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>