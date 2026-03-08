<?php
session_start();
ob_start();
require_once 'conexao.php';

$erro = null;

$id = filter_input(INPUT_GET, "idUsuario", FILTER_SANITIZE_NUMBER_INT);
//var_dump($id);

if(empty($id)){
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header('location: index.php');
    exit();
}

$sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";
$prepare = $conect->prepare($sql);
$prepare->bindParam(":id", $id);
$prepare->execute();

if($prepare && $prepare->rowCount() != 0){
    $rowUsuario = $prepare->fetch(PDO::FETCH_ASSOC);
    //var_dump($rowUsuario);    
}else{
    $_SESSION['msg'] = "<p style='color: #d00'>Usuário não encontrado !</p>"; 
    header('location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <header style='font-size: 20px'>        
        <a href="index.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>
        <a href="pesquisar.php">Pesquisar</a><br>
    </header>


    <h1>Editar</h1>

    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);

    if(!empty($dados['editarUsuario'])){

        $vazioAoRedor = false;
        $dadosFormulario = array_map('trim',$dados);
        if(in_array('', $dadosFormulario)){
            $vazioAoRedor = true;
            $erro = "<p style='color: #d00'>Error: Necessário preencher todos os campos</p>";
        }elseif(!filter_var($dados['email'],FILTER_VALIDATE_EMAIL)){
            $vazioAoRedor = true;
            $erro = "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
        }

        if(!$vazioAoRedor){

            $sqlEditar = "UPDATE usuarios SET nome = :nome, email = :email  WHERE id= :id";
            $prepareEditar = $conect->prepare($sqlEditar);
            $prepareEditar->bindParam(':nome', $dados['nome']);
            $prepareEditar->bindParam(':email', $dados['email']);
            $prepareEditar->bindParam(':id', $id);
            if($prepareEditar->execute()){
                $_SESSION['msg'] = "<p style='color: #0a0'>Usuário ". $dados['nome']. " editado com sucesso</p>";
                header('location: index.php');
            }else{
            $erro = "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }
        }

        if(!empty($erro)){
            echo $erro;
        }
    }
    ?>

    <form name="formulario" method="POST" action="">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Usuário" value="<?php
            if(isset($dados['nome'])){   
                echo $dados['nome'];
            }elseif(isset($rowUsuario['nome'])){
                echo $rowUsuario['nome'];
            }
        ?>"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="E-mail do Usuário" value="<?php
            if(isset($dados['email']))
            {
                echo $dados['email'];
            }elseif(isset($rowUsuario['email'])){
                echo $rowUsuario['email'];
            }
        ?>"><br><br>

        <input type="submit" value="salvar" name="editarUsuario">
    </form><br>

    <a style='font-size: 30px' href="index.php">Voltar</a>
</body>
</html>