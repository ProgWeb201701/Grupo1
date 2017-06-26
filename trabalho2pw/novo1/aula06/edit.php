<?php
ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$mysqli = new mysqli("localhost","root","", "duo");
	$query = "UPDATE usuario SET nome_usuario=?, email_usuario=?, senha_usuario=? WHERE id_usuario=?";
	$stmt = $mysqli->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('ssdi', $nome_usuario, $email_usuario, $senha_usuario, $id_usuario);
	$nome_usuario = $_POST['nome_usuario'];
	$email_usuario = $_POST['email_usuario'];
	$senha_usuario = $_POST['senha_usuario'];
	$id = $_POST['id'];
	
	$stmt->execute();
	$stmt->close();
	$mysqli->close();
	// echo $sku, $name, $price, $id;
	// die("Morreu Silvio!");
	header("Location: view.php");
}
?>
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
<?php
ini_set('display_errors', 1);
$mysqli = new mysqli("localhost","root","", "duo");
$id = $_GET['id'];
$query = "SELECT nome_usuario, email_usuario, senha_usuario FROM usuario WHERE id_usuario=$id_usuario";
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$nome_usuario = $row['nome_usuario'];
		$email_usuario = $row['email_usuario'];
		$senha_usuario = $row['senha_usuario'];
	}
}
?>
<div class="container">
	<h2>Edição de Produto</h2>
	<form method="POST" action="edit.php">
	<input type="hidden" name="id" value="<?php echo htmlspecialchars($id_usuario); ?>">
	<div class="editor-label"><label>Sku</label></div>
	<div class="editor-field"><input type="text" name="nome_usuario" value="<?php echo htmlspecialchars($nome_usuario); ?>"></div>
	<div class="editor-label"><label>Nome</label></div>
	<div class="editor-field"><input type="text" name="email_usuario" value="<?php echo htmlspecialchars($email_usuario); ?>"></div>
	<div class="editor-label"><label>Preço</label></div>
	<div class="editor-field"><input type="text" name="senha_usuario" value="<?php echo htmlspecialchars($senha_usuario); ?>"></div>
	<br>
	<div class="editor-field">
		 <button id="save" name="save" type="submit" class="btn btn-success" value='Atualizar'>Salvar
		 <i class='glyphicon glyphicon-floppy-disk'></i>
		 </button>
	</div>
	</form>
</div>
</body>
</html>










