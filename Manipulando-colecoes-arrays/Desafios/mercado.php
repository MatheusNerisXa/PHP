<?php
require_once 'funcoes.php';

$produto = [
    'ovo' => [
        'preco' => 5,
        'quantidade' => 20
    ],
    'pao' => [
        'preco' => 7,
        'quantidade' => 2
    ]
];

//$produto['ovo'] = retiraItemEstoque($produto['ovo'],2);
//$produto['pao'] = retiraItemEstoque($produto['pao'], 20);
$produto['pao']  = adiconarEstoque($produto['pao'], 12);

foreach ($produto as $produtos => $product){
    echo "O nome do produto é $produtos custa  {$product['preco']} reais e ainda temos em estoque {$product['quantidade']} unidades" .PHP_EOL;
}