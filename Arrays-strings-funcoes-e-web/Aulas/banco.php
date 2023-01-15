<?php

function exibeMensagem($mensagem) {
    echo  $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar){
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Ops, saldo insuficiente! Você não pode sacar este valor!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

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

$contasCorrentes['907.627.830-01'] = sacar($contasCorrentes['907.627.830-01'],500);
$contasCorrentes['443.931.950-51'] = sacar($contasCorrentes['443.931.950-51'],300);

foreach ($contasCorrentes as $cpf => $conta){
    echo  exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
