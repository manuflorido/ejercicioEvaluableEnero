<?php
include_once 'arrayDB.php';

//FUNCION PARA LA COMPAÑIA DE LOS AVIONES
function compania($vueloCompania, $id){
foreach ($vueloCompania as $compania) {
    $avion=$compania["Avion"];
    
    if ($avion==$id) {
        $comp=$compania["Compania"];
        echo "Compañía: " . $comp . "<br>";
    }
}
    
}

//FUNCION PARA EL MEDIA DE PASAJEROS
function mediapasajeros($vueloPasajeros, $id){
$numero=0;
$contador=0;
foreach ($vueloPasajeros as $pasajeros) {
    $vuelesito=$pasajeros["Avion"];
    $pasajerito=$pasajeros["Pasajeros"];
    
    if ($vuelesito==$id) {
        $numero=$numero+$pasajerito;
        $contador++;

    }

}
$numero=$numero/$contador;
echo "Media de pasajeros: " . $numero . "<br>";
}

//FUNCION PARA EL FABRICANTE DE LOS AVIONES
function fabricante($vueloFabricante, $id){
foreach ($vueloFabricante as $fabricante) {
    $avion=$fabricante["Avion"];

    if ($avion==$id) {
        $fabr=$fabricante["Fabricante"];
        echo "Fabricante: " . $fabr . "<br>";
    }
}
}

//FUNCION PARA ULTIMOS DESTINOS DE LOS AVIONES
function ultdes($vueloDestino, $id){
        echo "Últimos destinos: ";
foreach ($vueloDestino as $destino) {
    $avion=$destino["Avion"];
    
    if ($avion==$id) {
        $dest=$destino["Destino"];
        echo $dest . " ";
    }
}
echo "<br>";
}

//FUNCION PARA MINUTOS TOTALES DE VUELO
function mintot($vueloDuracion, $id){
    $numero=0;
foreach ($vueloDuracion as $duracion) {
$avion=$duracion["Avion"];

if ($avion==$id) {
    $dur=$duracion["Minutos"];
    $numero=$numero+$dur;
}
}
echo "Minutos totales de vuelo: " . $numero;
}

?>