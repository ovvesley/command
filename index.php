
<?php
session_start();
if (isset($_SESSION["USER_INFO"])) {
    header("location: ./inicio.php");
}

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
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <?php require "./formulariologin.php"?>
            </div>
            <div class="col-md-6 login-form-2">
            <?php require "./formulariocadastro.php"?>
            </div>
        </div>
    </div>
    <script src="lib/js/jquery-3.4.1.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/mdb.min.js"></script>
</body>

</html>