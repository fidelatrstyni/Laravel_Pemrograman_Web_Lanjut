
<!--DOCTYPE html>
<html>
    <head>
        <title>Biodata</title>
    </head>
    <body>
        <h1>Biodata</h1>
        <p>Nama : {{ $nama }}</p>
    </body>
</html-->

<!DOCTYPE html>
<html>
    <head>
        <title>Biodata</title>
    </head>
    <body>
        <h1>Biodata</h1>
            <p>Nama : {{ $nama }}</p>
            <p>Materi Belajar</p>
        <ul>
            @foreach($materi as $datamateri)
            <li>{{ $datamateri }}</li> @endforeach
        </ul>
    </body>
</html>