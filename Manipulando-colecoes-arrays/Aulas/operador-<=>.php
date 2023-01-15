<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Matheus',
        'nota' => 6,
    ],
    [
        'aluno' => 'João',
        'nota' => 9,
    ]
];

function ordenaNotas(array $nota1, array $nota2) : int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
echo "Ordenadas:";
var_dump($notas);
