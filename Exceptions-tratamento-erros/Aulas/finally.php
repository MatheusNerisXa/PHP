<?php

try {
    echo "Excecutando alguma coisa" . PHP_EOL;
    throw new Exception("Exceção aqui");
}catch (Throwable $e){
    echo "Caiu no catch";
} finally{
    echo "Finally" . PHP_EOL;
}