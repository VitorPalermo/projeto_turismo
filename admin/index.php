<?php
// inicia a sessao
session_start();

// verifica se a variavel de sessao existe
if(isset($_SESSION['usuario'])){
    header('location: gerenciar_viagens.php');

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>

    <div id="container">
        <form  action="../backend/_validar_login.php" method="post">
        <h1>cadastro</h1>
            <label for="usuario">Usuário</label>
            <input type="email" name="usuario" id="usuario" >
                
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" >               
            <input type="submit" value="login">
        </form>

        
    </div>
</head>

<body>

</body>

</html>