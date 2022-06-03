<?php

$connectdb = new mysqli('localhost', 'root', '', 'bancoprodutos');

if (!$connectdb) {
    die("Não foi possível conectar: " .mysqli_error(). "<br>");
}

?>