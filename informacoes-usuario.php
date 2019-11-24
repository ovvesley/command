<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informações do Usuario</title>

    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/css/mdb.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .axis path,
        .axis line {
            fill: none;
            stroke: #000;
            shape-rendering: crispEdges;
        }

        .bar {
            fill: orange;
        }

        .bar:hover {
            fill: orangered;
        }

        .x.axis path {
            display: none;
        }

        .d3-tip {
            line-height: 1;
            font-weight: bold;
            padding: 12px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            border-radius: 2px;
        }

        /* Creates a small triangle extender for the tooltip */
        .d3-tip:after {
            box-sizing: border-box;
            display: inline;
            font-size: 10px;
            width: 100%;
            line-height: 1;
            color: rgba(0, 0, 0, 0.8);
            content: "\25BC";
            position: absolute;
            text-align: center;
        }

        /* Style northward tooltips differently */
        .d3-tip.n:after {
            margin: -1px 0 0 0;
            top: 100%;
            left: 0;
        }
    </style>

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



    <div class="container">
        <div class='card'>
            <div class="card-header">
                <h2 class="card-title">Informacoes do Usuario</h2>
            </div>
            <div class='card-body'>


                <div class="row">
                    <div class="col-10">
                        <label for="">Nome</label>
                        <input class="form-control" type="text" disabled value="[ ]">
                        <label for="">Email</label>
                        <input class="form-control" type="text" disabled value="[ ]">
                    </div>
                </div>


                <div class="row">
                    <label for="">Grafico 1</label>
                    <div id='grafico1'>
                        <!-- GRAFICO GERADO AQUI -->
                    </div>

                </div>

                <div class="row">
                    <label for="">Grafico 2</label>
                    <div id='grafico2'>
                        <!-- GRAFICO GERADO AQUI -->
                    </div>

                </div>

                <div class="row">
                    <label for="">Grafico 3</label>
                    <div id='grafico3'>
                        <!-- GRAFICO GERADO AQUI -->
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://d3js.org/d3.v3.min.js"></script>

    <script src="lib/js/jquery-3.4.1.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>

    <script src="lib/js/mdb.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
    <script src="grafico/grafico1.js"></script>
    <script src="grafico/grafico2.js"></script>
    <script src="grafico/grafico3.js"></script>


</body>

</html>