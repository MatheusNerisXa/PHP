<?php

$telefones = ['(24) 99999 - 9999', '(19) 99999 - 9999', '(11) 99999 - 9999'];
$regex = '/^\(([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})$/';

foreach ($telefones as $telefone){
    $telefoneValido = preg_match($regex, $telefone, $correspondencia);
    var_dump($correspondencia);
    if($telefoneValido){
        echo 'Telefone válido' . PHP_EOL;
    } else{
        echo 'Telefone inválido' . PHP_EOL;
    }

   echo preg_replace($regex,
           '(XX) \2',
           $telefone) . PHP_EOL;
}


