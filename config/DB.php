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
   


    //obtener las tecnologias y lenguajes usados en un proyecto
    public static function getTechnologiesProyect($proyect_technologies){
        
        $conexion = self::getConnection();
        try{
            $sql= "SELECT tecnologia FROM proyectos INNER JOIN union_proyect_tecno on union_proyect_tecno.proyecto_fk = proyectos.id_proyectos INNER JOIN languages_technologies on union_proyect_tecno.tecnologia_fk = languages_technologies.id_tecnologias WHERE proyectos.id_proyectos='".$proyect_technologies."'";
            
            $resultado = $conexion->query($sql);
            $technologies = array();

            if ($resultado) {
                    $row = $resultado->fetch();
                    while ($row != null) {

                        $technologies[] = $row;
                        $row = $resultado->fetch();
                    }
                }

                $conexion = null;

                return $technologies;
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
                        $technologies =self::getTechnologiesProyect($row["id_proyectos"]);   
                        $row[]=$technologies;
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

    //obtener datos de un proyecto
    public static function getProyect( $id){
        
        $conexion = self::getConnection();
        try{
            $sql= "SELECT * FROM proyectos  WHERE id_proyectos = '".$id."'";
            
            $resultado = $conexion->query($sql);
            $proyects = array();

            if ($resultado) {
                    $row = $resultado->fetch();
                    while ($row != null) {
                        $technologies =self::getTechnologiesProyect($row["id_proyectos"]);   
                        $row[]=$technologies;
                        $proyects[] = $row;
                        $row = $resultado->fetch();
                    }
                }

                $conexion = null;

                return $proyects[0];
        } catch (PDOException $e) {
                echo "ERROR - No se pudieron obtener los proyectos: " . $e->getMessage();
        }
    
    }


    //obtener  proyectos con las tecnologias o lenguajes  
    public static function getProyectsByTechnologies( $ArrayTechnologies){
        
        $conexion = self::getConnection();
        try{
            $sql= "SELECT id_proyectos,titulo,Title,parrafos,paragraph, dir_img dir_proyect, dir_code FROM proyectos INNER JOIN union_proyect_tecno on union_proyect_tecno.proyecto_fk = proyectos.id_proyectos INNER JOIN languages_technologies on union_proyect_tecno.tecnologia_fk = languages_technologies.id_tecnologias WHERE tecnologia='php' or tecnologia='html' GROUP BY id_proyectos";
            
            $resultado = $conexion->query($sql);
            $proyects = array();

            if ($resultado) {
                    $row = $resultado->fetch();
                    while ($row != null) {
                         $technologies =self::getTechnologiesProyect($row["id_proyectos"]);   
                         $temTechnologies=array();
                         //var_dump ($technologies);
                         foreach ($technologies as $key => $value) {
                            $temTechnologies [] =$value["tecnologia"];
                         }

                       $valid =true;
                         
                        foreach ($ArrayTechnologies as $key => $value) {
                           $existe = in_array($value,$temTechnologies);
                            if(!$existe) $valid=false;
                        }
                        //  var_dump($existe);
                        //  var_dump($temTechnologies);
                        //  var_dump($ArrayTechnologies);
                         var_dump($valid);
                         
                         $row[]=$technologies;
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