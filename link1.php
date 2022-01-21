<?php
include_once 'arrayDB.php';
include_once 'funciones.php';

$id=$_POST["operacion"];

compania($vueloCompania,$id);
mediapasajeros($vueloPasajeros,$id);
ultdes($vueloDestino, $id);
fabricante($vueloFabricante,$id);
mintot($vueloDuracion, $id);


?>