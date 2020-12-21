<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        <ul>
            <li> <a href="{{ route('homepage') }}">Homepage</a> </li>
            <li> <a href="{{ route('storia-azienda') }}">Chi siamo</a> </li>
        </ul>
        <h1>Contattaci</h1>
        <h3>Staff:</h3>
        <ul>
            @foreach ($staff as $dipendente)
                <li> {{ $dipendente }} </li>
            @endforeach
        </ul>
    </body>
</html>
