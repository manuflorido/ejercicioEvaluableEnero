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
    <h1 class='centrado'>Estadísticas de un Avión</h1>";

require 'arrayDB.php';
require 'funciones.php';

$id=$_POST["operacion"];

echo "<p>";
echo "Avión: " . $id . "<br>";
echo "</p>";
echo "<p>";
echo "Destinos del avión: ";
destinos($vueloDestino, $id);
echo "</p>";
echo "<p>";
fabricante($vueloFabricante,$id);
echo "</p>";
echo "<p>";
minTot($vueloDuracion, $id);
echo "</p>";
echo "<p>";
mediaHorasAvion($vueloDuracion,$id);
echo "</p>";
echo "<p>";
mediaPasajerosAvion($vueloPasajeros, $id);
echo "</p>";
echo "<p>";
totalPasajerosAvion($vueloPasajeros, $id);
echo "</p>";

echo"
<p><a href='link4.html'>Volver atrás</a></p>
</body>
</html>";
//TRABAJO FINALIZADO 28/01/2022 POR MANUEL FLORIDO
?>