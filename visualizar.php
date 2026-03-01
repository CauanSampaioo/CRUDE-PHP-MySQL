<?php
require_once 'conexao.php';
session_start();
ob_start();

$id = filter_input(INPUT_GET,"idUsuario", FILTER_SANITIZE_NUMBER_INT);
//var_dump($id);

if(empty($id)){
    $_SESSION['msg'] = "<p style='color: #d00'>Usuário não encontrado !</p>";
    // header('location: index.php');
    // exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>
    <header style='font-size: 20px'>
        <a href="index.php">Pagina inicial</a><br>
        <a href="listar.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>
    </header>
    <h2>Visualizar</h2>

    <?php
    
    $sql = "SELECT id, nome, email FROM usuarios WHERE id = :id LIMIT 1";
    $prepare = $conect->prepare($sql);
    $prepare->bindParam(':id', $id);
    $prepare->execute();

    if($prepare && $prepare->rowCount() != 0){
        $rowUsuario = $prepare->fetch(PDO::FETCH_ASSOC);
        extract($rowUsuario);
        echo "<hr><h1>";
        echo "Id: $id<br>";
        echo "Nome: $nome<br>";
        echo "E-mail: $email";
        echo "</h1>";
        echo "<a href='delete.php?idUsuario=$id'>Apagar</a><hr>";
    }else{
        $erro = "<p style='color: #d00'>Nenhum usuário encontrado !</p>"; 
    }  
    ?>
    <a style='font-size: 30px' href="index.php">Voltar</a>    
</body>
</html>