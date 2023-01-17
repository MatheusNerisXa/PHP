<?php

function retiraItemEstoque(array $produto, $quantidadeRetiraEstoque){
    if($quantidadeRetiraEstoque <= $produto['quantidade']){
        $produto['quantidade'] -= $quantidadeRetiraEstoque;
    } else{
        echo "Qtde menor do que o estoque" .PHP_EOL;
    }
    return $produto;
}

function adiconarEstoque(array $produto, $quantidadeItemAdd){
    if($quantidadeItemAdd > 0){
        $produto['quantidade'] += $quantidadeItemAdd;
    } else{
        echo "Para adicionar um item no estoque, informar um numero maior que 0";
    }
    return $produto;
}