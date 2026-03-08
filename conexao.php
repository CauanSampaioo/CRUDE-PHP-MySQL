<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$dbName = 'celke2';
$porta = 3306;

try{
    $conect = new PDO("mysql:host=$host;port=$porta;dbname=$dbName", $usuario, $senha);
}catch(Exception $e){
    $e->getMessage();
    die();
}

//echo "Dados 👍";
return $conect;
