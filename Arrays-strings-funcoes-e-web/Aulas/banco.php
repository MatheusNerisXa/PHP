<?php
require_once 'funcoes.php';

$contasCorrentes = [
    '720.067.870-80' => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],
    '443.931.950-51' => [
        'titular' => 'Pedro',
        'saldo' => 200
    ],
    '907.627.830-01' => [
        'titular' => 'Lucas',
        'saldo' => 2000
    ]
];

titularComLetrasMaiusculas($contasCorrentes['443.931.950-51']);

$contasCorrentes['720.067.870-80'] = depositar(
    $contasCorrentes['720.067.870-80'],
    200
);

$contasCorrentes['907.627.830-01'] = sacar($contasCorrentes['907.627.830-01'],300);
//unset($contasCorrentes['907.627.830-01']);
$contasCorrentes['443.931.950-51'] = sacar($contasCorrentes['443.931.950-51'],100);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3><?=$conta['titular'];?> - <?=$cpf;?></h3>
        </dt>
        <dd>
            Saldo: <?=$conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
