<?php
    include ('connect.php');

        @$id = $_POST['id'];
        @$nome = $_POST['nome'];
        @$valor = $_POST['valor'];
        @$cor= $_POST['cor'];
        @$marca = $_POST['marca'];
        
        $sql=mysqli_query($connectdb,"update produtos set nome='$nome' where id='$id'");
        $sql1=mysqli_query($connectdb,"update produtos set valor='$valor' where id='$id'");
        $sql2=mysqli_query($connectdb,"update produtos set cor='$cor' where id='$id'");
        $sql3=mysqli_query($connectdb,"update produtos set marca='$marca' where id='$id'");

        if($sql){
            echo"Ok";
            
        } else{
            echo "Não ok";
        }
?>
