<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravle</title>
</head>
<body>
    <h1>Hai, lagi belajar laravel lagi nih</h1>
    <p>Ada yang mau ikutan ?</p>

    <br>

    <p>Nama : {{ $nama }}</p>

    <p>Mata Pelajaran</p>
    <ul>

        @foreach($matkul as $m)
        <li>{{ $m }}</li>
        @endforeach
    </ul>

    <br>

    <p>Keahlian </p>
        <ul>
            @foreach($keahlian as $s)
            <li>{{ $s }}</li>
            @endforeach
        </ul>
   
    
</body>
</html>