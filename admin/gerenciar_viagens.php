<?php

// include conexao
include '../backend/conexao.php';

try {
    // monta a query sql
    $sql = "SELECT * FROM tb_viagens";

    // prepara a execução da query sql acima
    $comando = $con->prepare($sql);

    // executa o comando com a query no banco de dados
    $comando->execute();

    // cria a var que irá armazenar os dados, e setando o fetch em modo associativo(chave/valor)
    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // o pre prepara os dados, mostra no navegador as chaves e id 
    // echo "<pre>";
    // var_dump($dados);
    // echo "</pre>";
} catch (PDOException $erro) {
    echo $erro->getMessage();
}
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Viagens</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="container">
        <h3>Gerenciar Viagens</h3>

        <div id="tabela">

            <table border="1">
                <tr>
                    <th>id</th>
                    <th>Titulo</th>
                    <th>local</th>
                    <th>Valor</th>
                    <th>descricao</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                    <?php foreach($dados as $viagem):?>

                <tr>
                    <td><?php echo $viagem['id'];?></td>
                    <td><?php echo $viagem['Titulo'];?></td>
                    <td><?php echo $viagem['Local'];?></td>
                    <td><?php echo $viagem['Valor'];?></td>
                    <td><?php echo $viagem['Desc'];?></td>
                    <td><a href="alterar_viagens.php?id=<?php echo $viagem['id'];?>">alterar</a></td>
                    <td><a href="../backend/_deletar_viagens.php?id=<?php echo $viagem['id'];?>">Deletar</a></td>
                </tr>
                <?php endforeach;?>

            </table>
        </div>
    </div>

</body>

</html>