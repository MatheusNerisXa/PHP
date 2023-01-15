<?php

$notas = [
    10,
    8,
    9,
    7,
    6
];

$notasEAlunos = [
    'Ana' => 10,
    'Matheus' => 8,
    'Paulo' => 9,
    'Joao' => 7,
    'Lucas' => 6
];

// ordenar pela chave de forma crescente
//ksort($notasEAlunos);

// ordenar pela chave de forma decrescente
krsort($notas);

// considera chave e valor de forma decrescente
//arsort($notasEAlunos);

// ordenando os dados de forma decrescente
//rsort($notas);
var_dump($notasEAlunos);