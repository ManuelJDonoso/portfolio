<?php
require_once "../../../config/DB.php";
DB::textConexion();

$tecnologia=DB::getTecnologiesProyect(1);
var_dump($tecnologia);