<?php
include_once '../Controller/Usuario.php';
$usuario = new Usuario();

if (isset($_POST['submit'])){
    extract($_POST);
    $cadastro = $usuario->registra_usuario($nome_usuario, $senha_usuario, $email_usuario);
    if ($cadastro) {
        // Registration Success
        echo "<div style='text-align:center'>Cadastro salvo com sucesso <a href='login.php'>Clique aqui</a> para fazer login</div>";
    } else {
        // Registration Failed
        echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastro - Duo Programing</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>

<body>
<div id="container" class="container">
    <h1>Cadastro de Usuário</h1>
    <form action="" method="post" name="reg">
        <table class="table">
            <tr>
                <th>Nome:</th>
                <td>
                    <input type="text" name="nome_usuario" required>
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <input type="email" name="email_usuario" required>
                </td>
            </tr>
            <tr>
                <th>Senha:</th>
                <td>
                    <input type="password" name="senha_usuario" required>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input class="btn" type="submit" name="submit" value="Salvar" onclick="return(submitreg());">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><a href="login.php">Já é cadastrado? Clique Aqui!</a></td>
            </tr>

        </table>
    </form>
</div>

<script>
    function submitreg() {
        var form = document.reg;
        if (form.nome_usuario.value == "") {
            alert("Preencha com um nome.");
            return false;
        } else if (form.email_usuario.value == "") {
            alert("Preencha com um email.");
            return false;
        } else if (form.senha_usuario.value == "") {
            alert("Preencha com uma senha.");
            return false;
        }
    }
</script>
</body>

</html>