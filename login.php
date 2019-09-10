<?php
session_start();
if (!isset($_SESSION["USER_INFO"])) {
  header("location: ./pagina_erro.php");
    
}

require ("mysql_connect.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
if (mysql_db_query_fetch_array("SELECT * FROM Usuario WHERE email ='$email' AND senha = '$senha'")) {
    $login = true;
} else {
    $_SESSION["error"] = "Usuario não cadastrado. ;(";
    $login = false;
    echo("Erro!!");
    header("location: ./index.php");
}
if ($login) {
    $_SESSION['USER_INFO'] = pegar_usuario($email);
    header("location: ./inicio.php");
}
