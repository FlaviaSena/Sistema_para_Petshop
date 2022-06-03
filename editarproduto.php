<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agência de Veículos - SCAV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Editar Produto</h1>
    
    <hr>

<nav>
    <a href="formadd.php">Incluir dados</a> | <a href="consulta.php"> Consultar dados </a> | Clientes | Relatórios | <a href="busca_del.php" >Deletar dados</a> <p>
</nav>

<?php
include('connect.php');

@$id = $_GET['id'];

$sql=mysqli_query($connectdb,"select * from produtos where id ='$id'");

$linha = mysqli_fetch_array($sql);

if ($linha){
    echo"
    
    <form action='editar2.php' method='post'>
    
    <table>
    
    <tr>
    <td><input type='text' name='id' value='".$linha["id"]."'></td>
    </tr>
    
    <tr>
    <td>label>Nome</label></td>
    <td>input type='text'name='nome' value='".$linha["nome"]."'></td>
    </tr>
    
    <tr>
    <td>label>valor</label></td>
    <td>input type='text'name='valor' value='".$linha["valor"]."'></td>
    </tr>
    
    <tr>
    <td>label>cor</label></td>
    <td>input type='text'name='cor' value='".$linha["cor"]."'></td>
    </tr>
    
    <tr>
    <td>label>marca</label></td>
    <td>input type='text'name='marca' value='".$linha["marca"]."'></td>
    </tr>
    
    <td><button type='submit'>editar</button></td></tr>

    </table>
    
    </form>";
}
else{
    echo"dados não encontrados";

}
?>

</body>
</html>