<?php
require 'arrayDB.php';
require 'funciones.php';

echo "Estadísticas de Aeropuertos" . "<br>";

mediaHoras($vueloDuracion);
totalPasajeros($vueloPasajeros);
avionFab($vueloFabricante);
maxCiu($vueloDestino);
?>