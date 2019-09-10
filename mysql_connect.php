<?php function mysql_db_query($query)
{
    // global $mysql_host, $mysql_user, $mysql_password, $mysql_database;
    require "./credencial.php";
    error_log("$host, $usuario, $senha, $database");
    $connect = mysqli_connect($host, $usuario, $senha, $database);
    if (!$connect) {
        echo mysqli_error($connect);
    }
    $result = mysqli_query($connect, $query);
   
    if ($result) {
        return $result;
    } else {
        echo mysqli_error($connect);
    }
}
function mysql_db_query_fetch_array($query)
{    
    return mysqli_fetch_array(mysql_db_query($query));
}
function mysql_db_query_fetch_assoc($query)
{    
    return mysqli_fetch_assoc(mysql_db_query($query));
}

function pegar_usuario($email)
{
    $arr = mysql_db_query_fetch_array("SELECT * FROM Usuario WHERE email ='$email'");
    return array(
        "idUsuario" => intval($arr['idUsuario']),
        "nome" => $arr['nome'],
        "email" => $arr['email'],
    );
}

function pegar_postagem($idPostagem)
{
    $arr = mysql_db_query_fetch_array("SELECT * FROM Postagem WHERE idPostagem ='$idPostagem'");
    return array(
        "idPostagem" => intval($arr['idPostagem']),
        "titulo" => $arr['titulo'],
        "mensagem" => $arr['mensagem'],
    );
}
?>