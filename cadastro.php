<?php
session_start();
require("mysql_connect.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$confsenha = $_POST["confsenha"];
$nome = $_POST["nome"];


function mysqli_conecta_verifica($query)
{
    require("credencial.php");
    $con = mysqli_connect($host, $usuario, $senha, $database);
    $result = mysqli_query($con, $query); //buscou e colocou o erro nessa variavel
    return $result;
}

$query = "SELECT email FROM Usuario WHERE email='$email'"; //buscando email na tabela do bd
$result = mysqli_conecta_verifica($query);
if (!$result) {
    echo "Ocorreu um erro";
} else {
    $array = mysqli_fetch_array($result);
    if ($array['email'] == $email) {
        echo "E-mail já existe. Use outro e-mail";
    } else {
        if ($senha == $confsenha) {
            $insert = mysqli_conecta_verifica("INSERT INTO `Usuario`(`email`, `senha`,`nome`) VALUES ('$email','$senha','$nome') ");
            if (!$insert) {
                echo "Cadastro não realizado";
            } else {
                echo "Cadastro feito com sucesso!";
                header("location: ./index.php");
            }
        } else {
            echo "As senhas não coincidem.";
        }
    }
}
