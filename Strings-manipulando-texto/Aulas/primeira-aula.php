<?php

$nome = "Matheus Neris";
$ehDaMinhaFamilia = str_contains($nome,'Neris');

if($ehDaMinhaFamilia){
    echo "$nome é da minha família" . PHP_EOL;
} else{
    echo "$nome não é da minha família";
}
