<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>{{$title}} - Controle de séries</title>
</head>
<body>
<div class="container">
    <h1>{{$title}}</h1>
    {{$slot}}
</div>
</body>
</html>
