<!--TELA DE CADASTRO DE COLABORADORES-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Colaboradores - PETSHOP</title>
    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    

</head>

<body>

<!--TÍTULO DA PÁGINA-->
<h1>Cadastro de Colaboradores - PETSHOP</h1>
<hr>

<!--CÓDIGO PHP - MENU DA PÁGINA-->


<!--FORMULÁRIO DE CADASTRO DE COLABORADORES-->
        <form action="" method="post">

            <input type="text" name="matriculacolab" autocomplete="off" placeholder="Nova matrícula"><br>
            <input type="text" name="nomecolab" autocomplete="off" placeholder="Nome do novo colaborador"><br>
            <input type="text" name="cpfcolab" autocomplete="off" placeholder="CPF"><br>
            <input type="password" name="senhacolab" autocomplete="off" placeholder="Senha"><br>

            <input type="submit" value="Cadastrar funcionário">

        </form>



<!--CÓDIGO PHP - CADASTRO DE COLABORADORES-->
<?php

include('conexao.php');

@$matricula = $_POST['matriculacolab'];
@$nome = $_POST['nomecolab'];
@$cpf = $_POST['cpfcolab'];
@$senhacolab = $_POST['senhacolab'];

echo "

- Matrícula: ".$matricula."<br>
- Nome do funcionário: ".$nome."<br>
- CPF: ".$cpf."<br>";

$adicionar = "INSERT INTO colaborador(matriculacolab, nomecolab, cpfcolab, senhacolab) VALUES('".$matricula."', '".$nome."', '".$cpf."', '".$senhacolab."')";

$inserir = mysqli_query($conectadb, $adicionar);

if ($inserir) {
    echo "Funcionário ".$nome." cadastrado com sucesso!";
} else {
    "Erro ao cadastrar colaborador.";
}

?>
<hr>
<br>
<?php

include('menucolab.html');

?>

<!--
    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
<-->

</body>
</html>