<?php

$peso = 10;
$altura = 1.70;
$imc = $peso / $altura ** 2;

if($imc < 18.5){
    echo "Seu Seu IMC é de $imc que é considerado Magreza";
} else if ( $imc <= 25) {
    echo "Seu Seu IMC é de $imc que é considerado Normal";
}
else{
    echo "Seu Seu IMC é de $imc que é considerado Obesidade";
}