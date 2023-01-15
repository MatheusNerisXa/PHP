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

    if($nota1['nota'] > $nota2['nota']){
        return -1;
    }

    if($nota2['nota']  > $nota1['nota']){
        return 1;
    }

    return 0;
}

usort($notas, 'ordenaNotas');
echo "Ordenadas:";
var_dump($notas);
