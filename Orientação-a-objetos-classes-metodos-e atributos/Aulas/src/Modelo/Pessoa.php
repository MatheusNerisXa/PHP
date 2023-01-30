<?php
namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome() : string
    {
        return $this->nome;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaCpf();
    }

    protected function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular < 5)){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}