<?php

class Conta
{
    // definir dados da conta
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas;

    public function  __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas --;
    }

    public function saca(float $valorASacar) : void
    {
        if($valorASacar > $this->saldo)
        {
            echo "Saldo indisponível";
            return;
        }
            $this->saldo -= $valorASacar;
    }

    public function deposita (float $valorADepositar) : void
    {
        if ($valorADepositar < 0){
            echo 'Valor precisa ser positivo';
            return;
        }
          $this->saldo += $valorADepositar;
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

    public function recuperaSaldo () : float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular() : string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular() : string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

}