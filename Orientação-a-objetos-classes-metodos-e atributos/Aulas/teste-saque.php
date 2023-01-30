<?php

use Alura\Banco\Modelo\{Cpf,Endereco};
use Alura\Banco\Modelo\Conta\{Titular, Conta, ContaPoupanca, ContaCorrente};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        'Matheus Neris',
        new Cpf('123.456.789-10'),
        new Endereco('Americana', 'Qualquer lugar', 'Rua', '536'),
    ),
);

$conta->transfere();
$conta->deposita('500');
$conta->saca('100');
echo  $conta->recuperaSaldo();