<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Deletar</h1>
    
    <hr>

<nav>
    <a href="formadd.php">Início</a> | <a href="incluir.php"> Veículos </a> | <a href="consulta.php"> Consulta </a> | Clientes | Relatórios | <a href="busca_del.php" >Deletar</a> <p>
</nav>
    

<?php

    include('connect.php');

    $id = $_GET['id'];

        echo "Deletando produto de código <b>" .$id. "</b></br></br>";

        $query = "DELETE FROM produtos WHERE id = $id";
        $result = $connectdb -> query ($query);

        if ($result) {
            echo "Deletado com sucesso!</br>";
        } else {
            echo "Erro</br><a href='##'>Voltar</a>";
        }

?>


</body>
</html>