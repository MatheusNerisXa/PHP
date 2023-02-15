<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$email = $argv[1];
$password = $argv[2];

$hash = password_hash($password,PASSWORD_ARGON2ID);
$sql = 'INSERT INTO users (email, password) VALUES (?,?);';
$stentement = $pdo->prepare($sql);
$stentement->bindValue(1,$email);
$stentement->bindValue(2,$hash);
$stentement->execute();