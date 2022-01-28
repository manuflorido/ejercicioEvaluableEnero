<?php
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='links.css'>
    <title>Manuel Florido</title>
</head>
<body class='body'>
    <h1 class='centrado'>Estadísticas de Aeropuerto</h1>";

require 'arrayDB.php';
require 'funciones.php';

echo "<p>";
mediaHoras($vueloDuracion);
echo "</p>";
echo "<p>";
totalPasajeros($vueloPasajeros);
echo "</p>";
echo "<p>";
avionFab($vueloFabricante);
echo "</p>";
echo "<p>";
maxCiu($vueloDestino);
echo "</p>";

echo"
</body>
</html>";
//TRABAJO FINALIZADO 28/01/2022 POR MANUEL FLORIDO
?>