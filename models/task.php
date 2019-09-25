<?php

try {
$pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks','debian-sys-maint','fgKo0I75jriiw1Qq');
} catch (PDOException $e) {
    die($e->getMessage());
}

//die(var_dump($pdo));

$query = $pdo -> prepare('SELECT * FROM tasks');

$query -> execute();

$results = $query -> fetchAll();

//die(var_dump($results[1]));

$task = $results[0];

/* $task = [
    'name' => 'Comprar llet',
    'description' => 'Al Lidl...',
    'completed' => false,
]; */