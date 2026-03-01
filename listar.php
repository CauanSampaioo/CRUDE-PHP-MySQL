<?php
session_start();
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
    <header style='font-size: 20px'>
        <a href="index.php">Pagina inicial</a><br>
        <a href="listar.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>
    </header>

    <h2>Listagem</h2>

    <?php
        $erro = '';

        $buscaPaginaUrl = filter_input(INPUT_GET,'page', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($buscaPaginaUrl)) ? $buscaPaginaUrl : 1;
        //var_dump($pagina);

        $limitePagina = 3;

        $incioPagina = ($limitePagina * $pagina) - $limitePagina;
        //var_dump($incioPagina);

        $sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT $incioPagina, $limitePagina";

        $prepare = $conect->prepare($sql);
        $prepare->execute();
        if($prepare && $prepare->rowCount() != 0){
            while($rowUsuario = $prepare->fetch(PDO::FETCH_ASSOC)){
            // var_dump($rowUsuario);
            // echo "Id " . $rowUsuario['id'] . "<br>";
            extract($rowUsuario);
            //echo "Id: $id <br>";
            echo "Nome: $nome <br><br>";
            //echo "Email: $email <br><br>";
            echo "<a href='visualizar.php?idUsuario=$id'>Visualizar</a><br>";
            echo "<a href='editar.php?idUsuario=$id'>Editar</a><br>";          
            echo "<a href='delete.php?idUsuario=$id'>Apagar</a><br>";          
              
            echo "<hr>";
            }

            //Contar a quantidade de registros no BD
            $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM usuarios";
            $result_qnt_registros = $conect->prepare($query_qnt_registros);
            $result_qnt_registros->execute();
            $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);

            //Quantidade de página
            $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limitePagina);

            // Maximo de link
            $maximo_link = 2;

            echo "<div><h3>";
            echo "<a href='listar.php?page=1'>Primeira</a> ";

            for ($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++) {
                if ($pagina_anterior >= 1) {
                    echo "<a href='listar.php?page=$pagina_anterior'>$pagina_anterior</a> ";
                }
            }

            echo "<strong>$pagina</strong> ";

            for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
                if ($proxima_pagina <= $qnt_pagina) {
                    echo "<a href='listar.php?page=$proxima_pagina'>$proxima_pagina</a> ";
                }
            }

            echo "<a href='listar.php?page=$qnt_pagina'>Última</a> ";
            echo "</h3></div>";

        }else{
            $erro = "<p style='color: #d00'>Nenhum usuário encontrado !</p>";
        }     

        echo $erro;   
    ?>
    
</body>
</html>