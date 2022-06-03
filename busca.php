<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca</title>
</head>
<body>

        <form method='post' action='busca.php'>
            ID:<br>
            <input type="text" name="id"><br>
            <input type="submit">
        </form>
    

    <?php

    include('connect.php');

    @$id = $_POST['id'];

    $sql = mysqli_query($connectdb, "select * from produtos where id = '$id'");

    while ($linha = mysqli_fetch_array($sql)) {
        
        @$id = $linha['id'];
        @$nome = $linha['nome'];
        @$cor = $linha['cor'];
        @$marca = $linha['marca'];
        @$valor = $linha['valor'];
    
        echo "Id => $id<br>";
        echo "Nome => $nome<br>";
        echo "Cor => $cor<br>";
        echo "Marca => $marca<br>";
        echo "Valor => $valor<br>";
    }


    echo "<br>";
    echo "<a href='busca.php'> Voltar </a>";

    ?>

</body>
</html>