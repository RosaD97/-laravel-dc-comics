<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1>Visualizza tutti i comics</h1>
            <a href="{{ route('comics.index')}}" class="btn btn-primary">Vedi dettagli</a>
        </div>

    </body>
</html>
