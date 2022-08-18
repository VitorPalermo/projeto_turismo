<?php
// inclui a conexao
include '../backend/conexao.php';


// captura a variavel global recebida via get
$id = $_GET['id'];



// comando sql que ira selecionar as viagens por id
try{
$sql = "SELECT * FROM tb_viagens WHERE id = $id";

$comando = $con->prepare($sql);

$comando->execute();

$dados = $comando->fetchAll(PDO::FETCH_ASSOC);

// echo"<pre>";
// var_dump($dados);
// echo"</pre>";


// tratamento de erro
}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="container">
    <h3>alterar viagens</h3>
    <form action="../backend/_alterar_viagens.php" method="POST">

    <hr>
    <a href="gerenciar_viagens.php">gerenciar viagens</a>
    <hr>

    <div id="grid-alterar">

    <div>
            <label for="">ID</label>
            <input type="text" name="id" id="id" value="<?php echo $dados[0]['id']?>" readonly> 
        </div>



        <div>
            <label for="titulo">titulo</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $dados[0]['Titulo']?>">
        </div>

        <div>
            <label for="local">local</label>
            <input type="text" name="local" id="local" value="<?php echo $dados[0]['Local']?>">
        </div>

        <div>
            <label for="valor">valor</label>
            <input type="text" name="valor" id="valor" value="<?php echo $dados[0]['Valor']?>">
        </div>

        <div>
            <label for="desc">descrição</label>
            <textarea name="desc" id="desc" cols="30" rows="10"><?php echo $dados[0]['Desc']?></textarea>
        </div>
    </div>
    <input type="submit" value="salvar">
    </form>



</div>    
</body>
</html>