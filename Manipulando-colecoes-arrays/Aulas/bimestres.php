<?php

$notasBimestre1 = [
    'Matheus' => 1,
    'Lucas' => 2,
    'Pedro' => 3,
    'Joao' => 6,
    'Paulo' => 10,
];

$notasBimestre2 = [
    'Lucas' => 5,
    'Joao' => 10,
    'Paulo' => 5,
];

//var_dump(array_diff_key($notasBimestre1,$notasBimestre2));
//var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2));

$alunosFaltantes = (array_diff_key($notasBimestre1,$notasBimestre2));
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos,$nomesAlunos));
var_dump(array_flip($alunosFaltantes));

var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));