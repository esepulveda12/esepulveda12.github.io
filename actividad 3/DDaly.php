<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "servidores_daly";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$producto = $_POST['producto'];


$sql = "INSERT INTO clientes (nombre,apellido,telefono,producto) VALUES ('$nombre','$apellido','$telefono', '$producto')";

if ($conn->query($sql) === TRUE) {
  echo "Registro exitoso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
