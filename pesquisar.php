<?php
session_start();
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDE - Pesquisar</title>
</head>
<body>
    
    <header style='font-size: 20px'>        
        <a href="index.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>
        <a href="pesquisar.php">Pesquisar</a><br>
    </header>


    <h1>Pesquisar usuário</h1>
    <form action="" method="POST">
        <input type="search" name="nome" placeholder="Nome">
        <input name="pesquisar" type="submit" value="Pesquisar">
    </form>
    	<?php

        $pesquisar = filter_input(INPUT_POST, 'pesquisar');
        if($pesquisar){
            $nome = filter_input(INPUT_POST, 'nome');
            if($nome){
                $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$nome%'";
                //$resultadoPesquisa = mysqli_query($conect, $sql);
                $resultadoPesquisa = $conect->prepare($sql);
                $resultadoPesquisa->execute();                                
                while($rowUsuario = $resultadoPesquisa->fetch(PDO::FETCH_ASSOC)){
                    echo "Id - " . $rowUsuario['id']. "<br>";
                    echo "Nome - " . $rowUsuario['nome']. "<br>";
                    echo "E-mail - " . $rowUsuario['email']. "<br>";
                    echo "<a href='editar?idUsuario=".$rowUsuario['id']."'>Editar</a><br>";
                    echo "<a href='delete?idUsuario=".$rowUsuario['id']."'>Delete</a><br>";                    
                    echo "<hr><br>";
                }
            }
        }

		?>
</body>
</html>