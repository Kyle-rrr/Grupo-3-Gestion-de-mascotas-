<?php

// Verifico si recibo el ID mediante POST; si no, termina el script con un mensaje de error
if (!isset($_POST['id']) || empty($_POST['id'])) {
    exit("Error: ID no proporcionado.");
}
// Recibo los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$edad = $_POST['edad'];
// Creo la conexión con la base de datos usando PDO
$pdo = new PDO("mysql:host=localhost;dbname=mascotas_db", "root", "");
// armo la consulta SQL para actualizar los datos de la mascota según el ID
$sql = "UPDATE mascotas SET nombre='$nombre', tipo='$tipo', edad='$edad' WHERE id=$id";

// Ejecuto la consulta
$pdo->exec($sql);
// Se manda el mensaje que sera recivido por el frontal
echo "Mascota actualizada correctamente.";
?>
