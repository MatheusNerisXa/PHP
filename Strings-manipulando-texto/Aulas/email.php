<?php

function geraEmail (string $nome) : void
{

    $conteudoEmail = <<<FIM

    Olá, $nome!

    Estamso entrando em contato para
    {motivo do contato}
    
    {assinatura} 
    
    FIM;;

    echo $conteudoEmail;
}

geraEmail('Matheus Neris');
