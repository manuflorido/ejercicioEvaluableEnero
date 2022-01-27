<?php
require 'arrayDB.php';
require 'funciones.php';

$id=$_POST["operacion"];

echo "Avión: " . $id . "<br>";
echo "Destinos del avión: ";
destinos($vueloDestino, $id);
fabricante($vueloFabricante,$id);
minTot($vueloDuracion, $id);
mediaHorasAvion($vueloDuracion,$id);
mediaPasajeros($vueloPasajeros,$id);
totalPasajerosAvion($vueloPasajeros, $id);
?>