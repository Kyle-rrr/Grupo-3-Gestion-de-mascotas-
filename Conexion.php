<?php

// Creo clase conexion, para poder gestionar la conexion a la base de datos
class Conexion{
    // Declaro los parametros de para conectar la base de datos
    public $Host = "localhost"; // Servidord
    public $Usuario = "root"; // Usuario
    public $Password = "";  // Clave
    public $Db = "mascotas_db"; // Nombre de la base de datos

    //Metodo para hacer la conexion a la base de datos usando PDO
    public function conectar(){
        // Creo el objeto para la conexion a la base de datos
        $PDO = new PDO("mysql:host=localhost;dbname=mascotas_db","root", "");
        // Retorna el objeto para utilizar las consultas
        return $PDO;
    }
    // Metodo para insertar los datos en la base de datos
    public function insert($sql) {
        // Llamo al metodo conectar para la conexion a la base de datos
        $db = $this->conectar();
        // Ejecuto la consulta y retorna el resultado
        return $db->query($sql);
    }
    // Metodo para actualizar los datos
    public function update($sql) {
        // LLamo al metodo conectar....
        $db = $this->conectar();
        // Ejecuto la consulta y retorna el resultado actualizando los datos
        return $db->query($sql);
    }
    // Metodo para eliminar los datos
    public function delete($sql) {
        // Llamo al metodo conectar...
        $db = $this->conectar();
        // Ejecuto la consuta y retorna el resultado eliminando los datos
        return $db->query($sql);
    }
    // Metodo para seleccionar datos
    public function select($sql) {
        // Llamo al metodo conectar...
        $db = $this->conectar();
        // Ejecuta la consulta de seleccion y guarda el resultado
        $resultado = $db->query($sql);
        // Ejecuto la consulta y retorna como un array asociativo, osea que retorna todas las filas de la tabla al que se consulta.
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>