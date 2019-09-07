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
                <?php require("./formulariologin.php") ?>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Cadastro</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="lib/js/jquery-3.4.1.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/mdb.min.js"></script>
</body>

</html>