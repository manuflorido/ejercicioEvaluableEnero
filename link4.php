<?php
require 'arrayDB.php';
require 'funciones.php';

$id=$_POST["operacion"];

echo "Destinos del avión: ";
destinos($vueloDestino, $id);


?>