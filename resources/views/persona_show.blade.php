<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{$persona->nombre}}</p>
    @foreach ($persona->curso as $curso)
        <li>Curso: {{ $curso->nombre}} - Calificacion: {{ $curso->pivot->calificacion}} - Codigo: {{ $curso->pivot->codigo}}</li>

    @endforeach

</body>
</html>
