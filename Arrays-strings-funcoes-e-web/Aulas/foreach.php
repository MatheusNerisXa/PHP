<?php

$contasCorrentes = [
    12345678998 => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],
    52652328258 => [
        'titular' => 'Pedro',
        'saldo' => 200
    ],
    23244558588 => [
        'titular' => 'Lucas',
        'saldo' => 2000
    ]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo  $cpf . PHP_EOL;
}
