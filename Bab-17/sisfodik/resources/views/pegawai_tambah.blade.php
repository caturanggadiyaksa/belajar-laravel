<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data pegawai</title>
</head>
<body>
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD DATA PEGAWAI
            </div>

            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
                <br>
                <br>

                <form action="/pegawai/store" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="nama pegawai">
                    
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="10" placeholder="alamat" class="form-control"></textarea>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>