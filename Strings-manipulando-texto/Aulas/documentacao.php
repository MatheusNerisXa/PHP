<?php

$trans = ["hello" => 'hi', "hi" => "Hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hi all, I said hello");