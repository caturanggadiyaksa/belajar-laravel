<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h3>edit data pegawai</h3>
    <br>
    <br>

    <a href="/pegawai">Kembali</a>
    <br>
    <br>

    @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}"> <br>

        Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br>

        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br>

        Umur <input type="text" required="required" name="umur" value="{{ $p->umur }}"> <br>
    
        Alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br>

        <input type="submit" value="Simpan Data">

    </form> 
    @endforeach
     
    

</body>
</html>