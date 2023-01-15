<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel</title>
</head>
<body>
    
    <form action="/formulir/proses" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <label for="nama">nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">Alamat</label>
        <input type="text" name="alamat">
        <input type="submit" value="Submit">
    </form>
</body>
</html>