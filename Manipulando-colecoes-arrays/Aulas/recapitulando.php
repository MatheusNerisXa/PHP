<?php

$array = [
    '0' => 'zero',
    '1' => 'um',
    '2' => 'dois'
];

foreach ($array as $numeral => $nomeDoNumeral){
    echo "$numeral em português é: $nomeDoNumeral" .PHP_EOL;
}

echo "Total: " . count($array);