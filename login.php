<?php
session_start();
require ("mysql_connect.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
if (mysql_db_query_fetch_array("SELECT * FROM Usuario WHERE email ='$email' AND senha = '$senha'")) {
    $login = true;
} else {
    $_SESSION["error"] = "Usuario não cadastrado. ;(";
    $login = false;
    echo("Erro!!");
    header("location: ../index.php");
}
if ($login) {
    $_SESSION['USER_INFO'] = fetch_user($email);
    header("location: ./inicio.php");
}
