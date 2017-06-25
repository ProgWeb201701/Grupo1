<?php
session_start();
include_once '../Controller/Usuario.php';
$usuario = new Usuario();

if (isset($_POST['submit'])) {
    extract($_POST);
    $login = $usuario->verifica_login($email_usuario, $senha);
    if ($login) {
        header("location:home.php");
    } else {
        echo 'Email do usuário ou senha incorretos. Por favor tente novamente.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Cesar">
    <link rel="icon" href="../imagens/icone1.ico">

    <title>Área para Usuário Cadastrado</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

</head>

<body>
<div class="container">
    <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading text-center">Login</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>

        <input type="text" name="email_usuario" class="form-control" placeholder="Digitar o email" required autofocus><br/>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>

        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login"">

        <td><a href="view_registration.php">Ainda não é cadastrado? Registre-se aqui</a></td>
    </form>
</div> <!-- /container -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>