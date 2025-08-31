<?php
// Verifico si recibo el ID mediante POST; si no, termina el script con un mensaje de error
if (!isset($_POST['id']) || empty($_POST['id'])) {
    exit("Error: ID no proporcionado o vacío.");
}
// obtengo el ID de la mascota a eliminar
$id = $_POST['id'];

// armo la consulta SQL para eliminar el registro de la mascota según su ID
$pdo = new PDO("mysql:host=localhost;dbname=mascotas_db", "root", "");
$sql = "DELETE FROM mascotas WHERE id=$id";
$pdo->exec($sql);
// devuelvo respuesta  indicando éxito
echo "Mascota eliminada correctamente.";
?>
