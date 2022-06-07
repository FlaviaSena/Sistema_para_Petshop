<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Refinada - Base de Clientes - PETSHOP</title>

    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    

</head>

<body>

<!--TÍTULO NA PÁGINA-->
<h1>Pesquisa Refinada - Base de Clientes - PETSHOP</h1>
<hr>


<!--CÓDIGO PHP - INCLUSÃO DO MENU-->



<!--FORMULÁRIO DE PESQUISA REFINADA-->
    <form class="d-flex" action="" method="post">
        
        <input type="text" autocomplete="off" name="cpfcli" placeholder="CPF do cliente">

        <input class="btn btn-outline-primary" type="submit" value="Buscar dados">

    </form>




    <!--CÓDIGO PHP - LISTAR DADOS DE TODOS OS CLIENTES-->
<?php

include('conexao.php');

@$cpfcli = $_POST['cpfcli'];

$sql = mysqli_query($conectadb, "SELECT * FROM cliente WHERE cpfcli = '$cpfcli'");

    while ($dado = mysqli_fetch_array($sql)) {

        $cpfcli = $dado['cpfcli'];
        $nomecli = $dado['nomecli'];
        $telefone = $dado['telefone'];
        $email = $dado['email'];
        $endereco = $dado['endereco'];

        echo "<br>";
        echo "CPF: $cpfcli<br>";
        echo "NOME: $nomecli<br>";
        echo "TELEFONE: $telefone<br>";
        echo "E-MAIL: $email<br>";
        echo "ENDEREÇO: $endereco<br>";

    echo "<a href='editarcli.php?cpfcli=".$cpfcli."'>Editar dados do cliente ".$nomecli."?</a>";
    echo " | ";
    echo "<a href='excluircli.php?cpfcli=".$cpfcli."'>Excluir dados do cliente ".$nomecli."?</a>";
    echo "<hr>";
    }



?>

<?php

include('menucolab.html');

?>


<br>
<hr>
<!--
    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
<-->
</body>
</html>