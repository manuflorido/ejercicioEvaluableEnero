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
        echo $dest . "//";
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

//FUNCION NUMERO TOTAL DE CIUDADES
function ciutot($vueloDestino){
//Crea un array sin que se repitan los campos de la columna 'Destino'
$arrayUnique=array_unique(array_column($vueloDestino, 'Destino'));
//Hace intersección entre el array de arriba y el original.
$arrayLimpio=array_intersect_key($vueloDestino,$arrayUnique);
echo "Número de ciudades a las que se ha viajado; " . count($arrayLimpio) . "<br>";
}

//FUNCION VECES QUE SE HA IDO A UNA CIUDAD
function sumciu($vueloDestino){
    $cuentaRoma=0;
    $cuentaMilan=0;
    $cuentaMad=0;
    $cuentaLim=0;
    $cuentaEsta=0;
    $cuentaBil=0;
foreach ($vueloDestino as $destino) {
    $ciudad=$destino["Destino"];
    if ($ciudad=='Roma') {
        $cuentaRoma++;
    }
    if ($ciudad=='Milán') {
        $cuentaMilan++;
    }
    if ($ciudad=='Estambul') {
        $cuentaEsta++;
    }
    if ($ciudad=='Madrid') {
        $cuentaMad++;
    }
    if ($ciudad=='Lima') {
        $cuentaLim++;
    }
    if ($ciudad=='Bilbao') {
        $cuentaBil++;
    }
}
echo "Número que se ha ido a una ciudad determinada: " . "<br>";
    echo "Roma: " . $cuentaRoma . "<br>";
    echo "Milán: " . $cuentaMilan . "<br>";
    echo "Estambul: " . $cuentaEsta . "<br>";
    echo "Madrid: " . $cuentaMad . "<br>";
    echo "Lima: " . $cuentaLim . "<br>";
    echo "Bilbao: " . $cuentaBil . "<br>";
}
?>