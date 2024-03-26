<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Laraval 10 com Celke</title>
</head>

<body>
    <h2>View INDEX</h2>

    {{-- <a href="{{route('course.show')}}">Visualizar</a> --}}
    <a href="{{route('course.create')}}">Cadastrar</a>
    <a href="{{route('course.edit')}}">Editar</a><br><br>
    <!-- <a href="{{route('course.destroy')}}">Apagar</a> -->

    @forelse ($courses as $course)
    ID: {{ $course->id }}<br>
    Nome: {{$course->name}}<br>

    <a href="{{route('course.show',['course'=>$course->id])}}">Visualizar</a><br>

    <hr>
    @empty
    <span style="color: red">Nenhuma conta encontrada!</span>

    @endforelse
</body>

</html>
