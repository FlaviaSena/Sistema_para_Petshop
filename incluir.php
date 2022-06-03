<html>
<body>
<head>
    <title>Adicionando...</title>
</head>


<?php
    include ('connect.php');

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cor = $_POST['valor'];
        $marca= $_POST['cor'];
        $valor = $_POST['marca'];

    echo "ID: " .$id. "</br>Nome: " .$nome. "</br>Valor: " .$valor. "</br>Cor: " .$cor. "</br>Marca: " .$marca. "</br></br>" ;

    $adicionar = "INSERT INTO produtos(id, nome, valor, cor, marca) VALUES('".$id."','".$nome."', '".$valor."', '".$cor."', '".$marca."')";

        $inserir = mysqli_query($connectdb, $adicionar);


    if ($inserir) {
        echo "Produto adicionado com sucesso!
        <br><a href='formadd.php'>Voltar</a>";
    } else {
        echo "Erro <br><a href='formadd.php'>Voltar</a>";
    }
?>

</html>
</body>