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
<h2>Cadastro de Produtos</h2>
<br>
<?php
ini_set('display_errors', 1);
$mysqli = new mysqli("localhost","root","", "duo");
$query = "SELECT id_usuario, nome_usuario, email_usuario, senha_usuario FROM usuario ORDER BY nome_usuario";
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
echo "<table class='table table-striped table-responsive table-condensed'>";
echo "<tr><th>nome_usuario</th><th>email_usuario</th><th>senha_usuario</th></tr>";
while (list($id_usuario,$nome_usuario,$email_usuario, $senha_usuario) = $result->fetch_row()) {
    echo "<tr><td>$nome_usuario</td><td>$email_usuario</td><td>$senha_usuario</td>";
    echo "<td>
    <a class='btn btn-default btn-sm' title='Editar' href='edit.php?id_usuario=$id_usuario'><i class='glyphicon glyphicon-edit'></i></a>
	<a class='btn btn-default btn-sm' title='Excluir' href='delete.php?id_usuario=$id_usuario'><i class='glyphicon glyphicon-trash'></i></a></td>";
    echo "<tr>";
}
echo "<tr><td colspan='3'>Total de registros</td><td>$mysqli->affected_rows</td></tr>";
echo "</table>";
$result->close();
?>
	<div class="">
		<a href="create.php" class="btn btn-success">Cadastrar</a>
	</div>
</div>
</body>
</html>