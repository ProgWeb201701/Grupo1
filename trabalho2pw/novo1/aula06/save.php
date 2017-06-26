<?php
ini_set('display_errors', 1);

// $mysqli = new mysqli("localhost","bernardino","mysql", "catalog");
// $sku = $_POST['sku'];
// $name = $_POST['name'];
// $price = $_POST['price'];
// $sql = "INSERT INTO products SET id=NULL, sku=$sku, name=$name, price=$price";
// if ($mysqli->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $mysqli . "<br>" . $mysqli->error;
// }

$mysqli = new mysqli("localhost","root","", "duo");

$query = "INSERT INTO usuario SET id_usuario=NULL, nome_usuario=?, email_usuario=?,senha_usuario=?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('ssd', $nome_usuario, $email_usuario, $senha_usuario);

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
//echo "$sku > $name  > $price";

$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: view.php");
exit();

?>



