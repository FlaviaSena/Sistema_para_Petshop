<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar</title>
</head>
<body>
    <h1>Consultar</h1>

    <hr>

<nav>
    <a href="formadd.php">Incluir dados</a> | <a href="consulta.php"> Consultar dados </a> | <a href="editarproduto.php"> Editar Dados</a> | Clientes | Relatórios | <a href="busca_del.php" >Deletar dados</a> <p>
</nav>

    <?php
    include('connect.php');

    $sql = mysqli_query($connectdb,"select * from produtos");
    
    while ($linha = mysqli_fetch_array($sql)){

        $id = $linha['id'];
        $nome = $linha['nome'];
        $cor = $linha['valor'];
        $marca= $linha['cor'];
        $valor = $linha['marca'];

        echo"id=>$id<br>";
        echo"nome=>$nome<br>";
        echo"cor=>$cor<br>";
        echo"marca=>$marca<br>";
        echo"valor=>$valor<br>";
        echo"<hr>";

        echo"<br><a href='editarproduto.php?id=".$linha['id']."'>editar</a>";
        echo"<br><a href='deletar.php?id=".$linha['id']."'>deletar</a><br><br>";
    }
?>


</body>
</html>