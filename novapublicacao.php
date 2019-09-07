<?php
session_start();
require "./mysql_connect.php";
function create_post($idUsuario)
{
    return array(
        "idUsuario" => $idUsuario,
        "mensagem" => $_POST["mensagem"],
        "titulo" => $_POST['titulo'],
    );
}

function insert_post($postagem)
{
    $insert = "INSERT INTO `Postagem`(`mensagem`, `titulo`, `idUsuario`) VALUES ('{$postagem['mensagem']}', '{$postagem['titulo']}', '{$postagem['idUsuario']}')";
    return mysql_db_query($insert);
}

$idUsuario = $_SESSION['USER_INFO']['idUsuario'];
error_log($idUsuario);

$postagem = create_post($idUsuario);
var_dump($postagem);
insert_post($postagem);

