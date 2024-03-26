<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Laraval 10 com Celke</title>
</head>

<body>
    <a href="{{route('course.index')}}">Listar</a>
    <a href="{{route('course.create')}}">Cadastrar</a>
    <a href="{{route('course.edit')}}">Editar</a><br><br>
    <!-- <a href="{{route('course.destroy')}}">Apagar</a> -->

    <h2>CADASTRO</h2>
    <form action="{{route('course.store')}}" method="POST">
@csrf
@method('POST')

<label for="">Nome: </label>
<input type="text" name="name" id="name" placeholder="Nome do curso" value="{{old('name')}}" require>
<br><br>
<button type="submit">Cadastrar</button>


    </form>
</body>

</html>
