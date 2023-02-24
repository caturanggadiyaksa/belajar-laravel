<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD DATA Pegawai - <strong>Edit Data</strong>
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="/pegawai/update/{{ $pegawai->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pegawai->nama }}">
                        @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" id="" cols="30" rows="10" placeholder="alamat" >{{ $pegawai->alamat }}</textarea>
                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-succes" value="simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>