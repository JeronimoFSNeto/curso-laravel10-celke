<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso de Laravel 10 - Celke</title>


    </head>
    <body >
        <h1>Lista de links</h1>
        <a href="{{ route('course.index')}}">Listar sos cursos</a>

    </body>
</html>
