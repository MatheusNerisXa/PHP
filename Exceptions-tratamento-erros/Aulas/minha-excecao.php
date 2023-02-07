<?php

class MinhaExcecao extends DomainException
{
    public function exibeMatheus()
    {
        echo "Matheus";
    }
}

try {
    throw new MinhaExcecao();
}catch (MinhaExcecao $e){
    $e->exibeMatheus();
}
