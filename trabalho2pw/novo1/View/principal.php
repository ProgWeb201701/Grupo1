<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Estilo/estilo.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
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
            <li><a href="aula.php"><span class="glyphicon glyphicon-user"></span>Criar um Perfil</a></li>
                 </ul>

    </div>
</nav>


<br><br>

</body>
</html>