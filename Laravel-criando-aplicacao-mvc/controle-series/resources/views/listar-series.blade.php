<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>
<h1>Séries</h1>

<ul>
    @foreach ($series as $serie)
    <li>{{ $serie }}</li>
    @endforeach
</ul>
</body>
</html>
