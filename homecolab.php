<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PETSHOP</title>
            
    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    


</head>

<body>


    <h1>Login - PETSHOP</h1>
    <hr>

    <?php


include('conexao.php');

session_start();

if ((!isset ($_SESSION['matriculacolab']) == true) and (!isset ($_SESSION['senhacolab'] == true))) {

    unset ($_SESSION['matriculacolab']);
    unset ($_SESSION['senhacolab']);

    header('location: logincolab.php');
}

$colab = $_SESSION['matriculacolab'];

echo "Bem-vindo, $colab";

include('menucolab.html');

?>

</body>
</html>