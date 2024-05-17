<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container text-center">
            <h1 class="my-4 text-light">Visualizza tutti i comics NO</h1>
            <a href="{{ route('comics.index')}}" class="my_btn btn btn-light mt-3">Vai ai comics</a>
        </div>

    </body>
</html>
