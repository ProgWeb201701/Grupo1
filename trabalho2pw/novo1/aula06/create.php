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
	<h2>Cadastro de Novo Produto</h2>
	<form method="POST" action="save.php">
	<div class="editor-label"><label>Nome</label></div>
	<div class="editor-field"><input type="text" name="nome"></div>
	<div class="editor-label"><label>Email</label></div>
	<div class="editor-field"><input type="text" name="email"></div>
	<div class="editor-label"><label>Senha</label></div>
	<div class="editor-field"><input type="text" name="senha"></div>
	<br>
	<div class="editor-field">
		 <button id="save" type="submit" class="btn btn-success">Salvar
		 <i class='glyphicon glyphicon-floppy-disk'></i>
		 </button>
	</div>
	</form>
</div>
</body>
</html>