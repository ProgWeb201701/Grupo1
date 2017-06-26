<?php
/**
 * Created by PhpStorm.
 * User: naiha
 * Date: 22/06/2017
 * Time: 22:18
 */



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../Estilo/estilo1.css" type="text/css">
    <link rel="shortcut icon" href="../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../Estilo/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component1.css" />
    <script src="js/modernizr-2.6.2.min.js"></script>


    <link rel="icon" href="../imagens/icone1.ico">
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Duo Programming</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Linguagens <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"> <button id="botaoJava" type="button" class="btn btn-primary btn-md">Java</button></a></li>
                    <li><a href="#"> <button id="botaoC" type="button" class="btn btn-primary btn-md">C</button></a></li>
                    <li><a href="#"> <button type="button" class="btn btn-primary btn-md">PHP</button></a></li>
                    <li><a href="#"> <button type="button" class="btn btn-primary btn-md">Python</button></a></li>
                </ul>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="create.php"><span class="glyphicon glyphicon-user"></span>Entrar</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Sair</a></li>
        </ul>

    </div>

</nav>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="java.php" </a>
                <img src="../imagen/inicial.png" class="img-circle" alt="Lights" style="width:100%">
                <div class="caption">
                    <h2>Java</h2>
                </div>

            </div>

        </div>

        <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="php.php"  </a>
                <img src="../imagen/fase2.png" class="img-" alt="Nature" style="width:100%">
                <div class="caption">
                    <h2>PHP</h2>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <a href="c.php"  </a>
                <img src="../imagen/Fase3.png"  class="img-circle" alt="Fjords" style="width:100%">
                <div class="caption">
                    <h2>C</h2>
                </div>

            </div>
        </div>





</body>
</html>





