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
var_dump($alunos2022);