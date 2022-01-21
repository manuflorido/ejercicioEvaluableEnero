<?php
//FOREACH PARA EL MEDIA DE PASAJEROS
$numero=0;
$contador=0;
foreach ($vueloPasajeros as $pasajeros) {
    $vuelesito=$pasajeros["Avion"];
    $pasajerito=$pasajeros["Pasajeros"];
    
    if ($vuelesito==$id) {
        $numero=$numero+$pasajerito;

    }

}
echo "Compañía: " . $fabr . "<br>";

//FOREACH PARA EL FABRICANTE DE LOS AVIONES
foreach ($vueloFabricante as $fabricante) {
    $avion=$fabricante["Avion"];

    if ($avion==$id) {
        $fabr=$fabricante["Fabricante"];

    }

    
}
echo "Suma de pasajeros: " . $numero . "<br>";
?>