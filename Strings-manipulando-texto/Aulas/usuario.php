<?php

$email = 'matheusnerísxa@outlook.com';
$posicaoDoArroba = strpos($email,'@'); //buscar a posição de `@` $email
$senha = '123íà';

if (mb_strlen($senha) <8){
    echo 'Senha insegura!!!' . PHP_EOL;
}

$usuario = substr($email,0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email,$posicaoDoArroba + 1) . PHP_EOL;