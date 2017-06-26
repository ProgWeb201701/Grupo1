<?php
ini_set('display_errors', 1);

$mysqli = new mysqli("localhost","root","", "duo");

$query = "DELETE FROM usuario WHERE id_usuario=?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('i', $id_usuario);

$id_usuario = $_GET['id_usuario'];

$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: view.php");
exit();

?>



