<?php

$notas = [
    'Matheus' => null,
    'Lucas' => 5,
    'Pedro' => 8,
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