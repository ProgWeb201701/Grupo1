<?php
/**
 * Created by PhpStorm.
 * User: Daniele Martins
 * Date: 11/06/2017
 * Time: 22:27
 */

ini_set('display_errors', 1);


$mysqli = new mysqli("localhost","root","", "pw");

$query = "INSERT INTO usuario SET idUsuario=NULL, nome=?, email=?, senha=?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('ssi', $nome, $email, $senha);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: ../View/principal.php");
exit();

?>



