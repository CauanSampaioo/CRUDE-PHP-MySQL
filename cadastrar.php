<?php    
    session_start();
    ob_start();
    require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <header style='font-size: 20px'>        
        <a href="index.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>
        <a href="pesquisar.php">Pesquisar</a><br>
    </header>


    <h1>Cadastrar</h1>
    <?php
    //Receber dados do formulário
        $dadosFormulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //var_dump($dadosFormulario);
        $erro = null;

        //Verifica se butão foi clicado
        if(!empty($dadosFormulario['btnEntrar'])){

            //Espaço ao redor dos inputs recebe falso
            $vazioAoRedor = false;

            //Tratamento para detectar espaços
            $dadosFormulario = array_map('trim', $dadosFormulario);
            if(in_array('', $dadosFormulario)){
                //Verifica se há espaço dentro do formulário
                $vazioAoRedor = true;
                $erro = "<p style='color: #d00'>Necessário preencher todos os campos</p>";
            }elseif(!filter_var($dadosFormulario['email'], FILTER_VALIDATE_EMAIL)){
                //Verifica se o email tem os atributos de email
                $vazioAoRedor = true;
                $erro = "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }

            //Se espaço ao redor for Não verdadeiro ENTRAR no if
            if(!$vazioAoRedor){
                $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";

                $prepare = $conect->prepare($sql);
                $prepare->bindParam(":nome", $dadosFormulario['nome']);
                $prepare->bindParam(":email", $dadosFormulario['email']);
                $prepare->execute();
                
                if($prepare->rowCount()){                    
                    $_SESSION['msg'] = "<p style='color: #0a0'>Usuário ". $dadosFormulario['nome'] ." cadastrado com sucesso</p>";
                    unset($dadosFormulario);
                    header('location: index.php');
                    
                }else{
                    $erro = "<p style='color: #d00'>Deu errado!</p>";
                }
            }
        }
         
        if(!empty($erro)){
            echo $erro;
        }
    ?>
    
    <form name="formulario" method="POST" action="">
        <input type="text" name="nome" id="nome" placeholder="Nome e sobrenome: " value="<?php 
        if(isset($dadosFormulario['nome'])){
            echo $dadosFormulario['nome'];
        }
        ?>">
        <br><br>
        <input type="email" name="email" id="email" placeholder="E-mail:" value="<?php
        if(isset($dadosFormulario['email'])){
            echo $dadosFormulario['email'];
        }
        ?>">
        <br><br>
        <input type="submit" value="Cadastrar" name="btnEntrar">
    </form>
    <hr>
</body>
</html>
