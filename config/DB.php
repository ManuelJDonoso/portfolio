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

    //obtener las tecnologias y lenguajes usados en un proyecto
    public static function getTecnologiesProyect($proyect_tecnologies){
        
        $conexion = self::getConnection();
        try{
            $sql= "SELECT tecnologia FROM proyectos INNER JOIN union_proyect_tecno on union_proyect_tecno.proyecto_fk = proyectos.id_proyectos INNER JOIN languages_technologies on union_proyect_tecno.tecnologia_fk = languages_technologies.id_tecnologias WHERE proyectos.id_proyectos='".$proyect_tecnologies."'";
            
            $resultado = $conexion->query($sql);
            $tecnologies = array();

            if ($resultado) {
                    $row = $resultado->fetch();
                    while ($row != null) {

                        $tecnologies[] = $row;
                        $row = $resultado->fetch();
                    }
                }

                $conexion = null;

                return $tecnologies;
        } catch (PDOException $e) {
                echo "ERROR - No se pudieron obtener las tecnologias: " . $e->getMessage();
        }
    
    }

    //obtener todos los proyectos.
     public static function getAllProyects(){
        
        $conexion = self::getConnection();
        try{
            $sql= "SELECT * FROM proyectos  ";
            
            $resultado = $conexion->query($sql);
            $proyects = array();

            if ($resultado) {
                    $row = $resultado->fetch();
                    while ($row != null) {
                        $tecnologies =self::getTecnologiesProyect($row["id_proyectos"]);   
                        $row[]=$tecnologies;
                        $proyects[] = $row;
                        $row = $resultado->fetch();
                    }
                }

                $conexion = null;

                return $proyects;
        } catch (PDOException $e) {
                echo "ERROR - No se pudieron obtener los proyectos: " . $e->getMessage();
        }
    
    }

    


}