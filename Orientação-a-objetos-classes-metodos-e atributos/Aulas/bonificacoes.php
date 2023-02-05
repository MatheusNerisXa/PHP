<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Funcionario, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Matheus Neris',
     new Cpf('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();


$umaFuncionaria = new Gerente('Patricia',
    new Cpf('333.333.333-33'),
    3000
);

$umEditor = new EditorVideo('Vinicius', new Cpf('123.456.743-23'), 1500);

$umDiretor = new Diretor('Ana Paula', New Cpf('123.543.234-22'),'5000');
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();