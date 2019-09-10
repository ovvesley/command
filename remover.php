<?php

$idpostagem=$_POST["idPostagem"];


require "credencial.php";
$connection = mysqli_connect($host, $usuario, $senha);
if($connection and mysqli_select_db($connection, $database)){
    $sql = "DELETE FROM Postagem WHERE idPostagem= $idpostagem";
    if (mysqli_query($connection, $sql)) {
        header ("location:./inicio.php");
    }else{
        echo "Deu ruim, volte e tente novamente";
    }
}

?>