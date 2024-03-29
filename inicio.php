<?php
session_start();
if (!isset($_SESSION["USER_INFO"])) {
  header("location: ./pagina_erro.php");
}

require "PublicacaoComponent.php";


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Command</title>
  <!-- CSS IMPORT -->

  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/css/mdb.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand fa-lg" href="#">Commands .</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item active d-flex align-self-center">
          <a style="border-radius:25px;" class="nav-link " href="#" data-toggle="modal" data-target="#modalAddPublicacao">Add <i class="fa fa-plus-circle fa-lg "></i> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <form action="informacoes-usuario.php">
            <button class="nav-link btn btn-outline-light " style="border-radius:25px;position:absolute top:50% left:50%" type="submit"><i class="fa fa-user"></i> <span class="sr-only"></span></button>
          </form>
        </li>

        <li class="nav-item ">
          <form action="sairsessao.php">
            <button class="nav-link btn btn-outline-light " style="border-radius:25px;position:absolute top:50% left:50%" type="submit">Fazer Logout <span class="sr-only"></span></button>
          </form>
        </li>



      </ul>
    </div>
  </nav>

  <div class="container w-100">
    <!-- <div class=""></div> -->

    <div class="row">
      <?php
      require "./mysql_connect.php";

      $idUsuario = $_SESSION['USER_INFO']['idUsuario'];
      $res = mysql_db_query("SELECT * FROM Postagem WHERE idUsuario  ='$idUsuario' ORDER BY idPostagem DESC");

      $arrayMinhasPublicacoes = mysqli_fetch_assoc($res);

      while ($arrayMinhasPublicacoes) {
        mostrarPublicacao($arrayMinhasPublicacoes);
        $arrayMinhasPublicacoes = mysqli_fetch_assoc($res);
      }


      ?>
    </div>

  </div>


  <div class="modal fade" id="modalAddPublicacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Comando</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php require "./formulariopublicacao.php" ?>
        </div>

      </div>
    </div>
  </div>

  <script src="lib/js/jquery-3.4.1.min.js"></script>
  <script src="lib/js/popper.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>

  <script src="lib/js/mdb.min.js"></script>

</body>

</html>