<?php
session_start();
ob_start();
require_once 'conexao.php';

$id = filter_input(INPUT_GET, 'idUsuario', FILTER_DEFAULT);
//var_dump($id);

if(empty($id)){
    $_SESSION['msg'] = "<p style='color: #d00'>Usuário não encontrado !</p>";
    header('location: index.php');
    exit();
}

$sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";
$prepare = $conect->prepare($sql);
$prepare->bindParam(':id', $id);
$prepare->execute();

if($prepare && $prepare->rowCount() != 0){
    $rowUsuario = $prepare->fetch(PDO::FETCH_ASSOC);
    //var_dump($rowUsuario);
    $sqlDelete = "DELETE FROM usuarios WHERE id = :id";
    $prepareDelete = $conect->prepare($sqlDelete);
    $prepareDelete->bindParam(':id', $id);
    if($prepareDelete->execute()){
        $_SESSION['msg'] = "<p style='color: green;'>Usuário(a) ". $rowUsuario['nome'] ." apagado com sucesso!</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color: #d00'>Usuário não encontrado !</p>";
        header('location: index.php');    
    }
}else{
    $_SESSION['msg'] = "<p style='color: #d00'>Usuário não encontrado !</p>";
    header('location: index.php');
}