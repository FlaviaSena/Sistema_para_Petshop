<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Geral de Clientes - PETSHOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
      body{
          background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);
      }
      
      
    </style>    

</head>

<body>
<h1>Lista Geral de Clientes - PETSHOP</h1>
<hr>



<?php

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM cliente");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $cpfcli = $dado['cpfcli'];
        $nomecli = $dado['nomecli'];
        $telefone = $dado['telefone'];
        $email = $dado['email'];
        $endereco = $dado['endereco'];
        $senha = $dado['senha'];

        echo "CPF: $cpfcli<br>";
        echo "NOME: $nomecli<br>";
        echo "TELEFONE: $telefone<br>";
        echo "E-MAIL: $email<br>";
        echo "ENDEREÇO: $endereco<br>";
        echo "<a href='editarcli.php?cpfcli=".$dado['cpfcli']."'>Editar dados</a>";
        echo " | <a href='excluircli.php?cpfcli=".$dado['cpfcli']."'>Excluir dados</a>";
        echo "<hr>";
        echo "<hr>";

    }

    include('menucolab.html');

?>

<!--
    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
<-->

</body>
</html>