<?php
namespace Alura\Banco\Modelo\Funcionario;

// funcionario é uma pessoa
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__contruct($nome,$cpf);
        $this->salario = $salario;
    }


    public function alteraNome(string $nome) : void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario() : float
    {
        return $this->salario;
    }


    public function podeAutenticar(string $senha) : bool
    {
        return  $senha === '1234';
    }

    public function recebeAumento($valorAumento)
    {
        if ($valorAumento < 0){
            echo 'Aumento deve ser positivo';
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao() : float;
}