<?php

$alunos2021 = [
    0 => 'Matheus',
    1 => 'Lucas',
    2 => 'Pedro',
    3 => 'Joao',
    4 => 'Paulo',
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Luana',
    7 => 'Nicolas',
    8 => 'Paulo',
];

//$alunos2022 = array_merge($alunos2021,$novosAlunos);
//$alunos2022 = $alunos2021 + $novosAlunos;
$alunos2022 = [...$alunos2021,'Matheus Neris', ...$novosAlunos];
//array_push($alunos2022, 'Guilherme', 'Ester', 'Giovanna');
array_unshift($alunos2022, 'Luiz', 'Hugo');
echo array_unshift($alunos2021);

array_pop($alunos2022) . PHP_EOL;
//$alunos2022[] = 'Juliana';
var_dump($alunos2022);