<?php

$notas = [
    'Matheus' => null,
    'Lucas' => 5,
    'Pedro' => 3,
    'Joao' => 6,
    'Paulo' => 10,
];

var_dump($notas);

if(is_array(array($notas))){
    echo 'Sim é um array' .PHP_EOL;
}

var_dump(array_is_list((array)$notas));

echo "Lucas fez a prova:" .PHP_EOL;
var_dump(key_exists('Lucas', (array)$notas));

var_dump(isset($notas['Pedro']));

echo "Alguem tirou 10?" .PHP_EOL;
var_dump(in_array(10,$notas, true));

echo "Quem tirou 10?" .PHP_EOL;
echo array_search(10,$notas, true);

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula
