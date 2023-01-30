<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere (float $ValorATransferir, Conta $contaDestino) : void
    {
        if ($ValorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->saca($ValorATransferir);
        $contaDestino->deposita($ValorATransferir);
    }
}