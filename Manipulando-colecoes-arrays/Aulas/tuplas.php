<?php

$dados = [
    'nome' => 'Matheus',
    'nota' => 10,
    'idade' => 25

];
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;
var_dump($nome,$nota, $idade);

extract($dados);

var_dump(compact('nome', 'nota', 'idade'));