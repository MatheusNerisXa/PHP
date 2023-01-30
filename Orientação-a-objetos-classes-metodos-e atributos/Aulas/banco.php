<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;


$endereco = new Endereco('Santa Barbara D Oeste', 'Bairro qualquer', 'Joao Paulo', '342');
$primeiraConta = new Conta(new Titular('Matheus Neris', new Cpf('463.738.908-99'), $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$segundaConta = new Conta(new Titular('Luana Pereira', new Cpf('123.456.789-10'), $endereco));
var_dump($segundaConta);

$outroEndereco = new Endereco('Americana', 'Bairro Aleatorio', 'Qualquer Rua', '432');
$outraConta = new Conta(new Titular('Pedro Gomez', new Cpf('324.242.455-13'), $outroEndereco));
//unset($outraConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperaSaldo() .PHP_EOL;
