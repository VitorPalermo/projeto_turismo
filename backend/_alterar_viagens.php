<?php
include "conexao.php";

try{
    // var recebidas via $_post
    $id       =$_POST['id'];
    $titulo       =$_POST['titulo'];
    $local       =$_POST['local'];
    $valor       =$_POST['valor'];
    $desc       =$_POST['desc'];

    $sql = "UPDATE
        tb_viagens
        SET
        `Titulo` = '$titulo', 
        `Local` = '$local',
        `Valor` = '$valor',
        `Desc` = '$desc'

        WHERE
        id = $id;


    ";

    $comando = $con->prepare($sql);

    $comando->execute();

    header( 'location:../admin/alterar_viagens.php?id='.$id);



}catch(PDOException $erro){
    echo $erro->getMessage();

}

?>