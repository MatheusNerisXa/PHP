<?php

class Titular
{
    private string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular < 5)){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}