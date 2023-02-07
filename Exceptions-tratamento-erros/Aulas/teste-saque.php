<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.421.134-21'),
        'Matheus Neris',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

$conta->deposita(500);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception){
    echo  "Você não tem saldo suficiente para realizar esta operação";
    echo $exception->getMessage();
}

echo $conta->recuperaSaldo();
