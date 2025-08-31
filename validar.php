<?php
// Require_once para poder acceder a la base de datos.
require_once("../Clases/Conexion.php");

// Recibo los parametros desde el login
$Usuario = $_POST["usuario"];
$Clave = $_POST["clave"];

// Creo una instancia de la conexion y conectar con PDO
$conexion = new Conexion();
$PDO = $conexion->conectar();

// Consulta hacia la base de datos
$sql = "SELECT * FROM usuario WHERE Usuario = '$Usuario' AND Clave = '$Clave'";
$resultado = $PDO->query($sql);


// Se verifica si hay un usuario registrado con esos datos
if ($resultado && $resultado->rowCount() == 1) {
    echo "ok";
} else {
    // Si no esta registrado, mandara un mensaje de datos incorrectos
    echo "Usuario o contraseña incorrectos";
}
?>

