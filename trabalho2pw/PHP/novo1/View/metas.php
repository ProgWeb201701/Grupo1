<?php
/**
 * Created by PhpStorm.
 * User: naiha
 * Date: 25/06/2017
 * Time: 20:59
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">

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

<div class="container">
    <h2>Ótimo. Agora, escolha uma meta diária.</h2>
    <div id="metas">

        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                Casual
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
               Regular
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                Forte
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
                Insano
            </label>
        </div>

        <button type="button" class="btn btn-primary btn-md">Definir Metas</button>


    </div>



</body>
</html>
