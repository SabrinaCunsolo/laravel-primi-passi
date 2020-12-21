<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        <h1>Contattaci</h1>
        <h3>Staff:</h3>
        <ul>
            @foreach ($staff as $dipendente)
                <li> {{ $dipendente }} </li>
            @endforeach
        </ul>
    </body>
</html>
