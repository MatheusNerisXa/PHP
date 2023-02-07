<?php

namespace Alura\Banco\Modelo\Conta;

Class NomeCurtoException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "O nome $nomeTitular é muito curto, por favor informar um nome maior.";
        parent::__construct($mensagem);
    }
}
