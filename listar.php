<?php

// Incluyo el archivo que contiene la clase de conexión a la base de datos
require_once("../Clases/Conexion.php");


// Se crea una instancia de la clase conexión
$conexion = new Conexion();
$mascotas = $conexion->select("SELECT * FROM mascotas");

// Recorro el resultado e imprimo las filas de una tabla HTML
foreach ($mascotas as $fila) {
    echo "<tr>
            <td>{$fila['Id']}</td>
            <td>{$fila['Nombre']}</td>
            <td>{$fila['Tipo']}</td>
            <td>{$fila['Edad']}</td>
          </tr>";
}
?>


