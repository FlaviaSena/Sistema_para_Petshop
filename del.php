<?php
include('connect.php');
$id =$_POST['id'];
$sql = mysqli_query($connectdb,"select * from produtos where id ='$id'");

while ($linha = mysqli_fetch_array($sql)) {
    $id = $linha['id'];
    $nome = $linha['nome'];
    $cor = $linha['valor'];
    $marca= $linha['cor'];
    $valor = $linha['marca'];

    echo "Id => $id<br>";
    echo "Nome => $nome<br>";
    echo "Cor => $cor<br>";
    echo "Marca => $marca<br>";
    echo "Valor => $valor<br>";

    echo "Deseja deletar o produto ".$nome."</b></br>";
    echo "<a href='deletar.php?id=".$id."'>Sim</a>";
}

echo"<br>";
echo "<a href='busca_del.php'>voltar</a>";

?>