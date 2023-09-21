<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Nama : Dwi Rani Syarifah</h1>
    <h1>SMKN 1 SAYUNG, {{$nama}}, {{$kelas}}</h1>

    @if($nama=='admin')
    <a href ="">ke halaman admin</a>
    @elseif($nama=='user')
    <a href ="">ke Halaman USER</a>
    @else
    <h2> Anda Bukan ADMIN Dan USER </h2> 
    @endif

    @switch($buah)
       @case(1)
          First case... 
          @break

        @case (2)
             Second case...
             @break

        @default
            MACAM MACAM BUAH:
        @endswitch
    <br>

         @for ($i = 0; $i < 0; $i++)
            {{ $i }}
        @endfor

        @foreach ($buah as $nama )
        {{ $nama }}</br>

        @endforeach
       
</body>
</html>