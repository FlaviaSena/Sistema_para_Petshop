<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agência de Veículos - SCAV</title>
    <link rel="stylesheet" href="#">
</head>
<body>

    <h1>Agência de Veículos - SCAV</h1>
    
    <hr>

<nav>
    <a href="formadd.php">Incluir dados</a> | <a href="consulta.php"> Consultar dados </a> | <a href="editarproduto.php"> Editar Dados</a> | Clientes | Relatórios | <a href="busca_del.php" >Deletar dados</a> <p>
</nav>

    <form method="post" action="incluir.php">
        <label>ID:</label><input type="text" name="id"><br>
        <label>Nome:</label><input type="text" name="nome"><br>
        <label>Valor:</label><input type="text" name="valor"><br>
        <label>Cor:</label><input type="text" name="cor"><br>
        <label>Marca:</label><input type="text" name="marca"><br>
        

        <input type="submit">
    </form>
    
</body>
</html>