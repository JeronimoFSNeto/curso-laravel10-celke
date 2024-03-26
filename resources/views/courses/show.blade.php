<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Laraval 10 com Celke</title>
</head>

<body>
    <h2>View SHOW</h2>

    @if(session('success'))
    <p style="color: green">
        {{session('success')}}
    </p>
    @endif

    <a href="{{route('course.index')}}">Listar</a>
    <a href="{{route('course.create')}}">Cadastrar</a>
    <a href="{{route('course.edit')}}">Editar</a>
    <!-- <a href="{{route('course.destroy')}}">Apagar</a> -->
</body>

</html>
