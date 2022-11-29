<?php
require_once "../../../config/DB.php";


// $tecnologia=DB::getTecnologiesProyect(1);
// var_dump($tecnologia);

$proyectos=DB::getProyectsByTechnologies(["html","php"]);
  var_dump($proyectos);