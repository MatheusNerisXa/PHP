<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Matheus Neris',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo, seu Hacker perigoso";
}
