<?php
session_start();
if (!isset($_SESSION["USER_INFO"])) {
  header("location: ./pagina_erro.php");
}
var_dump($_POST);
require "./mysql_connect.php";
$postagem = array(
    "idPostagem" => $_POST["idPostagem"],
    "mensagem" => $_POST["mensagem"],
    "titulo" => $_POST['titulo'],
);
$update =  "update Postagem set titulo = '$postagem[titulo]', mensagem = '$postagem[mensagem]' where idPostagem = $postagem[idPostagem]";
if(mysql_db_query($update)){
    echo "atualizado com sucesso";
    header("location: ./inicio.php");
}else{
    echo "deu erro";
}
