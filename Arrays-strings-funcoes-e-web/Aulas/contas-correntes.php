<?php

$conta1 =
    [
        'titular' => 'Matheus',
        'saldo' => 1000
    ];

$conta2 = [
        'titular' => 'Pedro',
        'saldo' => 200
    ];

$conta3 = [
        'titular' => 'Lucas',
        'saldo' => 2000
];

//echo  $conta1['titular'];
$contasCorrentes = [$conta1,$conta2,$conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}