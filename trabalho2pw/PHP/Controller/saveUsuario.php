<?php
/**
 * Created by PhpStorm.
 * User: Daniele Martins
 * Date: 11/06/2017
 * Time: 22:27
 */

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

$mysqli = new mysqli("localhost","root","", "pw");

$query = "INSERT INTO usuario SET idUsuario=NULL, nome=?, email=?, senha=?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('ssi', $nome, $email, $senha);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//echo "$sku > $name  > $price";

$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: ../View/principal.php");
exit();

?>



