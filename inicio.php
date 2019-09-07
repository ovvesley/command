<?php
session_start();
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

</head>
<body>
    <div class="container w-100">
    <!-- <div class=""></div> -->

    <div class="row">
    <?php
        for ($i = 0; $i < 5; $i++) {
            mostrarPublicacao("Instalar o Git no Linux", "sudo apt install git");
        }
    ?>
    </div>

</div>
<script src="lib/js/jquery-3.4.1.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/mdb.min.js"></script>

</body>
</html>
