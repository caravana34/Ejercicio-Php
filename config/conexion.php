<?php
    $host= "localhost";
    $user = "root";
    $pw = "";
    $bd = "textimonio";

    $conexion = new mysqli($host,$user,$pw,$bd);
    mysqli_set_charset($conexion,"utf8mb4");
?>