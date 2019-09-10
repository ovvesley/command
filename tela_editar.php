<?php
require "./mysql_connect.php";
session_start();
if (!isset($_SESSION["USER_INFO"])) {
  header("location: ./pagina_erro.php");
}

$idPostagem = $_POST['idPostagem'];
$postagem = pegar_postagem($idPostagem);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Command|Editar</title>


    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/css/mdb.min.css">

</head>
<body>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal">Adicionar Comando</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="editar.php">
            Título: <br>
            <input type="text" class="form-control" name="titulo" value="<?php echo($postagem['titulo']);?>"><br>
            Mensagem: <br>
            <textarea name="mensagem" class="form-control" rows="5" placeholder="Insira seu(s) comando(s)" size=60><?php echo($postagem['mensagem']); ?></textarea>
            <br><br>
            <input type="hidden" name="idPostagem" value="<?php echo($postagem['idPostagem']);?>">
            <hr>
            <div class="modal-footer">
            <input  type="submit" class="btn aqua-gradient" value="Salvar">
      </div>
      </div>

    </div>
  </div>
</div>




<script src="lib/js/jquery-3.4.1.min.js"></script>
<script src="lib/js/popper.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/mdb.min.js"></script>
<script>

$(document).ready(function () {
    $('#modal').modal('show');
});
</script>
</body>

</html>


<?php
?>