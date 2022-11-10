<?php
require_once('config.php');

class DB {

    // Método que obtiene la conexion a la base de datos con el valor de las constantes definas en config.php
    private static function getConnection() {
        $conexion = null;
        try {
            $conexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR - No se ha podido conectar con la BD: ' . $e->getMessage();
        }
        return $conexion;
    }
   
    public static function textConexion(){
      $conexion = self::getConnection();
      return $conexion;
    }

}