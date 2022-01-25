<?php
require 'arrayDB.php';
require 'funciones.php';

$id=$_POST["operacion"];

echo "Avión: " . $id . "<br>";
compania($vueloCompania,$id);
mediaPasajeros($vueloPasajeros,$id);
echo "Últimos destinos: ";
destinos($vueloDestino, $id);
fabricante($vueloFabricante,$id);
minTot($vueloDuracion, $id);


?>