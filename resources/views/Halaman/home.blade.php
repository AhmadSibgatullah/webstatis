<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang {{$nama}} {{$alamat}}</h1>
    <p>jenis kelamin = 
        @if($jeniskelamin === 1 )
            laki - Laki
        @else
            Perempuan
        @endif
    </p>
</body>
</html>