<?php
session_start();
ob_start();
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>    

    <h2>CRUDE PHP</h2>

    <header style='font-size: 25px'>
        <a href="listar.php">Listar</a>
        <a href="cadastrar.php">Cadastrar</a>
    </header>    
    <?php        

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
    ?>
</body>
</html>