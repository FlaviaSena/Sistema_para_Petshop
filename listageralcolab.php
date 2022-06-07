<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Geral de Colaboradores - PETSHOP</title>
    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    

</head>

<body>
<h1>Lista Geral de Colaboradores - PETSHOP</h1>
<hr>

<?php


?>

<?php

include('conexao.php');

$sql = mysqli_query($conectadb, "SELECT * FROM colaborador");

    while ($dado = mysqli_fetch_array($sql)) {
        
        $matriculacolab = $dado['matriculacolab'];
        $nomecolab = $dado['nomecolab'];
        $cpfcolab = $dado['cpfcolab'];
        $senhacolab = $dado['senhacolab'];

        echo "MATRÍCULA: $matriculacolab<br>";
        echo "NOME: $nomecolab<br>";
        echo "CPF: $cpfcolab<br>";
        echo "<a href='editarcolab.php?matriculacolab=".$dado['matriculacolab']."'>Editar dados</a>";
        echo " | <a href='excluircolab.php?matriculacolab=".$dado['matriculacolab']."'>Excluir dados</a>";
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