<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        'Matheus Neris',
        new Cpf('123.456.789-10'),
        new Endereco('Americana', 'Qualquer lugar', 'Rua', '536'),
    ),
);

$conta->deposita('500');
$conta->saca('100');
echo  $conta->recuperaSaldo();