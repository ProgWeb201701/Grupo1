<?php
session_start();
include_once("seguranca.php");
echo "Bem vindo usuário ".$_SESSION['usuarioNome'];
?>
<br />
<a href="../Model/sair.php">Sair</a>