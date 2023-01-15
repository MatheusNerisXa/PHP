<?php

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

$contasCorrentes['261.247.310-61'] = [
    'titular' => 'Luciando',
    'saldo' => 10000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf. " ". " => " .$conta['titular'] . PHP_EOL;
}
