<?php
include 'conexao.php';
try{
    // captura o id enviado via get e armazena em uma var
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_viagens WHERE id=$id";

    $comando = $con->prepare($sql);

    $comando->execute();

    header('location: ../admin/gerenciar_viagens.php');

}catch(PDOException $erro){
    echo $erro->getMessage();
}
?>