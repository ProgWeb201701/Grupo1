<?php
session_start();
include_once '../Controller/Usuario.php';
$usuario = new Usuario();

if (isset($_POST['submit'])) {
    extract($_POST);
    $login = $usuario->verifica_login($email_usuario, $senha);
    if ($login) {
        header("location:principal.php");
    } else {
        echo 'Usuário ou senha estão incorretos';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - Duo Programimng</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>

<body>
<div id="container" class="container">
    <h1>Login</h1>
    <form action="" method="post" name="login">
        <table class="table " width="400">
            <tr>
                <th>Email:</th>
                <td>
                    <input type="text" name="email_usuario" required>
                </td>
            </tr>
            <tr>
                <th>Senha:</th>
                <td>
                    <input type="password" name="senha" required>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input class="btn" type="submit" name="submit" value="Login" onclick="return(submitlogin());">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><a href="view_registration.php">Ainda não é cadastrado? Registre-se aqui</a></td>
            </tr>

        </table>
    </form>
</div>
<script>
    function submitlogin() {
        var form = document.login;
        if (form.email_usuario.value == "") {
            alert("Entre com email.");
            return false;
        } else if (form.senha.value == "") {
            alert("Entre com a senha.");
            return false;
        }
    }
</script>


</body>