<?php
//include inclui a conexao
include "conexao.php";

try{
    $usuario =$_POST['usuario'];
    $senha =$_POST['senha'];

$sql = "SELECT * FROM 
tb_login 
WHERE email = '$usuario' AND senha = '$senha'";

$comando = $con->prepare($sql);

$comando -> execute();

$dados = $comando->fetchAll(PDO::FETCH_ASSOC);

// var_dump($dados);
// verifica se existem registros dentro da variavel dados
if($dados != null){
    // se o usuari e senha sao validos ira entrar nesse trexo de codigos
    header('location: ../admin/gerenciar_viagens.php');
    }else{
        // se o usuario ou se nha sao invalidos, ira entrar nesse bloco de codigos

        // header('location../admin/index.html');
        echo"usuario ou senha invalidos";
    }


}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>