<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../Estilo/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			
		});
	</script>
</head>
<body>

<div class="container">
<h2>Cadastro de Usuarios</h2>
<br>
<?php
ini_set('display_errors', 1);
$mysqli = new mysqli("localhost","root","", "duo");
$query = "SELECT id_usuario,nome_usuario, email_usuario, senha_usuario FROM usuario ORDER BY nome_usuario";
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
echo "<table class='table table-striped table-responsive table-condensed'>";
echo "<tr><th>Nome do Usuario</th><th>email</th><th>senha</th></tr>";

?>
	<div class="">
		<a href="create.php" class="btn btn-success">Cadastrar <i class='glyphicon glyphicon-plus'></i></a>
	</div>
</div>
</body>
</html>

