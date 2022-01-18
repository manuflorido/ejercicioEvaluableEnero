<?php
include_once 'arrayDB.php';
$id=$_POST["operacion"];

//FOREACH PARA EL NÚMERO DE PASAJEROS
$numero=0;
foreach ($vueloPasajeros as $pasajeros) {
    $vuelesito=$pasajeros["Avion"];
    $pasajerito=$pasajeros["Pasajeros"];
    
    if ($vuelesito==$id) {
        $numero=$numero+$pasajerito;

    }

}

//FOREACH PARA EL FABRICANTE DE LOS AVIONES
foreach ($vueloFabricante as $fabricante) {
    $avion=$fabricante["Avion"];

    if ($avion==$id) {
        $fabr=$fabricante["Fabricante"];

    }

    
}
echo "Compañía: " . $fabr . "<br>";
echo "Suma de pasajeros: " . $numero . "<br>";
?>