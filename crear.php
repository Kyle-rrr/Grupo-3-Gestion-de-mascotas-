<?php
// Incluyo el archivo que contiene la clase de conexión a la base de datos
require_once("../Clases/Conexion.php");
//Recibo los datos enviados desde el formulario (HTML) mediante el metodo POST
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$edad = $_POST['edad'];


// Ceo una nueva conexion a la base de datos utilizando PDO
$pdo = new PDO("mysql:host=localhost;dbname=mascotas_db", "root", "");
$sql = "INSERT INTO mascotas (nombre, tipo, edad) VALUES ('$nombre', '$tipo', '$edad')";
// Se ejecuta la consulta usando el metodo exec()
$pdo->exec($sql);
// Se manda el mensaje que sera recivido por el frontal
echo "Mascota creada correctamente.";
?>
