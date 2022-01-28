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
    <h1 class='centrado'>Estadística de Ciudades</h1>";

require 'arrayDB.php';
require 'funciones.php';

echo "<p>";
ciuTot($vueloDestino);
echo "</p>";
echo "<p>";
//sumciu incluye la ciudad más visitada y las que menos
sumCiu($vueloDestino);
echo "</p>";

echo"
</body>
</html>";
//TRABAJO FINALIZADO 28/01/2022 POR MANUEL FLORIDO
?>