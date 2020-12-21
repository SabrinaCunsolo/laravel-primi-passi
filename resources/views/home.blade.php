<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        <ul>
            <li> <a href="{{ route('storia-azienda') }}">Chi siamo</a> </li>
            <li> <a href="{{ route('contatta-staff') }}">Contattaci</a> </li>
        </ul>
        <h1>Homepage</h1>
        <h2>Ciao {{ $nome }} {{ $cognome }}!</h2>
    </body>
</html>
