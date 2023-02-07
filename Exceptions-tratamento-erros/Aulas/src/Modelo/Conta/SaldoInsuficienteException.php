<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorASacar, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar o $valorASacar mas tem apenas $saldoAtual em conta.";
        parent::__construct($mensagem);
    }
}