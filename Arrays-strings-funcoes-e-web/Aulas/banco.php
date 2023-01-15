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
    -200
);

$contasCorrentes['907.627.830-01'] = sacar($contasCorrentes['907.627.830-01'],300);
unset($contasCorrentes['907.627.830-01']);
$contasCorrentes['443.931.950-51'] = sacar($contasCorrentes['443.931.950-51'],100);

foreach ($contasCorrentes as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo  exibeMensagem("$cpf $titular $saldo");
}
