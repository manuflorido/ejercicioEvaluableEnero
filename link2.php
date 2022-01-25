<?php
require 'arrayDB.php';
require 'funciones.php';

echo "Estadísticas de Ciudades" . "<br>";
ciuTot($vueloDestino);
//sumciu incluye la ciudad más visitada y las que menos
sumCiu($vueloDestino);

?>