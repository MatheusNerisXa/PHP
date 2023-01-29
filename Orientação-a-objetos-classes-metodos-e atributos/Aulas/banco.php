<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular('Matheus Neris', new Cpf('463.738.908-99')));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$segundaConta = new Conta(new Titular('Lucas Pereira', new Cpf('123.456.789-10')));
var_dump($segundaConta);

$outraConta = new Conta(new Titular('Pedro Gomez', new Cpf('324.242.455-13')));
unset($outraConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperaSaldo() .PHP_EOL;
